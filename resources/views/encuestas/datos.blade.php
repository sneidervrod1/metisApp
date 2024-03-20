<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="border-l-pink-600">
       
        
            <form method="POST" action="{{ route('encuesta.id') }}">
                @csrf
                <label class="block mt-5 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="niveles">

                </label>
            
                <select name="id">
                    @foreach ($datos as $item)
                        <option name="{{ $item->id }}" value="{{ $item->id }}">{{ $item->name}}</option>

                    @endforeach
                </select>
                
                <input type="submit">


            </form>
    </div>
</body>
</html>