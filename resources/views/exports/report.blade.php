<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Invoice No</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>

        </tr>
    </thead>
    @php
       
        $total_price = 0;
    @endphp
    <tbody>
        @foreach ($datas as $data)  
            <tr>
                <td>{{$data->updated_at->toDayDateTimeString()}}</td>
                <td>#{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}} tk</td>
                <td>{{$data->total_price}} tk</td>
                
            </tr>
            @php
                
                $total_price += $data->total_price;
            @endphp
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            
            <th>Total Sale</th>

        </tr>
    </thead>
    <tbody>       
        <tr>
           
            <td>{{$total_price}} tk</td>
            
        </tr>    
    </tbody>
</table>