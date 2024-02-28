<?php

// creo una variabile che controlla se è stato passato un parametro chiamato "lunghezza" tramite il metodo GET,
// se il parametro passa, viene convertito in un numero intero grazie alla funzione (int)$_GET['lunghezza']. 
// se il parametro non passa o non è valido, viene impostato il valore predefinito di 0.
$lunghezza_password = isset($_GET['lunghezza']) ? (int)$_GET['lunghezza'] : 0;

// genero una password, se $lunghezza_password è maggiore di 0, chiama la funzione genera_password() passando la lunghezza come argomento 
// e assegna il risultato alla variabile $password_generata
// altrimenti, se la lunghezza è 0 o inferiore, viene assegnata una stringa vuota a $password_generata.
$password_generata = ($lunghezza_password > 0) ? genera_password($lunghezza_password) : '';



// creo una funzione per generare una password
function genera_password($lunghezza) {

// variabile di tutti i caratteri per poter generare una password
$caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';

// variabile che mi controlla la lunghezza della stringa
$lunghezza_caratteri = strlen($caratteri);

// inizializzo la variabile come una stringa vuota
$password = '';

// il ciclo for serve per iterare attraverso ogni posizione della password da creare, 
// ad ogni iterazione viene estratto un carattere dalla stringa tramite la funzione rand() con indice da 0 alla lunghezza della variabile caratteri
// il carattere viene estratto e concatenato alla password
for ($i = 0; $i < $lunghezza; $i++) {
    $password .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
}

// ora mi ritorna una password
return $password;
}

?>