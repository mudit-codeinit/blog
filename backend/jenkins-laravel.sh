#!/bin/sh

#check command input
if [ "$#" -ne 2 ];
then
        echo "JENKINS LARAVEL PUSH"
        echo "--------------------"
        echo ""
        echo "Usage : ./jenkins-laravel.sh blog"
        echo ""
        exit 1
fi

# Declare variables
currentdate=`date "+%Y-%m-%d"`
scriptpath="/usr/local/bin/jenkins"
destination_project="$1"
destination_branch=`echo "$2" | awk -F "/" '{printf "%s", $2}'`

# Get configuration variables
#echo "Getting config  ${scriptpath}/config/laravel/${destination_project}.conf "
#source  ${scriptpath}/config/laravel/${destination_project}.conf
echo "Pushing to $destination_branch .. "

# Declare functions
alert_notification() {
    echo "Push script failure : $2" | mail -s "Push script Failure" $1
}

sanity_check() {
    if [ $1 -ne 0 ]
    then
        echo "$2"
        alert_notification $alert_email "$2"
        exit 1
    fi
}

################
# STAGING PUSH #
################

    destination_user="ubuntu"
    destination_host="18.189.153.131"
    destination_dir="/var/www/blog"

      echo "destination_dir to $destination_dir .. "

    # Push command over ssh
    # ssh -l $destination_user $destination_host \
        cd $destination_dir;
        rm -rf composer.lock;
        git reset --hard;
        git fetch --all;
        git checkout -f $destination_branch;
        git reset --hard;
        git fetch --all;
        git pull origin $destination_branch;
        /usr/local/bin/composer install --no-interaction --prefer-dist --optimize-autoloader;
        php artisan clear-compiled;
        php artisan migrate --force;
        php artisan cache:clear;
        php artisan route:clear;
        #php artisan route:cache;
        php artisan view:clear;
        php artisan config:clear;
        php artisan config:cache;
        # npm i;
        # npm run dev;
        php artisan config:clear;
        /usr/bin/php ./vendor/bin/phpunit --log-junit ${destination_dir}/tests/results/${destination_project}_test1.xml
