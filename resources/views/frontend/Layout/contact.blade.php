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
                <div class="col-sm-12 col-md-12 col-lg-4 h-100">
                    <h1>Google Map</h1>
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
