<?php
require_once "./functions.php";
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

    <!-- link my CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>Password Generator</title>
  </head>

  <body>
    <div class="container">
      <h2 class="fw-bold mb-3">Generatore di Password Sicure</h2>
        <form method="GET">
            <label for="lunghezza" class="fw-bold">Lunghezza Password (da 1 a 33 caratteri):</label>
            <input type="number" class="form-control mb-2" id="lunghezza" name="lunghezza" min="1" max="33" required 
            value="<?php echo $lunghezza_password; ?>">
            <!-- con value faccio in modo che il valore inserito, rimanga visibile -->
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
        <h4 class="fw-bold mt-3">La tua Password è:  <?php echo $password_generata; ?></h4>
    </div>
  </body>
</html>
