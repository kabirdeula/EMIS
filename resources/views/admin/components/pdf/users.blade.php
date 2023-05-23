<h1>Unilink</h1>
<table border="1" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ Str::ucfirst($user->type) }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
