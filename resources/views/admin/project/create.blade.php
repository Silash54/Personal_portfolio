<x-app-layout>
    <section class="section">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-6 ms-auto mb-3 d-flex justify-content-around">
                            <h5 class="card-title">Create Projects</h5>
                            <a href="{{ route('project.index') }}" class="btn btn-sm btn-primary ">Back</a>
                        </div>
                        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title <span
                                        class="text-danger">*</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Technologies <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="technologies"
                                        value="{{ old('technologies') }}" required>
                                    @error('technologies')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Project Url <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" name="project_url"
                                        value="{{ old('project_url') }}" required>
                                    @error('project_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
