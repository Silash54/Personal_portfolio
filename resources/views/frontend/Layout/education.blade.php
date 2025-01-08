<div class="row">
    <div class="col-md-12">
        <div class="sectioner-header text-center white">
            <h3>Education</h3>
            <span class="line"></span>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-sm-12">
                    @if($education->isNotEmpty())
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="10000">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                @foreach ($education as $key => $value)
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"
                                        aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                                        aria-label="Slide {{ $key + 1 }}"></button>
                                @endforeach
                            </div>
        
                            <!-- Carousel Items -->
                            <div class="carousel-inner bg-danger">
                                @foreach ($education as $key => $value)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <img src="{{ $value->image }}" class="d-block w-100 img-fluid"
                                            alt="{{ $value->level }} - Slide Image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $value->level }}</h5>
                                            <p>{{ $value->description ?? 'No description available.' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
        
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <p class="text-center">No educational data available.</p>
                    @endif
                </div>
            </div>
        </div>
        

    </div>
</div>
