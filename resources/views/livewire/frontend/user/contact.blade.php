@section('page_title')
    Contact Us
@endsection

<livewire:frontend.user.page-title  :pageTitle="$pageTitle"/>

<section class="business-one style-five" style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-16.png') }})">
    <div class="auto-container">
        <div class="sec-title">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title">Get in touch with us</div>
                    <h2 class="sec-title_heading">We Value Your feedback</h2>
                </div>
                <div class="right-box">
                    <div class="sec-title_text">
                        We value your feedback and are here to help! Whether you have a question, <br>
                        need assistance, or simply want to share your thoughts, <br>
                        we would love to hear from you.
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="branches-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="business-one_counter-box">
                        <div class="business-one_experiance">Head Office</div>
                    </div>
                    <div class="map">
                        <img src="{{ Vite::asset('resources/assets/images/background/map.png') }}" alt="" />
                        <div class="dots-outer">
                            <span class="dott"></span>
                            <span class="dott two"></span>
                            <span class="dott three"></span>
                            <span class="dott four"></span>
                            <span class="dott five"></span>
                            <span class="dott six"></span>
                            <span class="dott seven"></span>
                            <span class="dott eight"></span>
                            <span class="dott nine"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3 class="business-one_title">Your Message</h3>

                    <div class="default-form">
                        <form method="post" action="">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Full Name *</label>
                                    <input type="text" name="name" placeholder="Enter your full name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email Address <span class="text-danger">*</span></label>
                                    <input type="text" name="email" placeholder="Enter your email address" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Message *</label>
                                    <textarea class="" name="message" placeholder="Enter your message..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn send-btn">
                                        Send Message
                                        <span class="icon fa-solid fa-plus fa-fw"></span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="map-one">
    <div class="map-outer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
    </div>
</section>



