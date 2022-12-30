<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
        <div class="row">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                @method("POST")

                 <div class="col">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                  </div>
                  <div class="col mt-5">
                    <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                  </div>
                  <div class="col mt-5">
                    <input type="text" name="image" value="{{old('image')}}">
                  </div>
                  <button type="submit" name="submit">Submit</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>