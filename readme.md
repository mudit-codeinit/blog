<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

https://usefulangle.com/post/35/how-to-install-linux-apache-mysql-php-phpmyadmin-lamp-stack-on-ubuntu-16-04


<strong>Connect AWS SSH Using Cygwin64 Terminal</strong>

ssh -i 3decmuditcodeinit2019.pem ubuntu@<18.189.153.131>


<strong>Upgrade php Version on aws</strong>

Add the repository :
sudo add-apt-repository ppa:ondrej/php

Update : 
sudo apt-get update

Install 7.1:
sudo apt-get install php7.1 php7.1-common

if needed you can remove old packages:
sudo apt-get purge php7.0 php7.0-common





<strong>Install composer on aws Cammands</strong>



sudo curl -O https://getcomposer.org/composer.phar

sudo mv composer.phar composer

sudo chmod +x composer 

sudo mv composer /usr/local/bin

composer

<strong>Install Laravel on aws Cammands</strong>

cd /var/www/

composer global require laravel/installer

composer create-project --prefer-dist laravel/laravel blog "5.8.*"


<strong>Install Java-8 on AWS </strong>

      As root, go to this folder: /etc/apt/sources.list.d
      
      Locate this file: webupd8team-java.list and delete it.
      

sudo apt-get update 

sudo add-apt-repository ppa:webupd8team/java  

sudo apt-get update  

#sudo apt install oracle-java8-installer

sudo apt install oracle-java8-set default




<strong>Install Jenkines on AWS </strong>

sudo su 

sudo  apt-get  update

sudo wget -q -O - http://pkg.jenkins-ci.org/debian/jenkins-ci.org.key | apt-key add -

sudo  echo deb http://pkg.jenkins-ci.org/debian binary/ > /etc/apt/sources.list.d/jenkins.list

sudo apt-get update

sudo apt-get install jenkins


Now that Jenkins is running on port 8080 by default for HTTP connector, go to <Public_IP>:8080.

Now type Password

<strong>Setup Permission</strong>

sudo nano /etc/sudoers

jenkins ALL=(ALL) NOPASSWD: ALL


/bin/sh /usr/local/bin/jenkins/jenkins-laravel.sh blog "${GIT_BRANCH}"
