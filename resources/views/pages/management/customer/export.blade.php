<table>
    <thead>
        <tr>
            <th colspan="6" style="text-align: center">Data Customer</th>
        </tr>
        <tr>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Nick Name</th>
            <th>Input By</th>
            <th>Input Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ms_customer as $item)
            <tr>
                <td>{{ $item->customer_id }}</td>
                <td>{{ $item->customer_name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->nick_name }}</td>
                <td>{{ $item->input_by }}</td>
                <td>{{ $item->input_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
