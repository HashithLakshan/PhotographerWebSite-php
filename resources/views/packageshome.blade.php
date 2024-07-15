@include('navbar')

<h1>Packages</h1>

<div class="container mt-5">
    
    <div class="row">
        @foreach($packages as $package)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $package->pkg_photo) }}" alt="{{ $package->pkg_name }}" class="card-img-top" style="height: 290px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $package->pkg_name }}</h5><hr>
                    <p class="lead">Includes, </p>
                    <ul>
                    <li><p class="lead">{{ $package->pkg_line1 }}</p></li>
                    <li><p class="lead">{{ $package->pkg_line2 }}</p></li>
                    <li><p class="lead">{{ $package->pkg_line3 }}</p></li>
                    <li><p class="lead">{{ $package->pkg_line4 }}</p></li>
                    </ul>
                    <hr>
                    <h5>Rs.{{ $package->pkg_price }}/=</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('footer')