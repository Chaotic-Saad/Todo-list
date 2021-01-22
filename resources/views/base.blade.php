<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2DOLIST:</title>
</head>
<body>
 <div>
    <a style="margin: 19px;" href="{{ route('tasks.create')}}" class="btn btn-primary">New task</a>
    </div>  

  <div class="container">
    @yield('main')
  </div>

</body>
</html>