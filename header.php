<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header">
    <div class="l-header__bar">
      <div class="l-header__left">
        <h1>Cresta Design</h1>
      </div>
      <div class="l-header__right">
        <div class="p-hamburger-menu">
          <span class="p-hamburger-menu__line"></span>
          <span class="p-hamburger-menu__line"></span>
          <span class="p-hamburger-menu__line"></span>
        </div>
        <nav class="p-global-menu">
          <ul>
            <li><a href="#">Concept</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Works</a></li>
            <li><a href="./contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="l-header__text">
      <h2>Design for Smile.</h2>
      <p>快適なオフィスを<br>デザインする</p>
    </div>
  </header>