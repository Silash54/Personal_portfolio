<div class="row">
    <div class="col-md-12">
        <div class="sectioner-header text-center">
            <h3>Contact Me</h3>
            <span class="line"></span>
            <p>For professional services in website development and mobile app development, feel free to reach out.
                I specialize in creating modern, responsive websites and feature-rich mobile applications tailored to your needs. Whether you are looking for an e-commerce platform, a personal blog, or a custom mobile app, I can help bring your ideas
                to life with efficient and scalable solutions. </p>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    @include('message._message')
                    <form id="contact_form" method="POST" action="{{ route('contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" id="your_name" class="form-input w-100" name="fullname"
                                    placeholder="Full Name" required value="{{ old('fullname') }}">
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col">
                                <input type="email" id="email" class="form-input w-100" name="email"
                                    placeholder="Email" required value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <input type="text" id="subject" class="form-input w-100" name="subject"
                            placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                        <button class="btn-grad w-100 text-uppercase" type="submit">submit</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-info white">
                        <div class="contact-item media">
                            <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                            <div class="media-body">
                                <p class="text-uppercase">Address</p>
                                <p class="text-uppercase">New Delhi, India</p>
                            </div>
                        </div>
                        <div class="contact-item media">
                            <i class="fa fa-mobile media-left media-right-margin"></i>
                            <div class="media-body">
                                <p class="text-uppercase">Phone</p>
                                <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">009900990099</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-item media">
                            <i class="fa fa-envelope media-left media-right-margin"></i>
                            <div class="media-body">
                                <p class="text-uppercase">E-mail</p>
                                <p class="text-uppercase"><a class="text-white"
                                        href="mailto:abcdefg@gmail.com">yogeshsingh.now@gmail.com</a> </p>
                            </div>
                        </div>
                        <div class="contact-item media">
                            <i class="fa fa-clock media-left media-right-margin"></i>
                            <div class="media-body">
                                <p class="text-uppercase">Working Hours</p>
                                <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
