@extends('layouts.main')

{{-- @section('head')
    <meta name="user_id" content="{{ $user->id }}">
@endsection --}}

@section('content')

    <h3 class="text-center text-info"> Welcome To Chat Room </h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card card-nav-tabs p-5">
                <h4 class="card-header card-header-info text-center">{{auth()->user()->name}}</h4>
                {{-- <input type="hidden" name="reciver_id" value={{$user->id}}> --}}
                <div id="app">
                    <div class="card-body">
                        @foreach ($chats as $chat)
                        @if($chat->sender_id == auth()->user()->id)
                             <span class="shadow border py-1 px-3 pull-right bg-info text-white">{{$chat->message}}</span>  <br><br> 
                        @else
                            <span class="shadow border py-1 px-3 pull-left bg-secondary">{{$chat->message}}</span>  <br><br> 
                        @endif
                        @endforeach
                        <chat v-for="value in chat.message" :key=value.index> 
                            @{{value}}
                        </chat>
                </div>
                <div class="card-footer">
                    {{-- <form action="/send" method="post">
                        @csrf --}}
                         <span class="badge badge-pill badge-info ">@{{typing}}</span>
                        <textarea name="message" rows="2" cols='100%' v-model='message' @keyup.enter='send({{$user->id}})'></textarea>
                        {{-- <button type="submit" class="btn btn-info ml-3" > <i class="fa fa-send"></i> send </button> --}}
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <h3 class="text-center"><i class="fa fa-write"></i> <a href="/prescription/{{$user->id}}" class="btn btn-info ">Write Priscription</a></h3>
        <h3 class="text-center"><i class="fa fa-arrow-left"></i> <a href="{{ url('/chats') }}" class="text-dark">Go Back</a></h3>
</div>

<script src="/js/app.js" charset="utf-8"></script>
{{-- <script>
    $('document').ready(function(
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    ));

</script> --}}
@endsection