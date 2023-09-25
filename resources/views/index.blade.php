<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Songs</title>
</head>

<body>
    <h1>Lijst met alle titels</h1>

    <ul>
        @foreach ($songs as $song)
        <li><a href="{{ route('show', ['id' => $song->id]) }}">{{ $song->title }}</a></li>
        @endforeach
    </ul>

</body>

</html>
