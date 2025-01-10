<div class="banner-overlay">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <ul class="list-unstyled">
                    <h4 class="text-white">Connect With Me</h4>
                    <li class="fw-bold">
                        <a href="{{ $profile->facebook }}" target="_blank" class="text-decoration-none">
                            <i class="fa-brands fa-square-facebook fa-2x"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="{{ $profile->linkedin }}" target="_blank" class="text-decoration-none">
                            <i class="fa-brands fa-linkedin fa-2x"></i> LinkedIn
                        </a>
                    </li>
                </ul>
                
            </div>
            <div class="col-md-4 col-sm-12">
                <div id="image-preview"
                    style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 2px solid #ddd;">
                    <img id="preview-avatar" src="{{ asset($profile->profile) }}" alt="{{ $profile->profile }}"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="banner-text p-3 d-flex flex-column justify-content-around h-50">
                    <div>
                        <i class="fa-regular fa-user"></i>
                        <span class="px-2">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-regular fa-envelope me-2"></i>
                        <span class="px-2">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                </div>
                
            </div>
            <div class=" col-md-5 col-sm-12">
                <h2>Hello World ! @auth()
                    {{ Auth::user()->name }}
                @endauth </h2>
                <p>{{ $profile->about_me }}</p>
                <a href="" class="btn btn-success">Download CV</a>
                <a href="" class="btn btn-success">Hire Me!</a>
            </div>
        </div>
    </div>
</div>
<span class="svg-wave"> <img class="svg-hero" src="{{ asset('frontend/images/applight-wave.svg') }}"> </span>
