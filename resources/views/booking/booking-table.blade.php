<div class="container">
    <table class="table">
      <thead class="bg-info text-white">
        <tr>
          <th>Booking ID</th>
          <th>Client Name</th>
          <th>Date</th>
          <th>Time</th>
          @role('doctor')
          <th>Action</th>
          @endrole
        </tr>
      </thead>
      <tbody class="bg-white">
        @foreach($bookings as $booking)
        <tr>
          <td>{{$booking->id}}</td>
          <td>{{$booking->user_details->name}}</td>
          <td>{{$booking->date}}</td>
          <td>{{$booking->time}}</td>
          @role('doctor')
          @if(!$booking->isAccept &&!$booking->isReject)
          <td>
              <form action="/booking/accept/{{$booking->id}}" class="float-left">
               <button type="submit" class="btn btn-success btn-sm">Accept</button>
             </form> 
             <form action="/booking/reject/{{$booking->id}}">
              <button type="submit" class="btn btn-danger btn-sm">Reject</button>
            </form>   
          </td>
          @elseif($booking->isReject)
          <td>
              <span class="badge badge-danger">Canceled</span>
          </td>
          @else
          <td>
              <span class="badge badge-success">Approved</span>
          </td>
          @endif
          @endrole
        </tr>
        @endforeach

      </tbody>
    </table>  
  </div>