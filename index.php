<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <main class="l-main p-contents">
    <section class="p-contents__concept">
      <h3>CONCEPT<span></span></h3>
      <p>“働きたくなる空間”をデザインすることで<br>人々を幸せにする。</p>
      <div class="p-contents__concept__flex">
        <p>私たちは、オフィスに特化した空間デザイン専門としております。その理由は、「働きたくなる空間で仕事ができれば多くの人を幸せにできるのではないか」と考えるためです。そんな想いの株式会社Cresta Designだからこそできる空間デザインを提供させていただきます。</p>
        <img src="<?php echo esc_url(get_template_directory_uri(). '/img/concept-image@2x.jpg'); ?>" alt="">
      </div>
      <span class="p-wrap__foot p-wrap__foot--concept">Our Concept</span>
    </section>

    <section class="p-contents__works">
      <h3>Works<span></span></h3>
      <div class="p-wrap__card">
        <div class="p-wrap__card__single--works">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-img01@2x.jpg' ); ?>" alt="">
          <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
        </div>
        <div class="p-wrap__card__single--works">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-img02@2x.jpg' ); ?>" alt="">
          <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
        </div>
        <div class="p-wrap__card__single--works">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-img03@2x.jpg' ); ?>" alt="">
          <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
        </div>
      </div>
      <div class="c-button">
        <button class="c-button--yellow"><a href="#">View more</a></button>
      </div>
      <span class="p-wrap__foot p-wrap__foot--works">Our Works</span>
    </section>

    <section class="p-contents__service">
      <h3>Service<span></span></h3>
      <div class="p-wrap__card p-wrap__card--w100pc">
        <div class="p-wrap__card__single--service">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/service-img01@2x.jpg' ); ?>" alt="">
          <p>Hearing</p>
        </div>
        <div class="p-wrap__card__single--service">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/service-img02@2x.jpg' ); ?>" alt="">
          <p>Planning</p>
        </div>
        <div class="p-wrap__card__single--service">
          <img src="<?php echo esc_url( get_template_directory_uri(). '/img/service-img03@2x.jpg' ); ?>" alt="">
          <p>Direction</p>
        </div>
      </div>
      <span class="p-wrap__foot p-wrap__foot--service">Our Service</span>
    </section>

    <section class="p-contents__contact">
      <h3>Contact<span></span></h3>
      <p>お気軽にご相談ください。</p>
      <div class="c-button">
        <button class="c-button--yellow"><a href="./contact.html">Contact</a></button>
      </div>
      <span class="p-wrap__foot p-wrap__foot--contact">Contact us</span>
    </section>
  </main>

  <footer class="l-footer">
    <small>
      <p>©︎cresta.design all rights reserved</p>
    </small>
  </footer>

  <?php wp_footer(  ); ?>
</body>
</html>