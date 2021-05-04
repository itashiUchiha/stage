<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="#">
        @csrf
        <table>
            <tr>
                <td><label for="username">username</label></td>
                <td><input id="name" name="name" type="text"></td>
            </tr>
            <tr>
                <td><label for="type">type</label></td>
                <td>
                    <fieldset>
                        <input type="checkbox" name="type" value="importation"> importation
                        <input type="checkbox" name="type" value="exportation">exportation
                        <input type="checkbox" name="type" value="transit"> transit
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td><label >regime</label></td>
                <td><input id="regime" name="regime" type="text"> <input type="button" value="Add"></td>
            </tr>
            <tr>
                <td><label for="">libelé tarifaire</label></td>
                <td><input id="libele" name="libele" type="text">  <input type="button" value="Add"></td>
            </tr>
            
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>