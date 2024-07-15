@include('headerdash')

        <h1>Packages</h1>
        <p>View Package Details</p>

        <div class="row">
                <div class="col">
                  
                </div>
                <div class="col-md-auto">
                  
                </div>
                <div class="col col-lg-2">
                        <button class="btn btn-outline-dark" data-toggle="modal" data-target="#addPackageModal">Add Package</button>
                </div>
              </div><br><br>


              <!--add package model-->

        <div class="modal fade" id="addPackageModal" tabindex="-1" role="dialog" aria-labelledby="addPackageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPackageModalLabel">Add Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('packages.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pkg_name">Package Name</label>
                            <input type="text" class="form-control" id="pkg_name" name="pkg_name" required>
                        </div>
                        <div class="form-group">
                            <label for="pkg_price">Package Price</label>
                            <input type="text" class="form-control" id="pkg_price" name="pkg_price" required>
                        </div>
                        <div class="form-group">
                            <label for="pkg_line1">Package Line 1</label>
                            <input type="text" class="form-control" id="pkg_line1" name="pkg_line1" required>
                        </div>
                        <div class="form-group">
                            <label for="pkg_line2">Package Line 2</label>
                            <input type="text" class="form-control" id="pkg_line2" name="pkg_line2">
                        </div>
                        <div class="form-group">
                            <label for="pkg_line3">Package Line 3</label>
                            <input type="text" class="form-control" id="pkg_line3" name="pkg_line3">
                        </div>
                        <div class="form-group">
                            <label for="pkg_line4">Package Line 4</label>
                            <input type="text" class="form-control" id="pkg_line4" name="pkg_line4">
                        </div>
                        <div class="form-group">
                            <label for="pkg_photo">Package Photo</label>
                            <input type="file" class="form-control-file" id="pkg_photo" name="pkg_photo" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <table class="table table-striped" id="member" style="width: 100%">
        <caption class="table-title">Packages</caption>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pakage Name</th>
                    <th scope="col">Package price</th>
                    <th scope="col">Line 1</th>
                    <th scope="col">Line 2</th>
                    <th scope="col">Line 3</th>
                    <th scope="col">Line 4</th>
                    <th scope="col">Photo</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($packages as $package)
                  <tr>
                    <th scope="row">{{ $package->id }}</th>
                    <td>{{ $package->pkg_name }}</td>
                    <td>{{ $package->pkg_price }}</td>
                    <td>{{ $package->pkg_line1 }}</td>
                    <td>{{ $package->pkg_line2 }}</td>
                    <td>{{ $package->pkg_line3 }}</td>
                    <td>{{ $package->pkg_line4 }}</td>
                    <td><img src="{{ asset('storage/' . $package->pkg_photo) }}" alt="{{ $package->pkg_name }}" style="width: 50px; height: 50px;"></td>
                    <td>
                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    
@include('footerdash')