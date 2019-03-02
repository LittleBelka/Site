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
        <h1 class="new-opinion">Photoactivated molecular tools</h1>
      </div>
    </div>
  </header>
  <main>
  	<div class="container research-text">
  	  <p>One of the modern trends in pharmacology is the development of photoactivated drugs. These drugs are constructed from two components: a physiologically active pharmacore and the molecular photoactivated molecular switch that is either attached to the single pharmacore moiety, either connects two distinct parts of the pharmacore.</p> 
      <p>Upon light absorption, the photoswitch converts from one stable form to another stable form (e.g. from cis to trans), which leads to the activation of the drug.</p> 
      <p>We perform both experimental development of protein-based biosensors, and the computational design of optimized/modified biosensors.</p>
      <h3>1. Photoactivated blockers of ion channels.</h3>
      <p>For example, photoswitch can block K/Na ion channel in one form, and allow free flow of ions in another form.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/photoactivated_molecular_tools_1.png" alt="Photoactivated molecular tools"> 
      </div>
      <h3>2. Photoactivated drugs.</h3>
      <div class="align-center">
        <img class="img-info" src="image/research/photoactivated_molecular_tools_2.png" alt="Photoactivated molecular tools">
      </div> 
      <p>Development of drugs that can be turned on/off with light can be used for target activation of the drug at the site of interest.</p>
      <p>For example, the negative side effects of anti-cancer drugs are related with their physiological action not only at the target site (tumor) but in other parts of the organism. However, the development of photoactivated anti-cancer drugs can drastically decrease side effects, because these drugs will be activated only at the target tumor.</p>
    </div>
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>