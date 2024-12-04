<nav>
  <a class="logo" href=""><img class="logo" src="images/logo.png" /></a>

  <div class="site-name">
    <a href="index.php"><b>CUTIES | </b>BSIT 3-1</a>
  </div>

  <div class="links">
    <a data-active="index" href="index.php">Home</a>
    <a data-active="account" href="account.php">Account</a>
    <a data-active="gallery" href="gallery.php">Gallery</a>
    <a data-active="about" href="about.php">About</a>
    <a data-active="dashboard" href="dashboard.php">Dashboard</a>
    <a data-active="bulletin" href="bulletin.php">Bulletin</a>
  </div>

  <!--<button id="SignIn-button"><a data-active="logIn" href="logIn.php">Log In</a></button>
  <button id="SignIn-button"><a data-active="logout" href="logout.php">Log Out</a></button>-->

  <!-- Conditionally display the Log In or Log Out button --> 
  <?php if (isset($_SESSION['user_id'])): ?>
      <button id="SignIn-button">
        <a data-active="logout" href="logout.php">Log Out</a>
      </button>
    <?php else: ?>
      <button id="SignIn-button">
        <a data-active="logIn" href="logIn.php">Log In</a>

      </button>
  <?php endif; ?>

  <!-- Sidebar toggle button for tablets/mobile -->
  <button class="menu-toggle" id="menu-toggle">☰</button>

  <!-- Sidebar Menu -->
  <div class="sidebar" id="sidebar">
    <a href="index.php">Home</a>
    <a data-active="account" href="account.php">Account</a>
    <a href="gallery.php">Gallery</a>
    <a href="about.php">About</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="bulletin.php">Bulletin</a>
    <a href="logIn.php">Log In</a>

   
       <!-- Conditionally display the Log In or Log Out button inside the sidebar -->
    <?php if (isset($_SESSION['user_id'])): ?>
      <a data-active="logout" href="logout.php">Log Out</a>
    <?php else: ?>
      <a data-active="logIn" href="logIn.php">Log In</a>
    <?php endif; ?>
        
  </div>
</nav>

<script src="./javascript/script.js"></script>