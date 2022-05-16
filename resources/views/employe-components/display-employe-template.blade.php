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
  