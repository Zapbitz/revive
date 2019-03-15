<div class="container">
    <table class="table">
      <thead class="bg-info text-white">
        <tr>
          <th>Booking ID</th>
          <th>Client Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        @foreach($bookings as $booking)
        <tr>
          <td>{{$booking->id}}</td>
          <td>{{$booking->user_details->name}}</td>
          <td>{{$booking->date}}</td>
          <td>{{$booking->time}}</td>
        
          @if(!$booking->isAccept)
          <td>
              <form action="/booking/accept/{{$booking->id}}">
               <button type="submit" class="btn btn-success btn-sm">Accept</button>
             </form>   
          </td> 
          @else
          <td>
              <span class="badge badge-success">Approved</span>
          </td>
          @endif
         
        </tr>
        @endforeach

      </tbody>
    </table>  
  </div>