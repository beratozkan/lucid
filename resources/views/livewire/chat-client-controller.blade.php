<div class="people_list">
   
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="icon-magnifier"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Search...">
    </div>
    <ul class="list-unstyled chat-list mt-2 mb-0">
        @foreach ($clients as $client)
        {{$this->GetUserInfo($client->user_to)}}
        <li wire:click="showMessages({{$this->userinfo->id}})">
            <img src="../assets/images/xs/avatar.jpg" alt="avatar" />
            <div class="about">
             
              
                <div class="name">{{$this->userinfo->name}}</div>
                <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
            </div>
        </li>
       
        @endforeach
       
       
                                           
        
       
        
    </ul>
</div>