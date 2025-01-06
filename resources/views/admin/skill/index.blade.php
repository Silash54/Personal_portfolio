<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">My Skills</h5>
            <div>
                <a href="{{ route('skill.create') }}" class="btn bnt-info">Add Skill</a>
            </div>
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
                    <tr>
                        @forelse ($skill as $index=>$value)
                        <td>{{ ++$index }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->description }}</td>
                            <td>
                                <img src="{{ asset($value->image) }}" alt="{{ $value->image }}" width="120">
                            </td>
                        @empty
                            
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
