@extends('layouts.main')

@section('content')

<div class="container bg-white p-3 my-3">
    <h2 class="text-center text-secondary">List Of Users</h2>
    <table class="table table-hover">
        @foreach ($users as $user)
        @role('client')
        @if($user->role == "doctor")
            <tr>
                <td>{{$user->name}}</td>
                <td align="right"><a href="chats/{{$user->id}}" class="text-info"><i class="fa fa-send"></i>Chat Now</a></td>
            </tr>
            @endif
        @endrole
        @role('doctor')
        @if($user->role == "client")
            <tr>
                <td>{{$user->name}}</td>
                <td align="right"><a href="chats/{{$user->id}}" class="text-info"><i class="fa fa-send"></i>Chat Now</a></td>
            </tr>
        @endif
        @endrole
        @endforeach
            
    </table>
</div>

@endsection