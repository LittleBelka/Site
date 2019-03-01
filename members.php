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
        <h1 class="new-opinion">Members</h1>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <h1 class="new-info">Something</h1>
        <p>This is text about cell:</p><br>
        <p>The cell (from Latin cella, meaning "small room") is the basic structural, functional, and biological unit of all known living organisms. A cell is the smallest unit of life. Cells are often called the "building blocks of life". The study of cells is called cell biology.

Cells consist of cytoplasm enclosed within a membrane, which contains many biomolecules such as proteins and nucleic acids. Organisms can be classified as unicellular (consisting of a single cell; including bacteria) or multicellular (including plants and animals). While the number of cells in plants and animals varies from species to species, humans contain more than 10 trillion (1013) cells. Most plant and animal cells are visible only under a microscope, with dimensions between 1 and 100 micrometres.

Cells were discovered by Robert Hooke in 1665, who named them for their resemblance to cells inhabited by Christian monks in a monastery. Cell theory, first developed in 1839 by Matthias Jakob Schleiden and Theodor Schwann, states that all organisms are composed of one or more cells, that cells are the fundamental unit of structure and function in all living organisms, and that all cells come from pre-existing cells. Cells emerged on Earth at least 3.5 billion years ago.</p> 
    </div>
    
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>