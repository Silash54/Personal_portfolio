<x-app-layout>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-6 ms-auto mb-3 d-flex justify-content-around">
                            <h5 class="card-title">Create Education</h5>
                            <a href="{{ route('education.index') }}" class="btn btn-sm btn-primary ">Back</a>
                        </div>
                        <form method="POST" action="{{ route('education.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="level" class="col-sm-2 col-form-label">Level <span class="text-danger">*</span> </label>
                                <div class="col-sm-10">
                                    <input type="level" class="form-control" name="level" value="{{ old('level') }}" required>
                                    @error('level')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Start Date <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="start" value="{{ old('start') }}" required>
                                    @error('start')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">End Date <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="end" value="{{ old('end') }}" required>
                                    @error('end')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputimage" class="col-sm-2 col-form-label">Image <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}" required>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
