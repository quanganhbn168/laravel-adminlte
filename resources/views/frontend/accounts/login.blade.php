@extends('layouts.master')
@section('title','Đăng nhập')
@section('content')
<!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="{{asset('/')}}images/background/2.jpg" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-4">
                                    <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                        <h4>Login</h4>
                                        <div class="spacer-10"></div>
                                        <form id="form_register" class="form-border" method="post" action="account-dashboard.html">
                                            <div class="field-set">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div class="field-set">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div id="submit">
                                                <input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                            </div>
                                        </form>
                                        <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;with</div>
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                                <a class="btn-sc btn-fullwidth mb10" href="#"><img src="{{asset('/')}}images/svg/google_icon.svg" alt="">Google</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class="btn-sc btn-fullwidth mb10" href="#"><img src="{{asset('/')}}images/svg/facebook_icon.svg" alt="">Facebook</a>
                                            </div>
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