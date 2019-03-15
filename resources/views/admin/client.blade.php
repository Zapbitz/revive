@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="azure" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
       <img src="https://ui-avatars.com/api/?name=Admin&rounded=true&font-size=.5&size=128" alt="Name" style="margin-left:4rem !important;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/admin-panel">
              <i class="material-icons">folder</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
                <a class="nav-link" href="/admin-panel/doctor">
                  <i class="material-icons">persons</i>
                  <p>Doctor</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-panel/report">
                  <i class="material-icons">R</i>
                  <p>Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-panel/blog">
                  <i class="material-icons">B</i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/admin-panel/client">
                  <i class="material-icons">H</i>
                  <p>History Of Clients</p>
                </a>
              </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="material-icons">logout</i>
                <p>Logout</p>
                 </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      {{-- Profile template --}}
       <div class="container mt-5">
          <h2 class="text-center">List of Articles</h2>
           <div class="row">
            
              <div class="container">
                  <table class="table">
                    <thead class="bg-info text-white">
                      <tr>
                        <th>Sl.No.</th>
                        <th>Article Title</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                        @if( count($clients) > 0 )
                            @php $i=1; @endphp
                            @foreach($clients as $client)
                                <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$client->name}}</td>                        
                                <td>
                                    <a href=""><i class="fa fa-eye"></i> <small>View History</small></a><br>  
                                </td> 
                                </tr>  
                            @endforeach
                        @else
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <b class="text-danger ">No Articles Published Yet</b>
                                    </td>
                                </tr>
                        @endif

                    </tbody>
                  </table>  
                </div>

           </div>
       </div>
    </div>
  </div>
  
@endsection