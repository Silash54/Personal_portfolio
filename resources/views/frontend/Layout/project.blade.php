<div class="row">
    <div class="col-md-12">
        <div class="sectioner-header text-center">
            <h3>Projects</h3>
            <span class="line"></span>
        </div>
        <div class="section-content text-center">
            <div class="row">
                @foreach ($project as $project)
                <div class="col-md-4">
                    <img src="{{ asset($project->image) }}" alt="{{ $project->image }}" >
                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <h5>{{ $project->title }}</h5>
                        <p>{{ $project->description }}</p>
                        <p>Views:</p>
                        <p>Like:</p>
                        <a href="{{ route('project_detail',$project->id) }}" class="btn btn-success">View detail</a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="#" class="about-btn">Learn More</a>
        </div>
    </div>
</div>