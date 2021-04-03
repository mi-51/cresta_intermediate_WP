<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/style.css">
  <title>Cresta02 Contact</title>
</head>
<body>
  <header class="l-header--contact">
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
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="l-header__text--contact">
      <h2>Contact</h2>
      <span class="p-wrap__foot p-wrap__foot--contact p-wrap__foot--contactpage">Contact us</span>
    </div>
  </header>

  <main>
    <form class="p-contact-form">
      <p>お問い合わせ内容</p>
      <div class="p-contact-form__select">
        <label>
          <input type="checkbox"><p>資料請求</p>
        </label>
        <label>
          <input type="checkbox"><p>お電話でのご相談を希望</p>
        </label>
        <label>
          <input type="checkbox"><p>申し込み</p>
        </label>
      </div>
      <div class="p-contact-form__input">
        <label>担当者名</label>
        <input type="text">
        <label>電話番号</label>
        <input type="tel">
        <label>メールアドレス</label>
        <input type="email">
        <label>その他</label>
        <textarea></textarea>
      </div>
      <div class="c-button">
        <button class="c-button--yellow"><input type="submit" value="submit"></button>
      </div>
      </form>
  </main>

  <footer class="l-footer">
    <small>
      <p>©︎cresta.design all rights reserved</p>
    </small>   
  </footer>
      
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>