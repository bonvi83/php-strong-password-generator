<?php
require_once "./functions.php";

// creo una variabile che controlla se è stato passato un parametro chiamato "lunghezza" tramite il metodo GET,
// se il parametro passa, viene convertito in un numero intero grazie alla funzione (int)$_GET['lunghezza']. 
// se il parametro non passa o non è valido, viene impostato il valore predefinito di 0.
$lunghezza_password = isset($_GET['lunghezza']) ? (int)$_GET['lunghezza'] : 0;

// genero una password se $lunghezza_password è maggiore di 0, chiama la funzione genera_password() passando la lunghezza come argomento 
// e assegna il risultato alla variabile $password_generata. 
// altrimenti, se la lunghezza è 0 o inferiore, viene assegnata una stringa vuota a $password_generata.
$password_generata = ($lunghezza_password > 0) ? genera_password($lunghezza_password) : '';



// Funzione per generare una password
function genera_password($lunghezza) {

  // variabile di tutti i caratteri per generare una password
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Password Generator</title>
  </head>

  <body>
    <div class="container">
      <h2 class="fw-bold">Generatore di Password Sicure</h2>
        <form method="GET">
            <label for="lunghezza" class="fw-bold">Lunghezza Password (da 1 a 10 caratteri):</label>
            <input type="number" id="lunghezza" name="lunghezza" min="1" max="10" required
            <?php echo $lunghezza_password ? "number" : "" ?>>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
        <div class="fw-bold">La tua Password è:  <?php echo $password_generata; ?></div>
    </div>
  </body>
</html>
