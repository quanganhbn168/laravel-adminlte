@extends('layouts.master')
@section('title','Chi tiết')
@section('content')
<!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{asset('/')}}images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Enjoy Best Travel Experience</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-read">

                                <img alt="" src="images/news/big.jpg" class="img-fullwidth mb30">

                                <div class="post-text">
                                    <p>Quis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore. Sed minim nisi duis laborum est labore nisi amet elit adipisicing proident do consectetur dolor labore sit nisi ad proident esse ad velit nisi irure reprehenderit ut et dolor labore veniam quis.</p>

                                    <p>Sunt duis laboris ex et quis laborum laborum cillum mollit voluptate culpa consequat ex cupidatat dolor eiusmod proident proident cillum pariatur sint adipisicing in nostrud do dolore consectetur quis incididunt minim consectetur. Exercitation elit proident dolor est id eiusmod dolor dolor incididunt ad voluptate laboris cupidatat est est sint veniam sint officia sint incididunt est sit ut tempor commodo pariatur ut proident et do.</p>

                                    <p>Sed eu in ut sint dolor irure fugiat minim veniam sed ea proident ullamco occaecat irure ut velit eu ullamco fugiat cupidatat dolore fugiat. Lorem ipsum id non deserunt id consequat duis voluptate amet aliqua pariatur laboris officia pariatur veniam velit reprehenderit sint nostrud cupidatat magna eiusmod mollit exercitation pariatur nulla minim laboris dolore aliqua consectetur cillum duis aute consectetur.</p>

                                </div>

                            </div>

                            <div class="spacer-single"></div>

                            <div id="blog-comment">
                                <h4>Comments (5)</h4>

                                <div class="spacer-half"></div>

                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('/')}}images/misc/avatar-2.jpg" alt=""></div>
                                        <div class="comment-info">
                                            <span class="c_name">Merrill Rayos</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="{{asset('/')}}images/misc/avatar-2.jpg" alt=""></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Jackqueline Sprang</span>
                                                    <span class="c_date id-color">15 January 2020</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('/')}}images/misc/avatar-2.jpg" alt=""></div>
                                        <div class="comment-info">
                                            <span class="c_name">Sanford Crowley</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="{{asset('/')}}images/misc/avatar-2.jpg" alt=""></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Lyndon Pocekay</span>
                                                    <span class="c_date id-color">15 January 2020</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('/')}}images/misc/avatar-2.jpg" alt=""></div>
                                        <div class="comment-info">
                                            <span class="c_name">Aleen Crigger</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    </li>
                                </ol>

                                <div class="spacer-single"></div>

                                <div id="comment-form-wrapper">
                                    <h4>Leave a Comment</h4>
                                    <div class="comment_form_holder">
                                        <form id="contact_form" name="form1" class="form-border" method="post" action="#">

                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" />

                                            <label>Email <span class="req">*</span></label>
                                            <input type="text" name="email" id="email" class="form-control" />
                                            <div id="error_email" class="error">Please check your email</div>

                                            <label>Message <span class="req">*</span></label>
                                            <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                            <div id="error_message" class="error">Please check your message</div>
                                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                            <div id="mail_failed" class="error">Error, email not sent</div>

                                            <p id="btnsubmit">
                                                <input type="submit" id="send" value="Send" class="btn-main" /></p>



                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="sidebar" class="col-md-4">
                            <div class="widget">
                                    <h4>Share With Friends</h4>
                                    <div class="small-border"></div>
                                    <div class="de-color-icons">
                                        <span><i class="fa fa-twitter fa-lg"></i></span>
                                        <span><i class="fa fa-facebook fa-lg"></i></span>
                                        <span><i class="fa fa-reddit fa-lg"></i></span>
                                        <span><i class="fa fa-linkedin fa-lg"></i></span>
                                        <span><i class="fa fa-pinterest fa-lg"></i></span>
                                        <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                        <span><i class="fa fa-delicious fa-lg"></i></span>
                                        <span><i class="fa fa-envelope fa-lg"></i></span>
                                    </div>
                                </div>

                                <div class="widget widget-post">
                                <h4>Recent Posts</h4>
                                <div class="small-border"></div>
                                <ul class="de-bloglist-type-1">
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('/')}}images/news-thumbnail/pic-blog-1.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Enjoy Best Travel Experience</h4></a>
                                            <div class="d-date">June 15, 2022</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('/')}}images/news-thumbnail/pic-blog-2.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Future of Car Rent</h4></a>
                                            <div class="d-date">June 15, 2022</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('/')}}images/news-thumbnail/pic-blog-3.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Holiday Tips For Backpacker</h4></a>
                                            <div class="d-date">June 15, 2022</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('/')}}images/news-thumbnail/pic-blog-4.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Travel Destination For Couple</h4></a>
                                            <div class="d-date">June 15, 2022</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-text">
                                <h4>About Us</h4>
                                <div class="small-border"></div>
                                <p class="small no-bottom">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                </p>
                            </div>
                            <div class="widget widget_tags">
                                <h4>Tags</h4>
                                <div class="small-border"></div>
                                <ul>
                                    <li><a href="#link">accommodation</a></li>
                                    <li><a href="#link">holiday</a></li>
                                    <li><a href="#link">hostel</a></li>
                                    <li><a href="#link">hotel</a></li>
                                    <li><a href="#link">travel</a></li>
                                    <li><a href="#link">inn</a></li>
                                    <li><a href="#link">lodge</a></li>
                                    <li><a href="#link">motel</a></li>
                                    <li><a href="#link">resort</a></li>
                                    <li><a href="#link">travel</a></li>
                                    <li><a href="#link">tourism</a></li>
                                    <li><a href="#link">vacation</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->
@endsection