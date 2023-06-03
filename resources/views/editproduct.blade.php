<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="row">
        @include('errors')
        <div class="col-12">
       <form action="{{route('editProduct')}}" method="POST" class="form-group"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="name"  class="form-control" placeholder="product name"><br>
        <input type="number" name="price" class="form-control" placeholder="product price"><br>
        <input type="file" name="image" ><br><br><br>
        <input type="submit" class="btn btn-success btn-block" value="create" >
       </form>

    </div>
    </div>

</body>
</html>
