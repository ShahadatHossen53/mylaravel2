<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Student</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="{{ route('students.index') }}" class="btn btn-sm m-4 btn-success">All Student</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="row">
                    @if (session()->has('success'))
                        <strong class="text-success"> {{ session()->get('success') }}</strong>
                    @endif
                    
                    @if (session()->has('error'))
                        <strong class="text-success"> {{ session()->get('error') }}</strong>
                    @endif
                </div>
                <form action="{{ route('students.update') }}" method="POST">
                    @csrf
                    <select name="class_id" class="form-control">
                        @foreach ($classes as $key=>$row)
                            <option value="{{ $row->id }}">{{ $row->class_id }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                      <label for="name" class="form-label">Add student name</label>
                      <input type="text" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                      @error('name')
                      <span class="invalide-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label for="sid" class="form-label">Add student ID</label>
                      <input type="number" required class="form-control @error('sid') is-invalid @enderror" name="sid" value="{{ old('sid') }}">
                      @error('sid')
                      <span class="invalide-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label for="email" class="form-label">Add student Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                      @error('email')
                      <span class="invalide-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label for="phone" class="form-label">Add student phone number</label>
                      <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                      @error('phone')
                      <span class="invalide-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>












