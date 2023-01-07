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
    <form action="{{route('select.update')}}" method="POST">
      @csrf
      @method('PUT')
  
      <select name="id[]" id="subjects" required>
        <option value="">Select Subject</option>
        @foreach($selects as $value)
                <option value="{{ $value->id }}" {{$value->id  == $data->id  ? 'Selected' : ''}}>{{$value->cars}}</option>
                {{-- <option value="{{ $value->id }}" @if(in_array($value->id)) selected @endif>{{$value->cars}}</option> --}}

        @endforeach
      </select>
        {{-- @method('post') --}}
        {{-- <label for="cars">Choose a car:</label>
        <select name="cars">
          {{-- <option value="{{$post->title}}">Volvo</option> --}}
          {{-- <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option> --}}
        {{-- </select>
        <br><br> --}}
        <input type="submit" value="Submit">
      </form>
    

      {{-- <select class="form-control" name="resoureceName">
        <option>Select Item</option>
      
        @foreach ($selects as $value)
          <option value="{{ $value->id }}" > {{ $value->name }} </option>
        @endforeach 

      </select> --}}


</body>
</html>