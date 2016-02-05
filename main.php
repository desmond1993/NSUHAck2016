<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Spartan Connect</title>
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>

     <nav id="menu" class="menu">
        <header class="menu-header">
          <span class="menu-header-title">Points: 850
          </span>
        </header>


      <section class="menu-section">
          <ul class="menu-section-list">
          <li><a href="#" target="_blank">View Card</a></li>
          <li><a href="#" target="_blank">Calendar</a></li>
          <li><a href="#" target="_blank">Spartan Merchants</a></li>
          <li><a href="#" target="_blank">Settings</a></li>
        </ul>
      </section>

    </nav>

    <main id="panel">
      <header>
        <button class="toggle-button"><img src="assets/menu.png"></button>
        <!-- <h2>Panel</h2> -->

        <!-- Include Webpage Here -->
        <?php
          include("id.php");
          ?>

      </header>
    </main>

    <script src="js/slideout.min.js"></script>
    <script src="js/slideout.js"></script>
    <script>
      var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
    </script>

  </body>
</html>