<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer = "name" type="text" class="form-control" placeholder="First Name *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer = "surname" type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer ="email" type="text" class="form-control" placeholder="Email ID *">
                        </div>
                    </div>    
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                   
                            <input wire:model.defer ="username" type="text" class="form-control" placeholder="Username *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer ="password" type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer ="password_confirm" type="text" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input type="text" wire:model.defer ="phone_number" class="form-control" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <input  wire:model.defer ="clientId" type="text" class="form-control" placeholder="Client ID *">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input wire:model.defer ="adress" type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <h6>Module Permission</h6>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Read</th>
                                        <th>Write</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" wire:model.defer= "" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chat</td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick"  type="checkbox" name="checkbox" value>
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Estimates</td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input wire:model.defer = "estimates" class="checkbox-tick"  value ="4" type="checkbox" name="checkbox">
                                                <span></span>
                                                {{print_r($message)}}
                                               
                                                {{print_r($message)}}
                                                {{print_r($message)}}
                                                
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" value="2" wire:model.defer = "estimates">
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox" wire:model.defer = "estimates" value="">
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>                        
                </div>
                <button type="button"  wire:click= "AddClient" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>