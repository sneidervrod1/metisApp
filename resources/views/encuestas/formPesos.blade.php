<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <form action="{{ route('encuesta.pesos')}}" method="POST">
        @csrf
        @foreach ($dato->categories as $item)
        {{ $item->name }} <input  required type="number" min="1" max="98" name="{{ $item->id }}" placeholder="{{$item->pivot->weight_category}} " value="{{$item->pivot->weight_category}} ">
       <br>            
        @endforeach
      
        <input type="submit">
    </form>

        @if(isset($status))
        <p class="alert alert-{{ $status_type }}" >{{ $status }}</p>
        @endif
</body>
</html>