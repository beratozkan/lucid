
<form wire:submit.prevent="AddEmploye">
    
    
    <div class="modal animated zoomIn" id="addcontact" tabindex="-1" role="dialog">
       
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Contact</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" name="e_name" placeholder="Name" wire:model.defer="name">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Email ID" wire:model.defer="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">                                    
                                <input type="number" name ="phone_number" class="form-control" placeholder="Phone Number" wire:model.defer="phoneNumber">
                            </div>
                        </div>    
                        <div class="col-md-4">
                            <div class="form-group">                                   
                                <input type="text" class="form-control" name="employe_id" placeholder="Employee ID">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" name = "join_date" placeholder="Join Date">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" name="e_role" placeholder="Role" wire:model.defer="role">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label class="fancy-radio custom-color-green"><input name="gender3" wire:model.defer="gender" value="M" type="radio" checked><span><i></i>Male</span></label>
                            <label class="fancy-radio custom-color-green"><input name="gender3" value="F" wire:model.defer="gender" type="radio"><span><i></i>Female</span></label>
    
                        </div>
                        <div class="col-12">
                            <div class="form-group">                                            
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                            <hr>
                        </div>
                        <div class="col-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Facebook" name="e_facebook">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">                                   
                                <input type="text" class="form-control" placeholder="Twitter" name="e_twitter">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="Linkedin" name="e_linkedin">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" placeholder="instagram" name="e_instagram">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"  id="add_employe">Add</button>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    