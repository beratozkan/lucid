<div class="chat">
    <div class="chat-header clearfix">
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                    <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                </a>
              
                <div class="chat-about">
                    <h6 class="m-b-0"></h6>
                    <small>Last seen: 2 hours ago </small>
                    
                </div>
            </div>
            <div class="col-lg-6 hidden-sm text-right">
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary"><i class="icon-camera"></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-camcorder"></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-info"><i class="icon-settings"></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-outline-warning"><i class="icon-question"></i></a>
            </div>
        </div>
    </div>
    <div class="chat-history clearfix">
        <ul class="m-b-0">
            <li class="clearfix">
                <div class="message-data text-right">
                    <span class="message-data-time" >10:10 AM, Today</span>
                    <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                </div>
                @foreach(($this->user_messages) as $chat)
                <li class="clearfix">
                    <div class="message-data">
                        <span class="message-data-time">10:12 AM, Today</span>
                @if($chat->user_from == Auth::user()["id"])
                
                        
                    </div>
                    <div class="message my-message">{{$chat->content}}</div>                                    
                </li>  
                @else
                
                <div class="message other-message float-right"> {{$chat->content}} </div>
                @endif
                @endforeach

                
                
           
            
                                            
          
        </ul>
    </div>
    <div class="chat-message clearfix">
        <div class="input-group mb-0" >
            <div class="input-group-prepend" wire:click="SendMessage">
                <span class="input-group-text"><i class="icon-paper-plane"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter text here..." wire:model.defer = "message">                                    
        </div>
    </div>
</div>