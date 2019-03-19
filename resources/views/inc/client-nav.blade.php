<div class="logo">
    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&rounded=true&font-size=.5&size=128" alt="Name" style="margin-left:4rem !important;">
   </div>
   <div class="sidebar-wrapper">
     <ul class="nav">
       <li class="nav-item active">
         <a class="nav-link" href="/client">
           <i class="material-icons">person</i>
           <p>Profile</p>
         </a>
       </li>
       <li class="nav-item ">
          <a class="nav-link" href="/client/{{Auth::user()->id}}/edit">
             <i class="material-icons">edit</i>
             <p>Edit Profile</p>
         </a>
       </li>
        <li class="nav-item ">
            <a class="nav-link" href="/prescription">
                <i class="material-icons">list</i>
                <p>Prescription</p>
            </a>
        </li>
       <li class="nav-item ">
            <a class="nav-link" href="/client/{{Auth::user()->id}}/edit">
                <i class="material-icons">M</i>
                <p>Medical Record</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/prescription">
                <i class="material-icons">list</i>
                <p>Prescription</p>
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