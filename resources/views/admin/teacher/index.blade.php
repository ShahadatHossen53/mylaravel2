
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Teacher List</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/dashboard') }}" class="btn btn-sm m-4 btn-success" >Dashboad</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                
                <a href="{{ route('teachers.create') }}" class="btn btn-sm m-4 btn-success" >Add Teacher</a>
            </div>
        </div>
        <div class="row">
            <h2 class="text-center">The tabel of teacher</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    @if (session()->has('success'))
                        <strong class="text-success"> {{ session()->get('success') }}</strong>
                    @endif
                    
                    @if (session()->has('error'))
                        <strong class="text-success"> {{ session()->get('error') }}</strong>
                    @endif
                </div>
                <table class="table table-responsive text-center">
                    <thead>
                        <tr>
                            <td>SL No</td>
                            <td>Teacher Name</td>
                            <td>email</td>
                            <td>Address</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $key=>$row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <a href="{{ route('teachers.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('teachers.destroy', $row->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{ $teachers->links() }}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>