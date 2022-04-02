<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form PHP</title>
</head>
<body>
<header class="bg-secondary p-3">
   <h1 class="display-3">Form in PHP</h1>
</header>    
<main class="container">
        <form action="risultato_ricerca_comune.php" method="get">

        <div class="mb-4">
            <label class="form-label">
                Quale comune vuoi cercare:
            </label>
            <input name="comune" type="text" class="form-control">
            <input name="colore" type="text" class="form-control">

            <button type="submit">Cerca</button>
        </div>

        </form>
</main>

</body>
</html>