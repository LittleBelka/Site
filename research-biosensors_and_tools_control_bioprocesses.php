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
        <h1 class="new-opinion">Development of biosensors and tools that control biochemical processes</h1>
      </div>
    </div>
  </header>
  <main>
  	<div class="container research-text">
  	  <p>We develop various biosensors for the measurement of various cell parameters, including cell electrical potential and the glucose concentrations inside the cell.</p> 
      <p>Primarily, we concentrated on the development of protein-based biosensors.</p> 
      <p>We perform both experimental development of protein-based biosensors, and the computational design of optimized/modified biosensors.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/biosensors_and_tools_control_bioprocesses_1.jpg" alt="Development of biosensors and tools that control biochemical processes"> 
      </div>
      <h3>Rhodopsin-based sensors of cell membrane potential</h3>
      <p>The electrical potential of cell membrane is one of the key physiological properties of the cell. By measuring resting cell membrane potential, we can define the state of the cell. Besides, monitoring the transients of electrical potential can be used for studying cell cycle and intercellular communication. For example, reseachers use protein-based sensors of cell membrane potential for the visualization of <b>neural network activity</b>.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/biosensors_and_tools_control_bioprocesses_2.jpg" alt="Development of biosensors and tools that control biochemical processes">
      </div> 
      <p>We develop tools for the visualization and measurement of cell membrane potential based on microbial rhodopsin <b>archaerhodopsin-3</b>. This protein demostrates potential-dependent fluorescence and its mutants have been already applied by the group of Prof. Adam Cohen in Harvard University.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/biosensors_and_tools_control_bioprocesses_3.png" alt="Development of biosensors and tools that control biochemical processes">
      </div>
    </div>
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>