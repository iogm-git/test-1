<table>
    <thead>
        <tr>
            <th colspan="6">Data Users</th>
        </tr>
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Departement</th>
            <th>Input By</th>
            <th>Input Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ms_user as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->departement }}</td>
                <td>{{ $user->input_by }}</td>
                <td>{{ $user->input_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
