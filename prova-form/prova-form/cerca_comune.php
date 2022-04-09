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

    <header class="bg-secondary text-white p-4 mb-5">
        <h1 class="display-3">Form PHP</h1>
    </header>

    <main class="container mb-5">
        <form action="risultato_ricerca_comuni.php" method="get">

            <div class="mb-4">
                <label for="comune_cap" class="form-label">
                    Inserisci il nome del comune o il cap:
                </label>

                <input id="comune_cap" name="comune_cap" type="text" class="mt-1 form-control" placeholder="Comune o CAP">

                <button type="submit" class="mt-4 btn btn-warning">Cerca</button>
            </div>

        </form>
    </main>

</body>

</html>