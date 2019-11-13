@extends('layouts.app')

@section('content')
<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">Contact With Us.</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

        <!-- contact area start -->
    <div class="contact-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="contact-message pt-62 pb-68 pl-80 mr-30 pl-lg-30 pl-md-30 pl-sm-16 mr-sm-16 pt-sm-44 pb-sm-50">
                        <h2>Leave Your Message</h2>
                        <form id="contact-form" action="" method="" class="contact-form">
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="first_name" placeholder="Name *" type="text" required>    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text" required>   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email_address" placeholder="Email *" type="text" required>    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="contact_subject" placeholder="Subject *" type="text">   
                                </div>
                               <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message"  class="form-control2" required=""></textarea>     
                                    </div>   
                                    <div class="contact-btn">
                                        <button class="sqr-btn" type="submit">Send Message</button> 
                                    </div> 
                                </div> 
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                                
                            </div>
                        </form>    
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="contact-info bg-gray ml-30 pt-62 pb-50 pl-60 pr-80 pr-lg-30 ml-md-0 pl-md-30 ml-sm-0 pl-sm-16 pt-sm-44 pb-sm-16">
                        <h2>contact us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : T/10 Noor Jahan Road, Mohammadpur, Dhaka 1205, Bangladesh</li>
                            <li><i class="fa fa-phone"></i> foysal35-1316@diu.edu.bd</li>
                            <li><i class="fa fa-envelope-o"></i> +8801***********</li>
                        </ul>
                        <div class="working-time">
                            <h3>Working hours</h3>
                            <p><span>24 X 7:</span>08AM – 10PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->



@endsection