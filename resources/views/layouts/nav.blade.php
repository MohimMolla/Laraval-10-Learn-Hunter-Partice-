<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	
</head>
<body>
@guest


	@else


	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('about')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('contact')}}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/country')}}">Country</a>
					</li>
					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li> --}}
					{{-- <li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li> --}}
				</ul>
				{{-- <form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form> --}}
				<div class="dropdown">
					<button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						Dropdown button
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
						<li><a class="dropdown-item" href="{{route('register')}}">Registration</a></li>
						<li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
						<li><a class="dropdown-item" href="{{route('dashboard')}}">Dashbord</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	@endguest
	@yield('content')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>