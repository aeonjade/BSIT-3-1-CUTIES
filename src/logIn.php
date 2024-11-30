<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shorthand icon" href="images/VITS LOGO.png" />
  <title>Login - VITS</title>
  <link rel="stylesheet" href="css/style.css" />

</head>


<body>
  <?php include "includes/nav.php" ?>

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <section class="vh-100" id="logIn-header">
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <form>
      <h3>Login Here Cutie</h3>

      <label for="username">Username</label>
      <input type="text" placeholder="Email or Phone" id="username" />

      <label for="password">Password</label>
      <input type="password" placeholder="Password" id="password" />

      <button>Log In</button>
    </form>
  </section>
  </main>
  <?php include "includes/footer.php" ?>
</body>

</html>