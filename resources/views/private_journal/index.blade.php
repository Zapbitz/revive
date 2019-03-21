@extends('layouts.main')

@section('content')
<div class="container">
  <a href="/privatejournal/create" class="btn btn-success btn-block">Write a Private Journal</a>
    <table class="table">
      <thead class="bg-info text-white">
        <tr>
          <th>Sl.No.</th>
          <th>Client ID</th>
          <th>Key Terms</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
          @php $sl=1; @endphp
        @foreach($pjournals as $pjournal)
        <tr>
          <td>{{ $sl++ }}</td>
          <td>{{$pjournal->clientDetails->name}}</td>
          <td>{{ $pjournal->key_note }}</td>      
          <td>
              <a href="/privatejournal/{{$pjournal->id}}" class="btn btn-success btn-sm float-left"><i class="fa fa-eye"></i></a>
              <a href="/privatejournal/{{$pjournal->id}}/edit" class="btn btn-warning btn-sm float-left"><i class="fa fa-edit"></i></a>
              <form action="/privatejournal/{{$pjournal->id}}" method="POST">
                @csrf
                @method('DELETE')
               <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
             </form>   
          </td> 
        </tr>
        @endforeach

      </tbody>
    </table>  
  </div>
@endsection