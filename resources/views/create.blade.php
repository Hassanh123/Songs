<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<h1> Maak hier een nieuw lied aan </h1>
<form method="post" action="/store">
    @csrf
    <label for="title">Titel:</label>
    <input type="text" name="title" id="title">
    <label for="singer">Artiest:</label>
    <input type="text" name="singer" id="singer">
    <button type="submit">CREATE</button>
</form>



</body>
</html>
