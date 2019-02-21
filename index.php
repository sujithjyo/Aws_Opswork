<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TicTac</title>
    <link rel="stylesheet" href="tic_tac_toe.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron" align="center">
        <h1>Welcome to SUJITH Tic Tac Toe!</h1>
        <p>Your PHP application is now running on the host &ldquo;<?php echo gethostname(); ?>&rdquo; in your own dedicated environment in the AWS&nbsp;Cloud.</p>
        <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
        <button id="b" type="button" class="btn btn-primary btn-lg">Restart!</button>
      </div>
      <table align="center">
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="tic_tac_toe.js">
    </script>
  </body>
</html>
