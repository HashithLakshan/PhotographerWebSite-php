@include('navbar')

 <!-- Background image -->
 <div class="p-5 text-center bg-image"
 style="
   background-image: url('img/1.png');
   height: 800px;
   background-size: absolute;
 "
>
 <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);"><br><br>
   <div class="d-flex justify-content-center align-items-center h-100">
     <div class="text-white">
       <h1 class="mb-3">TRUE COLOUR</h1>
       <h4 class="mb-3">PHOYOGRAPHY</h4>
       <div class="container mt-5">
        
        @if (Route::has('login'))
        @auth
        Hi, {{ Auth::user()->name }}<br><br>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{route('booking.home')}}" role="button">Book Now !</a>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{route('booking.mybookings')}}" role="button">My Bookings</a>
        @else

        @if (Route::has('register'))

        Register for book a date !<br><br>

        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{ route('login') }}" role="button">Log-in </a>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{ route('register') }}" role="button">Register </a>
        @endif
        @endauth
        @endif

        <br><br><br>
    </div>
     </div>
   </div>
 </div>
</div>
<!-- Background image -->                
</div>
</header>



@include('footer')