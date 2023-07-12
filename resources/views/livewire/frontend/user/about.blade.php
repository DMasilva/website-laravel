@section('page_title')
    About Us
@endsection

<livewire:frontend.user.page-title  :pageTitle="$pageTitle"/>

<!-- Page Title -->
{{-- <section class="page-title"
    style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-12.png') }})">
    <div class="auto-container">
        <h2>About Us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section> --}}
<!-- End Page Title -->

<!-- About One / Style Two -->
{{-- <section class="about-one style-two"
    style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-1.png') }}') }})">
    <div class="auto-container">
        <div class="about-one-inner_container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="about-one_content-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">About us</div>
                            <h2 class="sec-title_heading">We help to get Solutions!</h2>
                        </div>
                        <div class="about-one_colored-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod temporincididunt.</div>
                        <div class="about-one_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempo rincididunt ut labore et dolore magna aliqua. Quis suspendisse onsectetur
                            adipiscing.</div>

                        <div class="row clearfix">

                            <!-- Progress Info -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-shield"></span>
                                        <h6>Risk Free</h6>
                                    </div>
                                    <div class="progress-info_text">We offer risk free business for tension free life.
                                    </div>
                                </div>
                            </div>

                            <!-- Progress Info -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-profit"></span>
                                        <h6>Business Growth</h6>
                                    </div>
                                    <div class="progress-info_text">We ensure the business growth without conditions.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="about-one_image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="about-one_image-inner">
                        <div class="about-one_counter-box">
                            <div class="about-one_counter"><span class="odometer" data-count="10"></span><sup>+</sup>
                            </div>
                            <div class="about-one_experiance">Years of <br> experiences</div>
                        </div>
                        <div class="about-one_image">
                            <img src="{{ Vite::asset('resources/assets/images/resource/about.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- End About One -->

<!-- Team Two -->
{{-- <section class="team-two" style="background-image:url(images/background/pattern-38.jpg)">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Team Member</div>
            <h2 class="sec-title_heading">Our Expert Team Member will <br> Help Your Business.</h2>
        </div>

        <div class="team-carousel owl-carousel owl-theme">

            <!-- Team Block Two -->
            <div class="team-two_block">
                <div class="team-two_block-inner">
                    <div class="team-two_block-image">
                        <a href="#"><img src="{{ Vite::asset('resources/assets/images/resource/team-4.jpg') }}" alt="" /></a>
                    </div>
                    <div class="team-two_block-content">
                        <div class="upper-box">
                            <h5 class="team-two_block-heading"><a href="#">Richerd Joseph</a></h5>
                            <div class="team-two_block-designation">Finance Consultant</div>
                        </div>
                        <div class="team-two_block-text">If you’re looking insurance, we will help you.</div>
                        <!-- Social Box -->
                        <ul class="team-two_social_box">
                            <li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-two_block">
                <div class="team-two_block-inner">
                    <div class="team-two_block-image">
                        <a href="#"><img src="{{ Vite::asset('resources/assets/images/resource/team-5.jpg') }}" alt="" /></a>
                    </div>
                    <div class="team-two_block-content">
                        <div class="upper-box">
                            <h5 class="team-two_block-heading"><a href="#">Robert Brown</a></h5>
                            <div class="team-two_block-designation">Finance Consultant</div>
                        </div>
                        <div class="team-two_block-text">If you’re looking insurance, we will help you.</div>
                        <!-- Social Box -->
                        <ul class="team-two_social_box">
                            <li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-two_block">
                <div class="team-two_block-inner">
                    <div class="team-two_block-image">
                        <a href="#"><img src="{{ Vite::asset('resources/assets/images/resource/team-6.jpg') }}" alt="" /></a>
                    </div>
                    <div class="team-two_block-content">
                        <div class="upper-box">
                            <h5 class="team-two_block-heading"><a href="#">Monika Lionard</a></h5>
                            <div class="team-two_block-designation">Finance Consultant</div>
                        </div>
                        <div class="team-two_block-text">If you’re looking insurance, we will help you.</div>
                        <!-- Social Box -->
                        <ul class="team-two_social_box">
                            <li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-two_block">
                <div class="team-two_block-inner">
                    <div class="team-two_block-image">
                        <a href="#"><img src="{{ Vite::asset('resources/assets/images/resource/team-7.jpg') }}" alt="" /></a>
                    </div>
                    <div class="team-two_block-content">
                        <div class="upper-box">
                            <h5 class="team-two_block-heading"><a href="#">Hereld Pao</a></h5>
                            <div class="team-two_block-designation">Finance Consultant</div>
                        </div>
                        <div class="team-two_block-text">If you’re looking insurance, we will help you.</div>
                        <!-- Social Box -->
                        <ul class="team-two_social_box">
                            <li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!-- End Team Two -->

<section class="finance-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="finance-two_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="finance-two_content-inner">
                    <!-- Sec Title Five -->
                    <div class="sec-title-five">
                        <div class="sec-title-five_title">About SNB</div>
                        <h2 class="sec-title-five_heading">Empowering Financial Success Together</h2>
                        <div class="sec-title-five_text">SNB App is your trusted partner in managing your SACCO
                            or group effectively and maximizing the potential of your collective savings
                            and deposits. Together, let's create a stronger financial future.</div>
                    </div>

                    <div class="row clearfix">

                        <!-- Counter Boxed -->
                        <div class="counter-boxed col-lg-5 col-md-6 col-sm-12">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#ff5520" data-bgColor="#eee5e2"
                                    data-width="160" data-height="160" data-linecap="normal" value="62"
                                    data-thickness="0.12">
                                <div class="inner-text count-box"><span class="count-text" data-stop="62"
                                        data-speed="3500"></span>%</div>
                            </div>
                            <div class="sub-title">Business <br> strategy growth</div>
                        </div>

                        <!-- Counter Boxed -->
                        <div class="counter-boxed col-lg-5 col-md-6 col-sm-12">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#ff5520" data-bgColor="#eee5e2"
                                    data-width="160" data-height="160" data-linecap="normal" value="80"
                                    data-thickness="0.12">
                                <div class="inner-text count-box"><span class="count-text" data-stop="80"
                                        data-speed="3500"></span>%</div>
                            </div>
                            <div class="sub-title">Finance <br> valuable ideas</div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Image Column -->
            <div class="finance-two_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="finance-two_image-inner">
                    <div class="finance-two_image">
                        {{-- <div class="finance-two_since-box" data-parallax='{"y" : 40}'>
                            since
                            <span>1992</span>
                        </div> --}}
                        <img src="{{ Vite::asset('resources/assets/images/resource/finance-2.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter One -->
<section class="counter-one" style="background-image:url(images/background/pattern-4.png') }})">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Counter One Block -->
            <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                <div class="counter-one_block-inner">
                    <div class="counter-one_counter"><span class="odometer" data-count="2800"></span> +</div>
                    <div class="counter-one_title">Active clients</div>
                    <div class="counter-one_text">Lorem ipsum dolor sit amet, to be consectetur adipiscing elit.</div>
                </div>
            </div>

            <!-- Counter One Block -->
            <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                <div class="counter-one_block-inner">
                    <div class="counter-one_counter"><span class="odometer" data-count="1670"></span> +</div>
                    <div class="counter-one_title">5 stars reviews</div>
                    <div class="counter-one_text">Lorem ipsum dolor sit amet, to be consectetur adipiscing elit.</div>
                </div>
            </div>

            <!-- Counter One Block -->
            <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                <div class="counter-one_block-inner">
                    <div class="counter-one_counter"><span class="odometer" data-count="106"></span> +</div>
                    <div class="counter-one_title">Team members</div>
                    <div class="counter-one_text">Lorem ipsum dolor sit amet, to be consectetur adipiscing elit.</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Counter One -->

<!-- Testimonial One -->
<section class="testimonial-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Carousel Column -->
            <div class="testimonial-one_carousel-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-one_carousel-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Client’s testimonials</div>
                        <h2 class="sec-title_heading">We are Very Happy to Get <br> Our Client’s Reviews.</h2>
                    </div>
                    <div class="testimonial-one_review">Clients Reviews:</div>
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-text">“Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua.
                                    Quis suspendisse onsectetur adipiscing.”</div>

                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ Vite::asset('resources/assets/images/resource/author-1.jpg') }}"
                                                alt="" />
                                        </span>
                                        <h5>Alina Lora</h5>
                                        <div class="designation">Formar Manager, Intime</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Testimonial Block Three -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-text">“Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua.
                                    Quis suspendisse onsectetur adipiscing.”</div>

                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ Vite::asset('resources/assets/images/resource/author-1.jpg') }}"
                                                alt="" />
                                        </span>
                                        <h5>Alina Lora</h5>
                                        <div class="designation">Formar Manager, Intime</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Testimonial Block Three -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-text">“Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua.
                                    Quis suspendisse onsectetur adipiscing.”</div>

                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ Vite::asset('resources/assets/images/resource/author-1.jpg') }}"
                                                alt="" />
                                        </span>
                                        <h5>Alina Lora</h5>
                                        <div class="designation">Formar Manager, Intime</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="testimonial-one_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-one_image-inner">
                    <div class="testimonial-one_image">
                        {{-- {{ Vite::asset('resources/assets/images/background/pattern-36.jpg') }} --}}
                        <img src="{{ Vite::asset('resources/assets/images/resource/testimonial.png') }}"
                            alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- <section class="clients-two style-two">
    <div class="auto-container">
        <!-- Sponsors Carousel -->
        <ul class="sponsors-carousel owl-carousel owl-theme">
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/1.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/2.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/3.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/4.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/5.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/1.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/2.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/3.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/4.png') }}" alt=""></a></figure></li>
            <li class="slide-item"><figure class="client-two_image-box"><a href="#"><img src="{{ Vite::asset('resources/assets/images/clients/5.png') }}" alt=""></a></figure></li>
        </ul>
    </div>
</section> --}}
