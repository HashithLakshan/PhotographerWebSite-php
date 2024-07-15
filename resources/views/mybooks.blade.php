@include('navbar')

<h1>My Bookings</h1>

<div class="container p-5">

    <div class="alert alert-danger" role="alert">
        <p class="lead">If your booking request was rejected it will be disaphear here</p>
      </div>

<div class="alert alert-success" role="alert">
    @foreach($bookings as $booking)
    @if($booking->name == Auth::user()->name)
    <p class="lead">Hello {{ $booking->name }}, Your {{ $booking->package->pkg_name }} booking on <b>{{ $booking->date }}</b> in <b>{{ $booking->location->loc_name }}</b> was <b>{{ $booking->status }} !</b></p>
    @endif
    @endforeach
  </div>

</div>

@include('footer')