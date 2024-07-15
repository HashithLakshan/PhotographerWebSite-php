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
        
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

<p class="lead"> Hi, {{ Auth::user()->name }} Book your Date </p>

            <div class="form-group">
                {{-- <label for="name">Name</label> --}}
                <input type="hidden" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly required><br>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <select class="form-control" id="location" name="location" required>
                    <option value="" disabled selected>Select Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->loc_name }}</option>
                        @endforeach
                </select><br>
            </div>
            <div class="form-group">
                <label for="package">Package</label>
                <select class="form-control" id="package" name="package" required>
                    <option value="" disabled selected>Select Package</option>
                    @foreach($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->pkg_name }}&nbsp&nbspRs.{{ $package->pkg_price }}/=</option>
                        @endforeach
                </select><br>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required><br>
            </div>
            

            <div class="row">
                <div class="col">
                    
                </div>
                <div class="col-md-auto">
                    <a class="btn btn-outline-light" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                      </svg>
                    </a>
                </div>
                
                <div class="col col-lg-2">
                    <button type="submit" class="btn btn-outline-light">Book</button>
                </div>
              </div>
            </div>
        </form>


        <br><br><br>
    </div>
     </div>
   </div>
 </div>
</div>
<!-- Background image -->
</header>

@include('footer')