
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ Auth::user()->name }}</title>
  </head>
  <body>
    


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/dashboard') }}" class="btn btn-sm m-4 btn-success" >Dashboad</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                
                <a href="{{ route('class.store') }}" class="btn btn-sm m-4 btn-success" >Add Class</a>
            </div>
        </div>
        <div class="row">
            <h2 class="text-center">The tabel of classes</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-responsive text-center">
                    <thead>
                        <tr>
                            <td>Sl</td>
                            <td>Class Name</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $key=>$row)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $row->class_name }}</td>
                                <td>
                                    <a href="{{ route('class.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ route('class.delete', $row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{ $classes->links() }}
            </div>
            
            <div class="col-md-2"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>