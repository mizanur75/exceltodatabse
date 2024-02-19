<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <main class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-light p-5 rounded mt-3">
                <h1 class="mb-3">Upload Excel File</h1>
                <input type="file" class="form-control mb-3">
                <input type="submit" class="btn btn-primary" value="Upload">
            </div>
        </form>
    </main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>