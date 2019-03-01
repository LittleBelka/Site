<?php 
  include 'changeLanguage.php';

  if (isset($_COOKIE['language']) && ($_COOKIE['language'] == "ru")) {
    include 'rus.php';
  } else {
    include 'eng.php';
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanobio Group</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" charset="utf-8" /> -->
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
  </head>
<body>
  <header class="header header-extra-restrictions">
    <div class="header-menu">
        <div class="logo-and-menu">
          <div class="header-logo">
            <a href="index.php">Nanobio Group</a>
          </div>
          <nav class="menu">
            <input type="checkbox" id="burger-check" class="hide"/>
            <label class="burger" for="burger-check">Show menu</label>
            <ul class="menu-list">
              <li><a class="submenu-link" href="research.php"><?php echo $research; ?></a>
                <ul class="submenu">
                  <li><a href="">Project_1</a></li>
                  <li><a href="">Project_2</a></li>
                  <li><a href="">Project_3</a></li>
                </ul>
              </li>
              <li>
                <a href="publications.php"><?php echo $publications; ?></a>
              </li>
              <li>
                <a href="members.php"><?php echo $members; ?></a>
              </li>
              <li>
                <a href="othes.php"><?php echo $othes; ?></a>
              </li>
              <li>
                <a id="contacts" href="contacts.php"><?php echo $contacts; ?></a>
              </li>
              <li class="language">
                <a href="changeLanguage.php?language=<?php echo $language;?>&page=<?php echo $_SERVER['REQUEST_URI'];?>" ><?php echo $language; ?></a>
              </li>
            </ul>
          </nav>
        </div>
    </div>
    <div class="container" class="main-info-background">
      <div class="main-info">
        <h1 class="new-opinion">Contacts</h1>
      </div>
    </div>
  </header>
  <main>
    <!-- <div class="contacts"> -->
      <div class="container contacts">
        <div class="map">
        </div>
        <div class="different-contacts">
          <section>
            <p class="contact-name">Telephone:</p>
            <p class="contact-path">+7(812)xxx-xx-xx</p>
          </section>
          <section class="main-adres">
            <p class="contact-name">Addres:</p>
            <p class="contact-path-main">..., St.Petersburg, Russia</p>
          </section>
          <section>
            <p class="contact-name">Email:</p>
            <p class="contact-path">example.com</p>
          </section>
        </div>
      </div>
    <!-- </div> -->
    
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>