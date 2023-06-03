<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container pt-5">
    @include('errors')
      <form action="{{route('createShop')}}" class="form-group" method="POST">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="shopname"><br>
        <input type="submit" class="btn btn-success" value="submit">
      </form>
</div>
</body>
</html>
