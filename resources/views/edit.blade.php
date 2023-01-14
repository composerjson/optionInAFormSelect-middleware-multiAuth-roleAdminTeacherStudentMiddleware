<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>edit</h2>



    <h5>fatch all data </h5>
    <form  action="{{route('select.update',$idWiseValue->id)}}" method="POST">
        @method('PUT')
        @csrf
        <select name="cars" required>
            <option value="">Select Subject</option>
            @foreach ($selects as $value)
                  <option @if($value->id == $idWiseValue->id) selected @endif  value="{{ $value->cars }}" >{{ $value->cars }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
    
</body>

</html>
