<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Bewerkpagina</title>
</head>

<body>

    <h1>Bewerk het lied</h1>

    <form method="POST" action="{{ route('update', 1) }}"> 

        <select name="title" id="title">
            @php
                $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
                foreach ($songs as $songOption) {
                    echo "<option value=\"$songOption\">$songOption</option>";
                }
            @endphp
        </select>

        <button type="submit">Update Song</button>
    </form>

</body>

</html>
