<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Elizabeth Osunsanwo — Full-stack developer portfolio showcasing projects in React, PHP, Node.js, and more.">
  <title>Elizabeth Osunsanwo — Portfolio</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <?php if (isset($extra_css)) echo $extra_css; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="desktop">
    <ul>
      <li><a href="index.php"><h1>Elizabeth Osunsanwo</h1></a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="#project"> Projects</a></li>
      <li><a href="#skills"> Skills</a></li>
      <li><a href="contact.php"> Contact</a></li>
    </ul>
  </nav>

  <div class="nav-container">
    <h1>Elizabeth O</h1>
    <button id="mobileToggle">☰Menu</button>
    <nav id="mobile">
      <ul>
        <li><a href="#about">About Me</a></li>
        <li><a href="#project"> Projects</a></li>
        <li><a href="#skills"> Skills</a></li>
        <li><a href="contact.php"> Contact</a></li>
      </ul>
    </nav>
  </div>

