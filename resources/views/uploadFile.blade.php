<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="etat_demande" placeholder="status"><br>
        <input type="text" name="commentaire" placeholder="commentaire"><br>
        <input type="file" name="fichier" id="file"><br>
        <input type="submit" name="submit">

    </form>

</body>
</html>