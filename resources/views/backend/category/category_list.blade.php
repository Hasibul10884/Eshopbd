@extends('backend.master')
@section('backend_content')

<a href="{{route('add.category')}}" class="btn btn-success">Create</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>
        
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->photo}}</td>
            
            <td>
                <a class="btn btn-primary btn-sm" title="Edit" >
                    <i class="fa fa-edit"></i>  
                </a> 

                <br>
                    <a class="btn btn-danger btn-sm delete" title="Delete">
                        <i class="fa fa-trash"></i>
                    </a>
            </td>


        </tr>
        @endforeach

    </tbody>
</table>


@endsection