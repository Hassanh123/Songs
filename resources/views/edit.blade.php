<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Bewerkpagina</title>
 

</head>

<body>
<h1> bewerk hier het lied</h1>

    <form method="POST" action="{{ route('songs.update', $song->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $song->title }}" required>
        <input type="text" name="singer" value="{{ $song->singer }}" required>

        <button type="submit">Bewerken</button>
    </form>

</body>

</html>
