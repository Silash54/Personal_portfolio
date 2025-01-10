<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">My Skills</h5>
                <a href="{{ route('skill.create') }}" class="btn bnt-primary">Add Skill</a>
            <table class="table table-hover">
                <thead>
                    @include('message._message')
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @forelse ($skill as $index=>$value)
                        <tr>
                        <td>{{ ++$index }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{!! Str::words( $value->description,20,'...') !!}</td>
                            <td>
                                <img src="{{ asset($value->image) }}" alt="{{ $value->image }}" width="120">
                            </td>
                            <td>{{ ($value->status=='pending')?'pending':'approved' }}</td>
                            <td>
                                <a href="{{ route('skill.edit',$value->id) }}" class="btn btn-primary mb-2">Edit</a>
                            <form action="{{ route('skill.destroy', $value->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                            </td>
                        @empty
                            <span class="text-danger">No Data found</span>
                    </tr>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
