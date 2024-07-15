@include('navbar')

<h1>Gallary</h1>


<div class="container text-center">
    <div class="row">
      <div class="col align-self-start">
        <img src="{{url('img/gallary3.jpg')}}" width="400" height="auto">
      </div>
      <div class="col align-self-center">
        <img src="{{url('img/gallary10.png')}}" width="400" height="auto">
      </div>
      <div class="col align-self-end">
        <img src="{{url('img/gallary6.jpg')}}" width="400" height="auto">
      </div>
    </div>
  </div>

  <center><hr width="75%" </center>

  <div class="container text-center">
    <div class="row">
      <div class="col-sm-6 col-md-5 col-lg-6"><img src="{{url('img/gal1.jpg')}}" width="610" height="auto"></div>
      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"><img src="{{url('img/gal2.jpg')}}" width="610" height="auto"></div>
    </div>
  </div>

  <center><hr width="75%" </center>

  <div class="container text-center">
    <div class="row">
      <div class="col align-self-start">
        <img src="{{url('img/gallary9.jpg')}}" width="400" height="auto">
      </div>
      <div class="col align-self-center">
        <img src="{{url('img/gallary2.jpg')}}" width="400" height="auto">
      </div>
      <div class="col align-self-end">
        <img src="{{url('img/gallary7.jpg')}}" width="400" height="auto">
      </div>
    </div>
  </div><br>


@include('footer')