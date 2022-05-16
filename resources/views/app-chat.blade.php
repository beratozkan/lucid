@extends("layout.master")
@yield('title',"App")
@section("section1")
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat_app">
            @livewire("chat-client-controller")
            @livewire("chat-app-card")
        </div>
    </div>
</div>
@endsection