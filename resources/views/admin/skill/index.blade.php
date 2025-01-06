<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">My Skills</h5>
            <div>
                <a href="{{ route('skill.create') }}" class="btn bnt-info">Add Skill</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Age</th>
                        <th scope="col">Start Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">5</th>
                        <td>Raheem Lehner</td>
                        <td>Dynamic Division Officer</td>
                        <td>47</td>
                        <td>2011-04-19</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
