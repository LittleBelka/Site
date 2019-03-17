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
                  <li><a href="research-biosensors_and_tools_control_bioprocesses.php">Development of biosensors and tools that control biochemical processes</a></li>
                  <li><a href="research-study_and_control_complex_chem_systems.php">Study and control of complex chemical systems</a></li>
                  <li><a href="research-applying_quantum_chemistry_stud_chem_reactions.php">Applying quantum chemistry for studying chemical reactions</a></li>
                  <li><a href="research-photoactivated_molecular_tools.php">Photoactivated molecular tools</a></li>
                  <li><a href="research-enzymatic_systems.php">Enzymatic systems</a></li>
                  <li><a href="research-testing_anticancer_drugs.php">Testing anticancer drugs</a></li>
                </ul>
              </li>
              <li>
                <a href="publications.php"><?php echo $publications; ?></a>
              </li>
              <li>
                <a href="members.php"><?php echo $members; ?></a>
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
        <h1 class="new-opinion"><?php echo $research; ?></h1>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <ul class="list-research">
        <li>
          <a href="research-biosensors_and_tools_control_bioprocesses.php">Development of biosensors and tools that control biochemical processes</a>
          <div class="align-center">
            <img class="img-small" src="image/research/biosensors_and_tools_control_bioprocesses_1.jpg" alt="Development of biosensors and tools that control biochemical processes">
          </div>
        </li>
        <li>
          <a href="research-study_and_control_complex_chem_systems.php">Study and control of complex chemical systems</a>
          <div class="align-center">
            <img class="img-small" src="image/research/research-study_and_control_complex_chem_systems_ReaNet_1.png" alt="Study and control of complex chemical systems">
          </div>
        </li>
        <li>
          <a href="research-applying_quantum_chemistry_stud_chem_reactions.php">Applying quantum chemistry for studying chemical reactions</a>
          <div class="align-center">
            <img class="img-small" src="image/research/applying_quantum_chemistry_stud_chem_reactions_2.png" alt="Applying quantum chemistry for studying chemical reactions">
          </div>
        </li>
        <li>
          <a href="research-photoactivated_molecular_tools.php">Photoactivated molecular tools</a>
          <div class="align-center">
            <img class="img-small" src="image/research/photoactivated_molecular_tools_2.png" alt="Photoactivated molecular tools">
          </div>
        </li>
        <li>
          <a href="research-enzymatic_systems.php">Enzymatic systems</a>
          <div class="align-center">
            <img class="img-small" src="image/research/enzymatic_systems.jpg" alt="Enzymatic systems">
          </div>
        </li>
        <li>
          <a href="research-testing_anticancer_drugs.php">Testing anticancer drugs</a>
          <div class="align-center">
            <img class="img-small" src="image/research/testing_anticancer_drugs.jpg" alt="Testing anticancer drugs">
          </div>
        </li>
      </ul>
    </div>
    
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>