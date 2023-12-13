<table>
    <thead>
        <tr>
            <th colspan="5" style="text-align: center">Data TX Sales</th>
        </tr>
        <tr>
            <th>Salesman Id</th>
            <th>Sales Person</th>
            <th>Alamat</th>
            <th>Input By</th>
            <th>Input Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($salesman as $item)
            <tr>
                <td>{{ $item->salesman_id }}</td>
                <td>{{ $item->sales_person }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->input_by }}</td>
                <td>{{ $item->input_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
