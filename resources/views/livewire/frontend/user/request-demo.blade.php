@section('page_title')
    Request a demo
@endsection


<livewire:frontend.user.page-title  :pageTitle="$pageTitle"/>

<section class="callback-one request-demo">
    <div class="callback-side_color-layer" style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-21.jpg') }})"></div>
    <div class="auto-container">
        <div class="callback-side-image">
            <img src="{{ Vite::asset('resources/assets/images/site/bg_image.jpg') }}" alt="" />
        </div>
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="callback-title_column col-lg-4 col-md-12 col-sm-12">
                <div class="callback-title_inner">
                    <div class="sec-title-three">
                        <div class="sec-title-three_title style-two">Hands-On Experience</div>
                        <h2 class="sec-title-three_heading">Find Out How SNB Can Transform Your Business</h2>
                        <div class="sec-title-three_text">
                            Our experts will walk you through the features and capabilities of SNB, showcasing how it can revolutionize your workflow and drive exceptional results. Get a personalized demonstration tailored to your specific needs and witness the power of SNB in action.
                        </div>
                    </div>
                    <!-- Button Box -->
                    {{-- <div class="button-box">
                        <a class="btn-style-eight theme-btn btn-item" href="contact.html">
                            <div class="btn-wrap">
                                <span class="text-one">Learn More</span>
                                <span class="text-two">Learn More</span>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- Title Column -->
            <div class="callback-form_column col-lg-8 col-md-12 col-sm-12">
                <div class="callback-form_inner">
                    <div class="sec-title-three light">
                        <div class="sec-title-three_title style-two">Discover The Power of SNB</div>
                        <h2 class="sec-title-three_heading">Request a Demo Today</h2>
                    </div>

                    <!-- Default Form -->
                    <div class="default-form style-two">
                        <form method="post" wire:submit.prevent="submitRequestDemo">

                            @csrf

                            <div class="form-group">
                                <span class="field-icon fa-solid fa-user fa-fw"></span>
                                <input type="text" name="name" placeholder="Your Name">
                                @error('name')
                                    <label class="error">{{ $name }}</label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="field-icon fa-solid fa-envelope fa-fw"></span>
                                <input type="text" name="email" placeholder="Your Email">
                                @error('email')
                                    <label class="error">{{ $email }}</label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="field-icon fa-solid fa-phone fa-fw"></span>
                                <input type="text" name="phone" placeholder="Your phone">
                                @error('phone')
                                    <label class="error">{{ $phone }}</label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <span class="field-icon fa-solid fa-file fa-fw"></span>
                                <textarea class="" name="message" placeholder="Your message" rows="4"></textarea>
                                @error('message')
                                    <label class="error">{{ $message }}</label>
                                @enderror
                            </div>

                            {{-- @include('frontend.includes.partials.flash-messages') --}}

                            <div class="form-group">
                                <button class="request-btn theme-btn" type="submit">
                                    Send Request
                                </button>
                            </div>

                        </form>
                    </div>
                    <!-- End Default Form -->

                </div>
            </div>
        </div>
    </div>
</section>

