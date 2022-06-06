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
@livewire('emp-departman')



@endsection