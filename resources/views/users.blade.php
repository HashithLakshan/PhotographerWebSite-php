@include('headerdash')

<h1>Users</h1>
<p>View Locations</p>

<table class="table table-striped" id="member" style="width: 100%">
    <caption class="table-title">Locations</caption>
    <thead>

      <tr>
        <th scope="col">User ID</th>
        <th scope="col">User name</th>
        <th scope="col">User E-mail</th>
        <th scope="col">Registered at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td> <form action="{{ route('users_delete', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@include('footerdash')