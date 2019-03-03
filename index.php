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
    <title></title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" charset="utf-8" /> -->
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
  </head>
<body>
  <header class="header">
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
  	    <h1 class="new-opinion">Laboratory of<br> Experimental and Theoretical NanoBiotechnologies and Chemical Biology</h1>	
  	  </div>
    </div>
    <!-- <div class="circle-links-block">
      <a href="">Link_1</a>
      <a href="">Link_2</a>
    </div> -->
  </header>
  <main>
  	<div class="container">
  	  <h1 class="new-info">Latest News</h1>
      <div class="one-news">
        <p class="name-of-paragraph">Conference abstract published in the Biophysical Journal</p>
        <p>Struts, A.V., Ryazantsev, M.N., Xu, X., Molugu, T.R., Perera, S.M., Guruge, C., Faylough, S., Nascimento, C., Nesnas, N. and Brown, M.F., 2019. Retinal Flipping During Rhodopsin Activation Revealed by Solid State 2H NMR and QM/MM Simulations. Biophysical Journal, 116(3), p.204a.</p>
        <p><b>Dmitrii Nikolaev</b> has visited the group of prof. Massimo Olivucci in Siena University, and started new collaborative projects in computational photochemistry.</p>
        <div class="align-center">
          <img class="img-info" src="image/news/Conf_published_in _Biophysical_Journal.jpg" alt="Conference abstract published in the Biophysical Journal">
        </div>
      </div>
      <div class="one-news">
        <p class="name-of-paragraph">New review chapter has been published.</p>
        <p>Nikolaev, D.M., Panov, M.S., Shtyrov, A.A., Boitsov, V.M., Vyazmin, S.Y., Chakchir, O.B., Yakovlev, I.P. and Ryazantsev, M.N., 2019. Perspective Tools for Optogenetics and Photopharmacology: From Design to Implementation. In Progress in Photon Science (pp. 139-172). Springer, Cham.</p>
      </div>
      <div class="one-news">  
        <p class="name-of-paragraph">Dmitrii Nikolaev has won the HPC grant for performing research on CINECA supercomputer complex.</p>
        <a href="http://www.hpc-europa.eu/">www.hpc-europa.eu</a>
      </div>
      <div class="one-news">  
        <p><b>Mikhail N. Ryazantsev</b> gave a talk at the «18th International Conference on Retinal Proteins» which was held on 24-29 September 2018 in Hockley Valley Resort, Ontario, Canada.</p> 
      </div>
      <div class="one-news">  
        <p class="name-of-paragraph">New article</p>
        <p>Nikolaev, D.M., Shtyrov, A.A., Panov, M.S., Jamal, A., Chakchir, O.B., Kochemirovsky, V.A., Olivucci, M. and Ryazantsev, M.N., 2018. A Comparative Study of Modern Homology Modeling Algorithms for Rhodopsin Structure Prediction. ACS omega, 3(7), pp.7555-7566.</p>
      </div>  
      <div class="one-news">  
        <p><b>Mikhail N. Ryazantsev</b> gave a talk at the «The Third STEPS Symposium on Photon Science» which was held on 11-12 March 2018 in Moscow, Russia.</p>
      </div>  
    </div>
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>