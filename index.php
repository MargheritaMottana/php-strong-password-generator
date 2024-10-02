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

<?php

    // funzione per generare la password
    function createPw($len){

        // setto la password a 0 prima della composizione dei caratteri
        $pw= '';

        // mi salvo i caratteri che deve contenere la pasword
        // suddividendoli mi assicuro che la pw peschi da ogni variabile
        $lovercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*-+(){}[]~';

        // mi salvo i caratteri concatenati tutti assieme 
        $characters= $lovercase.$uppercase.$numbers.$symbols;

        // creo un ciclo per creare l'indice n volte (tante quante il numero passato dall'utente)
        for ($i=0; $i < $len; $i++) { 

            // creo un numero random che serva da indice per pescare un carattere casuale
            $index = rand(0, strlen($characters)-1);

            // salvo la nuova password, il "." serve per concatenare il vecchio valore al nuovo
            $pw .= $characters[$index];
        }

        // risultato è la password composta dai diversi caratteri
        return $pw;

    }

    // imposto la password a null, così da poter fare un if in pagina (se non è null, allora mostro)
    $password= null;

    // imposto a null il valore di length, in questo modo, quando non è ancora stato passato un numero, non mi dà errore
    $length = null;

    // controlo se mi viene passato (settato) il numero
    if (isset($_GET['pwLength'])) {

        // intval mi serve per avere "davvero" un numero (come parseInt)
        $length = intval($_GET['pwLength']);

        // considero il numero solo se entra in questo range >8 e <16
        if($length >= 8 && $length <= 16){

            $password = createPw($length);

        }
    }

?>

<body>

    <main class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-6">

                <h1 class="mb-4 text-primary-emphasis">Genera la tua password</h1>

                <hr class="mb-5">

                <form action="" method="GET">

                    <div class="mb-3">
                        <label for="inputNumber" class="form-label fs-5 mb-3 text-primary">Scegli la lunghezza della tua password</label>

                        <input class="form-control mb-4" id="inputNumber" 
                        placeholder="Scrivi un numero da 8 a 16"
                        type="number"  
                        required 
                        min="8" 
                        max="16"
                        name="pwLength">

                    </div>

                    <button type="submit" class="btn btn-outline-primary">Invia</button>

                </form>

                <!-- se la password è diversa da null, la mostro -->
                <?php
                    if ($password != null) {
                ?>
                    <hr class="mb-5">

                    <p class="fs-5 mb-3 text-primary">Ecco la tua password</p>

                    <h3 class="text-primary-emphasis">
                        <?php echo $password; ?>
                    </h3>
                <?php
                    }
                ?>

            </div>
        </div>
    </main>

    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>