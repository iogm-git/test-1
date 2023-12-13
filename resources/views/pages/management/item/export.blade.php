<table>
    <thead>
        <tr>
            <th colspan="4" style="text-align: center">Data Item</th>
        </tr>
        <tr>
            <th>Item Id</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Input By</th>
            <th>Input Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ms_item as $item)
            <tr>
                <td>{{ $item->item_id }}</td>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->input_by }}</td>
                <td>{{ $item->input_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
