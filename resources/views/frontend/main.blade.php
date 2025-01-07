<div class="banner-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="banner-text">
                    <h2 class="white">Hello World ! {{ Auth::user()->name }}</h2>
                    <p class="banner-text white">{{ $profile->about_me }}</p>
                    <ul>
                        <h2 class="text-white">Connect With Me</h2>
                        <li class="fw-bold">
                            <a href="{{ $profile->facebook }}" target="blank"><i
                                    class="fa-brands fa-square-facebook fa-4x"></i> </a>
                        </li>
                        <li>
                            <a href="{{ $profile->linkend }}" target="blank"><i
                                    class="fa-brands fa-linkedin fa-4x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="image-preview"
                style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 2px solid #ddd;">
                <img id="preview-avatar" src="{{ asset($profile->profile) }}" alt="{{ $profile->profile }}"
                    style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<span class="svg-wave"> <img class="svg-hero" src="{{ asset('frontend/images/applight-wave.svg') }}"> </span>
