<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area</title>
</head>
<body>
      {{-- Результат вычисления --}}
    <p><strong>Result</strong>{{ $area ?? '' }}</p>

    {{-- Форма для передачи данных --}}
    <form action="{{ route('area2') }}" method="post">
        @csrf
        <label for="area2">Height</label>
        <input type="text" name='height' value="{{ $height ?? old('height') }}">
        <label for="area2">Base</label>
        <input type="text" name='footing' value="{{ $footing ?? old('footing') }}">
        <button type="submit">Calculate</button>
    </form>

    {{-- Сообщения об ошибках --}}
    @if ($errors->any())
        <h4>Errors:</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>

