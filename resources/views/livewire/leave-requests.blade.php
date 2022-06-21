
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Employee List</h2>
                <ul class="header-dropdown">
                    <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#Leave_Request">Add Leave</a></li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Employee ID</th>
                                <th>Leave Type</th>
                                <th>Date</th>
                                <th>Reason</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaveRequests as $user)
                               
                            
                            <tr>
                                <td class="width45">                                           
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                </td>
                                <td>
                                    <h6 class="mb-0">{{$user->name}}</h6>                                            
                                </td>
                                <td><span>LA-0215</span></td>
                                <td><span>Casual Leave</span></td>
                                <td>24 July, 2018 to 26 July, 2018</td>
                                <td>Going to Family Function</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success" title="Approved"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Declined" data-type="confirm"><i class="fa fa-ban"></i></button>
                                </td>
                            </tr>
                          @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal animated lightSpeedIn" id="Leave_Request" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Leave Request</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            
                            <select class="form-control mb-3 show-tick" wire:model.defer="opt1">
                                <option>Select Leave Type</option>
                                <option>Casual Leave (12)</option>
                                <option>Medical Leave</option>
                                <option>Maternity Leave</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" data-provide="datepicker" wire:model.defer="date_from"  data-date-autoclose="true" class="form-control" placeholder="From *">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" data-provide="datepicker"  wire:model.defer="date_to" data-date-autoclose="true" class="form-control" placeholder="From *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="6" class="form-control no-resize" placeholder="Leave Reason *"></textarea>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click="AddLeaveRequests">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
              
            </div>
        </div>
    </div>
</div>

