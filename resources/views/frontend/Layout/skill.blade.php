<div class="row">
    <div class="col-md-12">
        <div class="sectioner-header text-center">
            <h3>Skills</h3>
            <span class="line"></span>
            <p>" I am Proficient Full Stack Laravel Developer skilled in crafting dynamic web applications using Laravel
                for backend, and HTML, CSS, JavaScript, and Bootstrap for responsive and user-friendly frontends."</p>
        </div>
        <div class="section-content">
            <div class="row d-flex flex-row justify-content-start">
                @foreach ($skill as $value)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{ asset($value->image) }}" class="card-img-top img-fluid" alt="{{ $value->image }}" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">{!! \Str::limit($value->description, 100, '...') !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
