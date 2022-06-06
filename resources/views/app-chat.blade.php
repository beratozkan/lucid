@extends("layout.master")
@yield('title',"App")
@section("js")

@endsection

@section("section1")
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat_app">
            <div class="people_list">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
                <ul class="list-unstyled chat-list mt-2 mb-0">
                    @foreach ($chats as $chat)     
                        @livewire("chat-client-controller",["chat"=>$chat])
                    @endforeach
                </ul>
            </div>
            @livewire("chat-app-card")
        </div>
    </div>
</div>

@endsection
