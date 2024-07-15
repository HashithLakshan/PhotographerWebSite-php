@include('headerdash')

        <h1>Bookings</h1>
        <p>View Booking Details</p>

        
      <!-- <table class="table"> -->

                <table class="table table-striped" id="member" style="width: 100%">
                    <caption class="table-title">Bookings</caption>
       
                <thead>
                  <tr>
                    <th scope="col">Booking No</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Package Name</th>
                    <th scope="col">Booked At</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                        @foreach($bookings as $booking)
                  <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->location->loc_name }}</td>
                    <td>{{ $booking->package->pkg_name }}</td>
                    <td>{{ $booking->created_at}}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->status }}</td>
                    
                    <td>                        
                        <form method="POST" action="{{ route('booking.update', ['id' => $booking->id]) }}">
                                @csrf
                                <input type="hidden" name="status" value="Approved">
                                <button type="submit" class="btn btn-outline-success">Approve</button>
                            </form>                           
                      
                  </tr>
                  @endforeach
                </tbody>
              </table>
    
@include('footerdash')