
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
@include("components.add-new-employe")


<div class="row clearfix">
    {{$id1}}
    {{$id1}}

    {{$id1}}

    <div class="col-lg-12">
          <div class="card">
              <div class="header">
                  <h2>Employee List</h2>
                  <ul class="header-dropdown">
                      <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addcontact">Add New</a></li>
                  </ul>
              </div>
             
              <div class="body">
                  <div class="table-responsive">
                      <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                          <thead class="thead-dark">
                              <tr>
                                  <th>
                                      <label class="fancy-checkbox">
                                          <input class="select-all" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                  </th>
                                  <th>Name</th>
                                  <th>Employee ID</th>
                                  <th>Phone</th>
                                  <th>Join Date</th>
                                  <th>Role</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <x-employe-show-modal>
                              </x-employe-show-modal>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Marshall Nichols</h6>
                                      <span>marshall-n@gmail.com</span>
                                  </td>
                                  <td><span>LA-0215</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>24 Jun, 2015</td>
                                  <td>Web Designer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Susie Willis</h6>
                                      <span>sussie-w@gmail.com</span>
                                  </td>
                                  <td><span>LA-0216</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>28 Jun, 2015</td>
                                  <td>Web Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Debra Stewart</h6>
                                      <span>debra@gmail.com</span>
                                  </td>
                                  <td><span>LA-0218</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>21 July, 2015</td>
                                  <td>Web Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar4.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Francisco Vasquez</h6>
                                      <span>francis-v@gmail.com</span>
                                  </td>
                                  <td><span>LA-0222</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>18 Jan, 2016</td>
                                  <td>Team Leader</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar5.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Jane Hunt</h6>
                                      <span>jane-hunt@gmail.com</span>
                                  </td>
                                  <td><span>LA-0232</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>08 Mar, 2016</td>
                                  <td>Android Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar6.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Darryl Day</h6>
                                      <span>darryl.day@gmail.com</span>
                                  </td>
                                  <td><span>LA-0233</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>13 Nov, 2016</td>
                                  <td>IOS Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Marshall Nichols</h6>
                                      <span>marshall-n@gmail.com</span>
                                  </td>
                                  <td><span>LA-0215</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>24 Jun, 2015</td>
                                  <td>Web Designer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Susie Willis</h6>
                                      <span>sussie-w@gmail.com</span>
                                  </td>
                                  <td><span>LA-0216</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>28 Jun, 2015</td>
                                  <td>Web Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Debra Stewart</h6>
                                      <span>debra@gmail.com</span>
                                  </td>
                                  <td><span>LA-0218</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>21 July, 2015</td>
                                  <td>Web Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar4.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Francisco Vasquez</h6>
                                      <span>francis-v@gmail.com</span>
                                  </td>
                                  <td><span>LA-0222</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>18 Jan, 2016</td>
                                  <td>Team Leader</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar5.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Jane Hunt</h6>
                                      <span>jane-hunt@gmail.com</span>
                                  </td>
                                  <td><span>LA-0232</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>08 Mar, 2016</td>
                                  <td>Android Developer</td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="width45">
                                  <label class="fancy-checkbox">
                                          <input class="checkbox-tick" type="checkbox" name="checkbox">
                                          <span></span>
                                      </label>
                                      <img src="../assets/images/xs/avatar6.jpg" class="rounded-circle avatar" alt="">
                                  </td>
                                  <td>
                                      <h6 class="mb-0">Darryl Day</h6>
                                      <span>darryl.day@gmail.com</span>
                                  </td>
                                  <td><span>LA-0233</span></td>
                                  <td><span>+ 264-625-2583</span></td>
                                  <td>13 Nov, 2016</td>
                                  <td>IOS Developer</td>
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
@endsection

    
