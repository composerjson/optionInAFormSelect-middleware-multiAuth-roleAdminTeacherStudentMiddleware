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
        <div class="row">
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>image</th>
                    <td>action</td>
                </tr>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->image }}</td>

                        <td>
                            <a href="{{ route('categories.edit',[$item->id]) }}">EDIT</a>

                            <a href="">
                                <form action="{{ route('categories.destroy',$item->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </a>
                        </td>


                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
