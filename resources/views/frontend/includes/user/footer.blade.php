@include('frontend.includes.user.request-demo-include')

<footer class="main-footer style-two"
    style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-11.png') }})">
    <div class="auto-container">
        <div class="widgets-section">
            <div class="row clearfix">

                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img
                                            src="{{ Vite::asset('resources/assets/images/snb_hor_logo_light.png') }}"
                                            alt="" /></a>
                                </div>
                                <div class="text">Empowering SACCOs and groups with a comprehensive web app
                                    for seamless financial management and enhanced member experiences</div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h4>Newsletter</h4>
                                <div class="text">Subscribe to get our latest updates &amp; news</div>

                                <div class="email-box">
                                    <form method="post"
                                        action="https://html.themexriver.com/intime/intime/contact.html">
                                        <div class="form-group">
                                            <input type="email" name="search-field" value=""
                                                placeholder="Your mail address" required>
                                            <button type="submit"><span
                                                    class="icon fa-solid fa-paper-plane fa-fw"></span></button>
                                        </div>
                                    </form>
                                </div>

                                {{-- <ul class="social-box">
                                    <li><a href="https://www.twitter.com/"
                                            class="fa-brands fa-facebook-f fa-fw"></a></li>
                                    <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a>
                                    </li>
                                    <li><a href="https://dribbble.com/" class="fa-solid fa-dribbble fa-fw"></a></li>
                                    <li><a href="https://behance.com/" class="fa-solid fa-behance fa-fw"></a>
                                    </li>
                                </ul> --}}

                            </div>
                        </div>

                    </div>
                </div>

                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h4>Our location:</h4>
                                <ul class="contact-list">
                                    <li><span class="icon fa fa-phone"></span> Vision Plaza, Mombasa Road <br>
                                        Nairobi, Kenya</li>
                                    <li><span class="icon fa fa-envelope"></span> +254720000000</li>
                                </ul>
                                {{-- <div class="timing">
                                    <strong>Open Hours: </strong>
                                    Mon - Sat: 8 am - 5 pm, <br> Sunday: CLOSED
                                </div> --}}
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <h4>Quick Links</h4>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li class="list-group-item"><a href="{{ route('frontend.about') }}">About us</a></li>
                                    <li class="list-group-item"><a href="{{ route('frontend.home') }}">Features</a></li>
                                    <li class="list-group-item"><a href="{{ route('frontend.requestdemo') }}">Request a demo</a></li>
                                  </ul>
                                <div class="news-widget-block">

                                </div>

                                {{-- <div class="news-widget-block">
                                    <div class="news-widget_image">
                                        <img src="{{ Vite::asset('resources/assets/images/resource/news-widget-2.jpg') }}"
                                            alt="" />
                                    </div>
                                    <div class="news-widget_post-date">Jan 02, 2024</div>
                                    <h6 class="news-widget_title"><a href="blog-detail.html">SNB Redefines
                                            SACCO Management Solutions</a></h6>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">2023 &copy; SNB</div>
        </div>

    </div>
</footer>

