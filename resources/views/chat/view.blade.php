@extends('layouts.main')

@section('content')

<div class="container">
    <h2 class="text-center text-secondary">List Of Users</h2>
    <table class="table table-hover">
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td><a href="chats/{{$user->id}}" class="text-info"><i class="fa fa-send"></i> chat</a></td>
        </tr> 
        @endforeach    
    </table>
</div>

@endsection