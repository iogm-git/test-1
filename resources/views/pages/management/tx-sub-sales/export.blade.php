<table>
    <thead>
        <tr>
            <th colspan="6" style="text-align: center">Data TX Sub Sales</th>
        </tr>
        <tr>
            <th>Sales Id</th>
            <th>Item Id</th>
            <th>Qty Sales</th>
            <th>Unit Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tx_sub_sales as $item)
            <tr>
                <td>{{ $item->sales_id }}</td>
                <td>{{ $item->item_id }}</td>
                <td>{{ $item->qty_sales }}</td>
                <td>{{ $item->unit_price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
