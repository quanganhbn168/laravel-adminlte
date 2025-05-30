@extends('layouts.master')
@section('title','My Dashboard')
@section('content')
<!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/14.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>My Profile</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card padding30 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="images/profile/1.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas                                                
                                            <span class="profile_username text-gray"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb1b3b2b5bfbd9caeb9b2a8bdb0a5f2bfb3b1">[email&#160;protected]</a></span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="account-profile.html" class="active"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card padding40  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="form-create-item" class="form-border" method="post" action="email.php">
                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Profile</span></li>
                                                <li><span>Notifications</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Username</h5>
                                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>New Password</h5>
                                                            <input type="Password" name="user_password" id="user_password" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Re-enter Password</h5>
                                                            <input type="Password" name="user_password_re-enter" id="user_password_re-enter" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-md-6 mb20">
                                                            <h5>Language</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_lang" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">English</a>
                                                                <ul>
                                                                    <li class="active"><span>English</span></li>
                                                                    <li><span>France</span></li>
                                                                    <li><span>German</span></li>
                                                                    <li><span>Japan</span></li>
                                                                    <li><span>Italy</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb20">
                                                            <h5>Hour Format</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_hour_format" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">24-hour</a>
                                                                <ul>
                                                                    <li class="active"><span>24-hour</span></li>
                                                                    <li><span>12-hour</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>                               
                                                    </div>
                                                </div>

                                                <div class="tab-2">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-sm-20">
                                                            <div class="switch-with-title s2">
                                                                <h5>Discount Notifications</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-item-sold" class="checkbox">
                                                                  <label for="notif-item-sold"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">You'll get notification while new discount available.</p>
                                                            </div>

                                                            <div class="spacer-20"></div>

                                                            <div class="switch-with-title s2">
                                                                <h5>New Product Notification</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                                                  <label for="notif-bid-activity"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">You'll get notification while new product available.</p>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="switch-with-title s2">
                                                                <h5>Daily Reports</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                                                  <label for="notif-auction-expiration"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">We will send you a report everyday.</p>
                                                            </div>

                                                            <div class="spacer-20"></div>

                                                            <div class="switch-with-title s2">
                                                                <h5>Monthly Reports</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-outbid" class="checkbox">
                                                                  <label for="notif-outbid"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">We will send you a report each month.</p>
                                                            </div>

                                                        </div>

                                                        <div class="spacer-20"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <input type="button" id="submit" class="btn-main" value="Update profile">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->
@endsection