@include('headerdash')

        <h1>locations</h1>
        <p>View Locations Details</p>

        <div class="row">
                <div class="col">
                  
                </div>
                <div class="col-md-auto">
                  
                </div>
                <div class="col col-lg-2">
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#createLocationModal">
                                Add Location
                            </button>
                </div>
              </div><br><br>

        <!--add location model-->

        <div class="modal fade" id="createLocationModal" tabindex="-1" aria-labelledby="createLocationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createLocationModalLabel">Create Location</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('locations.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="loc_name">Location Name</label>
                                    <input type="text" class="form-control" id="loc_name" name="loc_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="loc_name">provience Name</label>
                                    <input type="text" class="form-control" id="loc_name" name="provience" required>
                                </div>
                                <div class="form-group">
                                    <label for="loc_photo">Location Photo</label>
                                    <input type="file" class="form-control-file" id="loc_photo" name="loc_photo" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped" id="member" style="width: 100%">
                <caption class="table-title">Locations</caption>
                <thead>

                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Crated at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($locations as $location)
                  <tr>
                    <th scope="row">{{ $location->id }}</th>
                    <td>{{ $location->loc_name }}</td>
                    <td><img src="{{ $location->loc_photo }}" alt="{{ $location->loc_name }}" width="50" height="50"></td>
                    <td>{{ $location->created_at }}</td>
                    <td>   <form action="{{ route('locations_delete', $location->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    
@include('footerdash')