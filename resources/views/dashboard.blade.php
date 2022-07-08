

<x-app-layout>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <title>{{ Auth::user()->name }}</title>
      </head>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.me') }}">Profile</a></li>
                            
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                </div>
                <br>
                <br>
                <br>
                <br>
                 <h5 class="text-center">Hello, {{Auth::user()->name}}. Welcome to our website.</h5>

                 <a href="{{ route('user.details',Crypt::encryptString('59')) }}" class="btn btn-primary">{{ Auth::user()->name }} details</a>
                 <br>
                 <br>
                 <br>
                 
                 <a href="{{ route('class.index') }}" class="btn btn-primary"> Classes</a>
                 <a href="{{ route('students.index') }}" class="btn btn-danger"> Students</a>
                 <a href="{{ route('teachers.index') }}" class="btn btn-success"> Teacher</a>
                <br>
                <br>
                <br>
                <br>

                <form action="{{ route('user.hashing') }}" method="post">
                  @csrf
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" name="password"> 
                  <input type="submit" class="btn btn-primary">

                </form>



            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</x-app-layout>
