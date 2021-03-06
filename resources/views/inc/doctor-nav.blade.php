<div class="sidebar" data-color="azure" >

    <div class="logo">
     <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&rounded=true&font-size=.5&size=78" alt="Name" style="margin-left:5rem !important;">
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="/doctor">
            <i class="material-icons">person</i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/doctor/booking/{{Auth::user()->id}}">
               <i class="material-icons">book</i>
               <p>View Bookings</p>
           </a>
         </li>
         <li class="nav-item ">
          <a class="nav-link" href="/prescription">
             <i class="material-icons">list</i>
             <p>View Prescription</p>
         </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="/chats">
           <i class="material-icons">chat</i>
           <p>Chat Now</p>
       </a>
     </li>
         <li class="nav-item ">
          <a class="nav-link" href="/medical/history/{{Auth::user()->id}}">
             <i class="material-icons">list</i>
             <p>Medical History</p>
         </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="/blogs/table/{{Auth::user()->id}}">
           <i class="material-icons">list</i>
           <p>View Own Blog</p>
       </a>
     </li>
        <li class="nav-item ">
           <a class="nav-link" href="/doctor/{{Auth::user()->id}}/edit">
              <i class="material-icons">edit</i>
              <p>Edit Profile</p>
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