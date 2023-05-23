<h1>Unilink</h1>
<h2>Students Record</h2>
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
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->user->name }}</td>
                <td>{{ $student->user->email }}</td>
                <td>{{ optional($student->program)->name }}</td>
                <td>{{ optional($student->semester)->code }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
