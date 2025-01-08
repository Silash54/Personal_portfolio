<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ms-auto mb-3">
                <a href="{{ route('education.create') }}" class="btn btn-primary">Add</a>
            </div>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Level</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($education as $index=>$item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->start }}</td>
                            <td>{{ $item->end }}</td>
                            <td><img src="{{ asset($item->image) }}" alt="{{ $item->image }}" width="120"></td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('education.edit', $item->id) }}" class="btn btn-success mb-2">Edit</a>
                                <!-- Delete Form -->
                                <form action="{{ route('education.destroy', $item->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                    <td colspan="7" class="text-danger">No Data found</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
