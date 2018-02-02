<?php

  include("function/conexion.php");

?>
<!doctype html>
<html lang="en">
  <?php Include("function/header.php"); ?>

  <body>
    <?php Include("function/menu.php"); ?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
       <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>

    </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>