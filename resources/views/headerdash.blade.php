<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>true colour</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel=  "stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            background: rgba(255, 255, 255, 0.5); /* Transparent background */
            width: 250px;
            flex-shrink: 0;
        }
        .sidebar .nav-link {
            color: #000;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar bg-light">
        <img src="{{url('img/logoh.jpg')}}" width="280" height="120">
        <nav class="nav flex-column p-3">
            <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link active" href="{{ route('booking.index') }}">Bookings</a>
            <a class="nav-link active" href="{{ route('packages.index') }}">Packages</a>
            <a class="nav-link active" href="{{ route('locations.index') }}">Locations</a>
            <a class="nav-link active" href="{{ route('users.index') }}">Users</a>
            {{-- <a class="nav-link active" href="{{ route('about') }}">Change About</a> --}}
            <a class="nav-link active" href="{{ route('payment') }}">Payments</a>
        </nav>

<hr>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    &nbsp &nbsp <button class="btn btn-dark" type="submit">
        Log-out
    </button>
</form>

    </div>

    <div class="content">