@extends('layouts.nav')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card col-lg-6 ml-4">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <h1>This is contact page</h1>
                <div class="card-body">

                    <form action="{{ route('store.contact') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Full Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                @error('name') is-invalid @enderror value="{{ old('name') }}">
                            @error('name')
                                <strong class="alert text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                @error('email') is-invalid @enderror value="{{ old('email') }}">
                            @error('email')
														<strong class="alert text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                @error('password') is-invalid @enderror value="{{ old('password') }}">
                            @error('password')
														<strong class="alert text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>






    {{-- echo URL::current(); --}}
    {{-- {{URL::full()}}
<br>
{{url()->previous()}} --}}
    <br>
    {{-- My contact no is : {{url('contact/{roll}')}} --}}
    <a href="{{ url('/') }}">Back to Home</a>
@endsection
