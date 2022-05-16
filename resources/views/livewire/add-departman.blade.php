<form wire:submit.prevent="AddDepartments">
    <div class="modal animated bounceIn" id="addDepartments" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Departments</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Departments Name" wire:model.defer="departman_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Departments Head" wire:model.defer="departman_head">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                                    
                                <input type="number" class="form-control" placeholder="No of Employee" wire:model.defer="total_employe">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</form>