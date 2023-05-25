<h1>Unilink</h1>
<h2>Attendances Record</h2>
<table border="1" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->user->name }}</td>
                <td>{{ $attendance->date }}</td>
                <td>{{ $attendance->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
