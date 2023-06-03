<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
      <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="col-4">

                <div class="card">
                    <div class="card-head text-center">
                        <h2>product-title</h2>
                    </div>
                    <div class="card-body">
                        <img src="" alt="">
                        <h3>price</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <hr>
        {{-- create product --}}
        <div class="row">
            @include('errors')
            <div class="col-12">
           <form action="{{route('CreateProduct')}}" method="POST" class="form-group"  enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="product name"><br>
            <input type="number" name="price" class="form-control" placeholder="product price"><br>
            <input type="file" name="image" ><br><br><br>
            <input type="submit" class="btn btn-success btn-block" value="create" >
           </form>

        </div>
      </div>
</body>
</html>
