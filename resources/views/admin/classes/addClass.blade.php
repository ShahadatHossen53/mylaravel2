<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="{{ route('class.index') }}" class="btn btn-sm m-4 btn-success">All Class</a>
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
                <form action="{{ route('classes.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="class" class="form-label">Add class name</label>
                      <input type="text" class="form-control @error('class_id') is-invalid @enderror" name="class_id" value="{{ old('class_id') }}">
                      @error('class_id')
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












