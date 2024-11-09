<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="new-integrity-hash" crossorigin="anonymous">


</head>
  <body>
    <div class="student">
    <h1>Students Details</h1>
    <form action="" method="get">
        <div class="mb-3">
          <input type="search" value="{{ $search }}" class="form-control" id="search" name="search" placeholder="search">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>

      </form>
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
            <tr>
                <th>{{ $student->id }}</th>
                <td>{{ $student->name}}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="" ><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="" class="danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
