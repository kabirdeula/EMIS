<h1>Unilink</h1>
<h2>Teachers Record</h2>
<table border="1" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Program</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->user->name }}</td>
                <td>{{ $teacher->user->email }}</td>
                <td>{{ optional($teacher->program)->code }}</td>
                <td>{{ optional($teacher->semester)->code }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
