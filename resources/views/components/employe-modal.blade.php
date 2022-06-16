<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h2>Employee Performance</h2>
                

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-dark">
                            <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Performance</th>
                            
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employes as $employe)
                            <tr>
                               
                                <td><img src="../assets/images/xs/avatar{{$loop->index+1}}.jpg" class="rounded-circle width35" alt=""></td>
                                <td>{{$employe["name"]}}</td>
                                <td><span>{{$employe["job"]}}</span></td>
                                <td><span class="badge badge-success">Good</span></td>
                                <td><span class="sparkbar">{{$employe["performance"]}}</span></td>
                            </tr>
                            @endforeach
                            
                          
                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-5">
        <div class="card">
            <div class="header">
                <h2>Employee Structure</h2>
            </div>
            <div class="body text-center">
                <h6>Male</h6>
                <input type="text" class="knob2" data-linecap="round" value="{{$male}}" data-width="125" data-height="125" data-thickness="0.15" data-fgColor="#49a9e5" readonly>
                <hr>
                <h6>Female</h6>
                <input type="text" class="knob2" data-linecap="round" value="{{100-$male}}" data-width="125" data-height="125" data-thickness="0.15" data-fgColor="#b880e1" readonly>
            </div>
        </div>
    </div>
</div>
