<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<!-- User Profile-->
				<li>
					<!-- User Profile-->
					<div class="user-profile d-flex no-block dropdown m-t-20">
						<div class="user-pic">
							@if(Auth::user()->fileUpload1)
								<img src="{{URL::to(Auth::user()->fileUpload1)}}" class="rounded-circle" width="40" alt="Avatar">
							@else								
								<img src="{{ URL::asset('admin_assets/img/avatars/avatar10.jpg') }}" alt="Avatar" class="rounded-circle"  width="40"/>
							@endif
						</div>
						<div class="user-content hide-menu m-l-10">
							<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<h5 class="m-b-0 user-name font-medium">{{ Auth::user()->first_name }} <i class="fa fa-angle-down"></i></h5>
								<span class="op-5 user-email">{{ Auth::user()->email }}</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
								<a class="dropdown-item" href="{{ URL::to('admin/profile') }}"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
								<a class="dropdown-item" href="{{ URL::to('admin/settings') }}"><i class="ti-settings m-r-5 m-l-5"></i> Settings</a>
								<a class="dropdown-item" href="{{ URL::to('admin/logout') }}"><i class="fas fa-sign-out-alt m-r-5 m-l-5"></i> Logout</a>
							</div>
						</div>
					</div>
					<!-- End User Profile-->
				</li>
				
<!--				<li class="p-15 m-t-10">
					<a href="{{ URL::to('admin/subadmins') }}" class="btn btn-block create-btn text-white no-block d-flex align-items-center">
						<i class="fa fa-plus-square"></i> 
						<span class="hide-menu m-l-5">Create New Subadmin</span> 
					</a>
				</li>-->
				
				
				<!-- User Profile-->
				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('dashboard')}}" href="{{ URL::to('admin/dashboard') }}" aria-expanded="false">
						<i class="mdi mdi-view-dashboard"></i>
						<span class="hide-menu">Dashboard</span>
					</a>
				</li>
                                
<!--				<li class="sidebar-item"> 
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-cart"></i>
						<span class="hide-menu">Products</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="{{ URL::to('admin/product/addnewproduct') }}" class="sidebar-link {{classActivePath('admin/product/addnewproduct')}}">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Products </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="{{ URL::to('admin/allproducts') }}" class="sidebar-link {{classActivePath('admin/allproducts')}}">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> All Products </span>
							</a>
						</li>
					</ul>
				</li>-->
                                
                                
				
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('users')}}" href="javascript:void(0);">
						<i class="mdi mdi-account-multiple-plus"></i>	
						<span class="hide-menu">Users</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a class="sidebar-link" href="{{ URL::to('admin/users') }}" >
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> All Users </span>
							</a>							
						</li>
					</ul>
				</li>
				
				 
				
				
								
				
				
<!--				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('newsletter')}}" href="{{ URL::to('admin/newslatter') }}" aria-expanded="false">
						<i class="mdi mdi-email-outline"></i>
						<span class="hide-menu">Newsletter</span>
					</a>
				</li>-->
				
<!--				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('support')}}" href="{{ URL::to('admin/support/tickets') }}" aria-expanded="false">
						<i class="mdi mdi-headset"></i>
						<span class="hide-menu">Support</span>
					</a>
				</li>-->
				
                                
				<li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('addnewcategory')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">Category</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/category') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">All Categories</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/category/addnewcategory') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Add Category</span>
                                            </a>							
                                    </li>

                                    </ul>
				</li>
				
                                
				<li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('addblog')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">Blogs</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/all-blog') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">All Blogs</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/addblog') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Add Blogs</span>
                                            </a>							
                                    </li>

                                    </ul>
				</li>
                                
				<li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('news')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">News</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/all-news') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">All News</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/addnews') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Add News</span>
                                            </a>							
                                    </li>

                                    </ul>
				</li>
				<li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('all_category')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">Faq</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/all_category') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Faq Category</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ URL::to('admin/addtitle') }}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Add Faq Quetion And Answer</span>
                                            </a>							
                                    </li>

                                    </ul>
				</li>
                                
<!--				<li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('service')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">Service</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{URL::to('admin/service/allservice')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">All Service</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{URL::to('admin/service/addnewservice')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Add Service</span>
                                            </a>							
                                    </li>

                                    </ul>
				</li> -->
				
                                
<!--				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('contactus')}}" href="{{ URL::to('admin/contactus') }}" aria-expanded="false">
						<i class="mdi mdi-phone-in-talk"></i>
						<span class="hide-menu">Contact Us</span>
					</a>
				</li>-->
                                
				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('getintouch')}}" href="{{ URL::to('admin/getintouch') }}" aria-expanded="false">
						<i class="mdi mdi-phone-in-talk"></i>
						<span class="hide-menu">Get In Touch</span>
					</a>
				</li>
             
				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('settings')}}" href="{{ URL::to('admin/settings') }}" aria-expanded="false">
						<i class="mdi mdi-settings"></i>
						<span class="hide-menu">Settings</span>
					</a>
				</li>
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('home')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">CMS</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{URL::to('admin/home')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Home</span>
                                            </a>							
                                    </li>
									
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{URL::to('admin/howitwork')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Home How it works</span>
                                            </a>							
                                    </li>
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{URL::to('admin/affiliate')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Affiliates</span>
                                            </a>							
                                    </li>
                                    
                                    

                                    </ul>
				</li>
                                
                                <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark {{classActivePath('about')}}" href="javascript:void(0);">
                                        <i class="mdi mdi-credit-card-plus"></i>	
                                        <span class="hide-menu">About Us</span>
                                </a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                     <a class="sidebar-link" href="{{URL::to('admin/about')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">About</span>
                                      </a>							
                                    </li>
                                    <li class="sidebar-item">
                                     <a class="sidebar-link" href="{{URL::to('admin/coin_reward_specifics')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Coin Reward Specifics</span>
                                      </a>							
                                    </li>
                                    <li class="sidebar-item">
                                     <a class="sidebar-link" href="{{URL::to('admin/why_use_coin_reward')}}" >
                                                    <i class="mdi mdi-adjust"></i>
                                                    <span class="hide-menu">Why Use Coin Reward</span>
                                      </a>							
                                    </li>
                                   
                                    </ul>
				</li>
                             
<!--				<li class="sidebar-item"> 
					<a class="sidebar-link waves-effect waves-dark sidebar-link {{classActivePath('cms')}}" href="{{ URL::to('admin/cms') }}" aria-expanded="false">
						<i class="mdi mdi-settings"></i>
						<span class="hide-menu">CMS</span>
					</a>
				</li>-->
				
				
				<li class="text-center p-40 upgrade-btn">
					<a href="{{ URL::to('admin/logout') }}" class="btn btn-block btn-danger text-white">Logout</a>
				</li>
			</ul>
			
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->