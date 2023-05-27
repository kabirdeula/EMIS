<h1>Unilink</h1>
<h2>Holidays Record</h2>
<table border="1" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($holidays as $holiday)
            <tr>
                <td>{{ $holiday->id }}</td>
                <td>{{ $holiday->name }}</td>
                <td>{{ $holiday->start_date }}</td>
                <td>{{ $holiday->end_date }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" align="center">No holiday records found.</td>
            </tr>   
        @endforelse
    </tbody>
</table>
