<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Employee List</h2>
                <ul class="header-dropdown">
                    <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addDepartments">Add New</a></li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Department Head</th>
                                <th>Total Employee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($departmans as $d)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td><h6 class="mb-0">{{$d->departman_name}}</h6></td>
                                <td>{{$d->depertman_head}}</td>
                                <td>{{$d->total_employe}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button wire:click ="delete({{$d->id}})" type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        
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