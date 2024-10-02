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

?>