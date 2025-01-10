<div class="banner-overlay">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <ul class="list-unstyled">
                    <h4 class="text-white">Connect With Me</h4>
                    <li class="fw-bold">
                        @auth
                        @if (!empty($profile->facebook))
                            <a href="{{ $profile->facebook }}" target="_blank" class="text-decoration-none">
                                <i class="fa-brands fa-square-facebook fa-2x"></i> Facebook
                            </a>
                        @endif
                    @endauth
                    
                    </li>
                    <li>
                        @auth
                            @if (!@empty($profile->linkend))
                            <a href="{{ $profile->linkedin }}" target="_blank" class="text-decoration-none">
                                <i class="fa-brands fa-linkedin fa-2x"></i> LinkedIn
                            </a>
                            @endif
                        @endauth
                    </li>
                </ul>
                
            </div>
            <div class="d-flex flex-column align-items-center" style="gap: 20px;">
                <!-- Profile Image -->
                <div id="image-preview" style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; border: 2px solid #ddd;">
                    @auth
                        @if (!empty($profile->profile))
                        <img id="preview-avatar" src="{{ asset($profile->profile) }}" alt="{{ $profile->profile }}" style="width: 100%; object-fit: cover;">
                        @endif
                    @endauth
                </div>
            
                <!-- Profile Details -->
                <div class="banner-text mt-3 text-center">
                    <div class="d-flex align-items-center justify-content-center mb-2" style="gap: 8px;">
                        <i class="fa-regular fa-user"></i>
                        <span>
                            @if (!empty($profile->name))
                                {{ $profile->name }}
                            @else
                                <span>Silas</span>
                            @endif
                        </span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-2" style="gap: 8px;">
                        <i class="fa-regular fa-envelope"></i>
                        <span>
                            @if (!empty($profile->email))
                                {{ $profile->email }}
                            @else
                                <span>Silasraii144@gmail.com</span>
                            @endif
                        </span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center" style="gap: 8px;">
                        <i class="fa-solid fa-phone"></i>
                        <span>
                            @if (!empty($profile->phone))
                                {{ $profile->phone }}
                            @else
                                <span>9805367874</span>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="ms-3 col-md-5 col-sm-12 d-flex flex-column justify-content-between align-items-start" style="height: 100%;">
                <h2>Hello World! 
                    @auth
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            <span>Rai Silas</span>
                        @endif
                    @endauth
                </h2>
                <p>
                    @auth
                        @if (!empty($profile->about_me))
                            {{ $profile->about_me }}
                        @else
                            <span>No about me information available.</span>
                        @endif
                    @endauth
                </p>
                <div>
                    <a href="{{ route('download.cv') }}" class="btn btn-success me-2">Download CV</a>
                    <a href="#" class="btn btn-success">Hire Me!</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<span class="svg-wave"> <img class="svg-hero" src="{{ asset('frontend/images/applight-wave.svg') }}"> </span>
