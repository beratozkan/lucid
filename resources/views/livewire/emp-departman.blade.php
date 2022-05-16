@extends("layout.master")
@section('title',"Employee / Departments List")
@section("css")
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
@endsection
@section("js")
<script src="assets/js/pages/ui/dialogs.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
@endsection
@section("section1")
@livewire("add-departman")
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
                                <td>{{$d->departman_head}}</td>
                                <td>{{$d->total_employe}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>01</td>
                                <td><h6 class="mb-0">Web Development</h6></td>
                                <td>John Smith</td>
                                <td>305</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td><h6 class="mb-0">Marketing</h6></td>
                                <td>Maryam Amiri</td>
                                <td>26</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td><h6 class="mb-0">App Development</h6></td>
                                <td>Frank Camly</td>
                                <td>38</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td><h6 class="mb-0">Support</h6></td>
                                <td>Gary Camara</td>
                                <td>45</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td><h6 class="mb-0">Accounts</h6></td>
                                <td>Fidel Tonn</td>
                                <td>8</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection