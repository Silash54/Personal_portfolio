<x-app-layout>
    <div class="card-body">
        <h5 class="card-title">Projects</h5>
        <a href="{{ route('project.create') }}" class="btn btn-primary mb-2 m-auto">Add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Technologies</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @include('message._message')
                @forelse ($project as $index=>$item)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::words($item->description, 10, '...') }}</td>
                        <td>{{ $item->technologies }}</td>
                        <td>{{ $item->start }}</td>
                        <td>{{ $item->end }}</td>
                        <td>
                            <a href="{{ route('project.edit',$item->id) }}" class="btn btn-primary mb-2">Edit</a>
                            <form action="{{ route('project.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
        <!-- End Bordered Table -->
</x-app-layout>
