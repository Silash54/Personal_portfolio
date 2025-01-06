<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Skill</h5>
            <form class="row g-3" action="{{ route('skill.update',$skill->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title')??$skill->title }}" >
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="description" class="col-sm-2 col-form-label">Description <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="description" >
                            {{ $skill->description }}
                            </textarea>
                            @error('description')
                        {{ $message }}
                    @enderror
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="image" class="col-sm-2 col-form-label"> Image Upload<span
                            class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" >
                            <img src="{{ asset($skill->image) }}" alt="{{ $skill->image }}" width="120">
                            @error('image')
                        {{ $message }}
                    @enderror
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
    </div>
</x-app-layout>
