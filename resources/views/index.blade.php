<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Songs</title>
</head>

<body>
    <h1>Lijst  met alle nieuwe songs</h1>

    <ul>
        <div class="songs">
            @foreach ($songs as $song)
            <li>{{ $song }}</li>
            @endforeach
        </div>
    </ul>
</body>

</html>
