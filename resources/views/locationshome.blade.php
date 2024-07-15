@include('navbar')

<h1>Locations</h1>

<div class="container mt-5">

    <div class="row">
        @foreach($locations as $location)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $location->loc_photo }}" alt="{{ $location->loc_name }}"height="250">
                <div class="card-body">
                    <h5 class="card-title">{{ $location->loc_name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('footer')