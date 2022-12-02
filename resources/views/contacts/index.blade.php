    @extends('contacts.layout')
    @section('content')
        <div class="container">
            <div class="row">
    
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">Contacts</div>
                        <div class="card-body">
                            <a href="{{ url('/contact/them') }}" class="btn btn-success btn-sm" title="Add New Contact">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Task</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->Task }}</td>
                                            <td>{{ $item->Description}}</td>
                                            
    
                                            <td>
                                                <a href="{{route('task.detail',['id'=>$item->id])}}" title="View Task"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="" title="Edit Task"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    
                                                <a href="{{route('delete', ['id'=> $item->id])}}"><button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm()"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection