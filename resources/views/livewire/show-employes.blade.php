


<div class="row clearfix">
    

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

@if(!is_null($employes))
@foreach ($employes as $employe)
<tr>
    
    <td class="width45">
    <label class="fancy-checkbox">
            <input class="checkbox-tick" type="checkbox" name="checkbox">
            <span></span>
        </label>
        <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
    </td>
    <td>   
        <h6 class="mb-0">{{$employe->name}}</h6>
        <span>{{$employe->email}}</span>
    </td>
    <td><span>LA-0215</span></td>
    <td><span>+ {{$employe->phoneNumber}}</span></td>
    <td>{{$employe->created_at }}</td>
    <td>{{$employe->job}}</td>
    <td>
        <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
        <button type="button" wire:click = "deleteEmploye({{$employe->id}})" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
    </td>
</tr>
  
@endforeach
@endif
</tbody>
</table>
</div>
</div>
</div>
</div>
<script>
window.addEventListener('alert', event => { 
    toastr[event.detail.type](event.detail.message, 
    event.detail.title ?? ''), toastr.options = {
           "closeButton": true,
           "progressBar": true,
       }
   });
</script>
</div>
