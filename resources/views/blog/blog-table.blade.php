@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table">
      <thead class="bg-info text-white">
        <tr>
          <th>Sl.No.</th>
          <th>Blog Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
          @php $sl=1; @endphp
        @foreach($blogs as $blog)
        <tr>
          <td>{{ $sl++ }}</td>
          <td>{{ $blog->title }}</td>      
          <td>
              <a href="/blogs/{{$blog->id}}" class="btn btn-success btn-sm float-left"><i class="fa fa-eye"></i></a>
              <a href="/blogs/{{$blog->id}}/edit" class="btn btn-warning btn-sm float-left"><i class="fa fa-edit"></i></a>
              <form action="/blogs/{{$blog->id}}" method="POST">
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