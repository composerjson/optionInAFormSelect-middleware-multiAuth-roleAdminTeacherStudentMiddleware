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
        {{-- <a href="{{ route('select.create') }}">Store</a> --}}
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
                    <a href="">EDIT</a>
                    {{-- <a href="{{route('select.destroy',$value->id)}}" onclick="return confirm('Are You Sure Delete That?')">Delete</a> --}}
                    {{-- <form href="{{route('select.destroy',$value->id)}}" method="DELETE" onclick="return confirm('Are You Sure Delete That?')">
                            @csrf
                          <input type="submit" value="Destroy">
                    </form> --}}

                    {{-- <form href="{{route('select.destroy',$value->id)}}" method="DELETE" onclick="return confirm('Are You Sure Delete That?')"> --}}
                        {{-- <a class="btn btn-primary" href="{{ route('companies.edit',$value->id) }}">Edit</a> --}}
                        {{-- @csrf
                        @method('DELETE')
                        <input type="submit" value="Destroy">
                    </form> --}}

                    {{-- <form method="DELETE" action="{{route('select.destroy',$value->id)}}">
                        <div class="form-item center">
                            <button type="submit" class="btn-danger">Delete</button>
                        </div>
                    </form> --}}

                    {{-- <a href="{{route('select.destroy',$value->id)}}">Delate</a> --}}

                    {{-- <form href="{{route('select.destroy',$value->id)}}" method="DELETE">
                        {{ method_field('DELETE') }}
                        {{  csrf_field() }}
                        <button type="submit" class="btn btn-danger">{{ trans('Delete') }}</button>
                    </form> --}}

                    {{-- <form action="{{url('select.destroy', [$value->id])}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form> --}}

                     {{-- <form action="{{ route('select.destroy', [$value->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form> --}}


                    
                    <form action="{{ route('select-form.destroy',$value->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>
