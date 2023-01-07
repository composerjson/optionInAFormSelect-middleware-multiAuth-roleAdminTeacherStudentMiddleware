<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        <a href="{{ route('select.create') }}">Store</a>
    </h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>

        </tr>
        @foreach ($selects as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->cars}}</td>
                <td>
                    <a href="{{route('select.edit',$value->id)}}">EDIT</a>
                    
                   <form action="{{route('select.destroy',$value->id)}}" method="post" onclick="return confirm('Are You Sure Delete That?')"> 
                            @csrf
                            @method('delete')
                          <input type="submit" value="Destroy">
                    </form>

                    {{-- <form action="{{ route('select.destroy', [$value->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form> --}}

                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>
