<table>
    <thead>
        <tr>
            <th colspan="6" style="text-align: center">Data TX Sales</th>
        </tr>
        <tr>
            <th>Sales Id</th>
            <th>Sales No</th>
            <th>Customer Id</th>
            <th>Salesman Id</th>
            <th>Create By</th>
            <th>Input Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tx_sales as $item)
            <tr>
                <td>{{ $item->sales_id }}</td>
                <td>{{ $item->sales_no }}</td>
                <td>{{ $item->customer_id }}</td>
                <td>{{ $item->salesman_id }}</td>
                <td>{{ $item->create_by }}</td>
                <td>{{ $item->input_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
