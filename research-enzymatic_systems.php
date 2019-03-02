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
      <div class="main-info-research">
        <h1 class="new-opinion">Enzymatic systems</h1>
      </div>
    </div>
  </header>
  <main>
  	<div class="container research-text">
  	  <p>Enzymes are the biological molecules that catalyze biochemical processes in biological cells.</p> 
      <p>These little chemical-reaction machines perform catalyzation very effectively, breaking glucose pieces, generating ammonia in microbial cells. They increase the rate of intracellular reactions in 10^3 - 10^8 times, much more efficiently than chemical enzymes.</p> 
      <p>For this reason a perspective approach is to apply these natural nanomachines for the purposes of modern technology and biotechnology. However, one cannot just extract an enzyme from the cell and put it in a reactor vessel. Natural enzymes have to be opimized for certain purposes and conditions. For optimization both computational and experimental approaches are applied.</p> 
      <p>During computations, we have to reveal the molecular mechanism of enzyme functioning, i.e. model the chemical reaction at the core of the target enzyme using quantum mechanics. By understanding the mechanisms of chemical reaction and how it is affected by the environment, we can develop strategies for the enzyme modification.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/enzymatic_systems.jpg" alt="Enzymatic systems"> 
      </div>
    </div>
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>