<table class="table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($product as $key => $value)
        <br>
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->product_name}}</td>
            <td>{{$value->product_quantity}}</td>
            <td>{{$value->product_prize}}</td>
            <td>
                @if ($value->status == 1)
                    <span class="text-success">Active</span>
                @else
                    <span class="text-danger">Inactive</span>
                @endif
            </td>
            <td>
                <button class="btn btn-danger delete" data="{{$value->product_id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                @if ($value->status === 1)
                    <button class="btn btn-success" id="status" data="{{$value->product_id}}"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                @else
                    <button class="btn btn-primary" id="status" data="{{$value->product_id}}"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
                @endif
                <button class="btn btn-info edit" data="{{$value->product_id}}" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                @if ($value->has_image === 1)
                    <button class="btn btn-primary image" data="{{$value->product_id}}" data-toggle="modal" data-target="#imageModel"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="datatable-footer">
    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
        {{$product->links()}}
    </div>
</div>