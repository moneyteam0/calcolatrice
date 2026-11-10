<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcolatrice</h1>

    <form action="" method="get">
        <label for="a">a: </label>
        <input type="number" name="a"> <br><br>
        <label for="b">b: </label>    
        <input type="number" name="b"> <br><br>

        <fieldset>
            <legend>Operazione</legend>
            <input type="radio" name="op" id="s">
            <label for="somma">somma</label> <br>

            <input type="radio" name="op" id="d">
            <label for="differenza">differenza</label> <br>

            <input type="radio" name="op" id="p">
            <label for="prodotto">prodotto</label> <br>

            <input type="radio" name="op" id="q">
            <label for="quoziente">quoziente</label> <br>
        </fieldset> <br>

        <fieldset>
            <legend>Opizioni</legend>
            <input type="checkbox" name="options[]" id="abs" value="abs">
            <label for="abs">valore assoluto</label> <br>

            <input type="checkbox" name="options[]" id="quad" value="quad">
            <label for="quad">quadrato</label> <br>

            <input type="checkbox" name="options[]" id="arr" value="arr">
            <label for="arr"> arrotonda a 2 decimali</label> <br>
        </fieldset>
        <br>

        <input type="submit" value="Calcola">

    </form>
</body>
</html>