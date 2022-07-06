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
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="patch">
                    <select name="class_id" class="form-control">
                        @foreach ($classes as $key=>$row)
                            <option value="{{ $row->id }}" @if ($row->id==$student->class_id)
                                selected
                            @endif> {{ $row->class_id }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                      <label for="name" class="form-label">Edit student name</label>
                      <input type="text" class="form-control"  name="name" value="{{ $student->name }}">

                      <label for="sid" class="form-label">Edit student ID</label>
                      <input type="number"  class="form-control " name="sid" value="{{ $student->sid }}">
                      

                      <label for="email" class="form-label">Edit student Email</label>
                      <input type="email" class="form-control " name="email" value="{{ $student->email  }}">
 

                      <label for="phone" class="form-label">Add student phone number</label>
                      <input type="number" class="form-control" name="phone" value="{{ $student->phone  }}">

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












