<?php include 'PHPMailerSend.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/floating-labels.css" crossorigin="anonymous">

    <title>MailHog - PHP Example</title>
  </head>
  <body>
      <form class="form-signin">
        <div class="text-center mb-4">
          <img class="mb-4" src="https://user-images.githubusercontent.com/3491729/73139333-57fc8000-406d-11ea-880f-546889af8e05.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">MailHog - PHP Example</h1>
        </div>

        <div class="form-label-group">
          <p>An e-mail was sent with MailHog to MailHog, so go check it out on MailHog.</p>
        </div>

        <div class="form-label-group">
          <a class="btn btn-secondary btn-block" href="http://127.0.0.1:8025">Go to the MailHog Interface</a>
        </div>

        <p class="mt-5 mb-3 text-muted text-center">&copy; Les Enovateurs - <?php echo date('Y'); ?></p>
      </form>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>