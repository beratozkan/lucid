
@extends('layout.master')
@section("title","Employee  / Employee List")
@section('css')
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
@endsection
@section("js")
<script src="assets/js/pages/ui/dialogs.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

@endsection
@section("section1")
@livewire("add-employe")


     @livewire('show-employes')
                              
                             
                         
     <script>
          document.getElementById("add_employe");
     </script>
                        
@endsection
<script>

