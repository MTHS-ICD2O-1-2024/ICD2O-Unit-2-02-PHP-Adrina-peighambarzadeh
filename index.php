<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The math program, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina. peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The math program,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The math program, in PHP</span>
      </div>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/area_and_perimeter.png" alt="laptop image">
        </div>
        <br />
        <!-- basic text -->
        <div id="multiply-math">
          <p>The area is:
          <p>
        </div>
        <div id="perimeter math">
          <p>The perimeter is:
          <p>
        </div>
        <!-- Raised button with ripple -->
        <button class="mdl-button mdl-PHP-button mdl-button--raised mdl-PHP-ripple-effect mdl-button--accent"
          onclick="doMathClicked()" type="button">
          Do math
        </button>
      </main>
  </div>
</body>

</html>