<table class="table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr>
        <th>#</th>
        <th>Brand Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @php $sl=1; @endphp
    @foreach($datalistdata as $value)
        <tr>
            <td>{{$sl++}}</td>
            <td>{{$value->color_name}}</td>
            <td>
                @if ($value->status == 1)
                    <span class="text-success">Active</span>
                @else
                    <span class="text-danger">Inactive</span>
                @endif
            </td>
            <td>
                <button class="btn btn-danger delete" data="{{$value->color_id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                @if ($value->status == 1)
                    <button class="btn btn-success" id="status" data="{{$value->color_id}}"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                @else
                    <button class="btn btn-primary" id="status" data="{{$value->color_id}}"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
                @endif
                <button class="btn btn-info edit" data="{{$value->color_id}}" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
