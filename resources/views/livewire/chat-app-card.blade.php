<div class="chat">
    <div class="chat-header clearfix">
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                    <img src="../assets/images/xs/avatar2.jpg" alt="avatar" />
                </a>
                <div class="chat-about">
                    <h6 class="m-b-0"></h6>
                    <small>Last seen: 2 hours ago</small>
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
            @foreach($user_messages as $message)
            <li class="clearfix">
                @if($message->user_from == $user_id)
                    <div class="message-data text-right">
                        <span class="message-data-time" >10:10 AM, Today</span>
                    <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                </div>
                <div class="message other-message float-right"> {{$message->content}}</div>
                @else
                    <div class="message-data">
                        <span class="message-data-time" >10:10 AM, Today</span>
                        <img src="../assets/images/xs/avatar7.jpg" alt="avatar">
                    </div>
                        <div class="message my-message">{{$message->content}}</div>
                @endif
           
               
            </li>
            @endforeach

        </ul>
    </div>
    <div class="chat-message clearfix">
        <div class="input-group mb-0">
            <div class="input-group-prepend">
                <span class="input-group-text" wire:click="SendMessageToUser"><i class="icon-paper-plane"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter text here..." wire:model.defer="message">                                    
        </div>
    </div>
</div>
<script>



 


    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    
    var pusher = new Pusher('fbf2aca016a814d58384', {
      cluster: 'eu'
    });

   // var channel = pusher.subscribe('my-channel');
    var privateChannel = pusher.subscribe("private-channel");

    privateChannel.bind('sendMesssage', function(data) {
      alert(JSON.stringify(data["user"]["id"]));
      @this.GetUserMessages(data["user"])
    });
  </script>