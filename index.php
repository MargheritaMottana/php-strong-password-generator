<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container py-5 text-center">
        <h1 class="mb-4">Genera la tua password</h1>

        <form action="" method="GET">

            <div class="mb-3">
                <label for="inputNumber" class="form-label fs-4">Scegli la lunghezza della tua password</label>

                <input class="form-control" id="inputNumber" 
                placeholder="Scrivi un numero da 8 a 16"
                type="number"  
                required 
                min=8 
                max=16
                name="pwLength">

            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </main>

    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>