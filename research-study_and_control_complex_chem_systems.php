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
        <h1 class="new-opinion">Study and control of complex chemical systems</h1>
      </div>
    </div>
  </header>
  <main>
  	<div class="container research-text">
      <h3 class="margin-top">1. ReaNet</h3>
      <div class="align-center">
        <img class="img-info" src="image/research/ReaNet.jpg" alt="Study and control of complex chemical systems">
      </div>
  	  <p>ReaNet is the program package for the investigation of chemical systems and chemical reactions that is developed by our group.</p> 
      <p>Up to date, the program includes the following modules:</p> 
      <h4 class="name-of-module">1. ADDF</h4>
      <p>Модуль ADDF осуществляет автоматический поиск путей химических реакций для молекулы. Принцип работы описан в статье [Maeda, S.; Ohno, K.; Morokuma, K. Physical Chemistry Chemical Physics 2013, 15, 3683–3701] и основан на следовании искажений поверхности потенциальной энергии от гармонического потенциала. Все, что необходимо данному модулю -- стартовая структура молекулы, для которой будет строиться карта путей химических реакций.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_ReaNet_1.png" alt="Study and control of complex chemical systems">
      </div>
      <h4 class="name-of-module">2. d-ADDF</h4>
      <p>Данный модуль позволяет найти путь между двумя равновесными структурами и все переходные состояния и равновесные структуры между ними.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_ReanNet_2.png" alt="Study and control of complex chemical systems">
      </div>
      <h4 class="name-of-module">3. AFIR</h4>
      <p>Данный модуль позволяет построить путь бимолекулярной реакции.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_ReanNet_3.png" alt="Study and control of complex chemical systems">
      </div>
      <h4 class="name-of-module">4. Constraints</h4>
      <p>Этот модуль позволяет осуществлять оптимизацию с геометрическими и энергетическими ограничениями.</p>
      <h4 class="name-of-module">5. ADDF with constraints</h4>
      <p>Автоматический поиск путей химических реакций с геометрическими и энергетическими ограничениями.</p>
      <h4 class="name-of-module">6. EQ/TS optimizer</h4>
      <p>Модуль осуществляет оптимизацию структуры до равновесного или переходного состояния с помощью алгоритма RFO/TRM.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_ReanNet_4.png" alt="Study and control of complex chemical systems">
      </div>
      
      <h3>2. OWL: applying machine-learning and quantum chemicstry for the development of a novel Molecular Mechanics force field for cofactors.</h3>
      <h4>MM approach</h4>
      <p>Molecular dynamics (MD) is a general computational approach for studying protein dynamics and for conformational sampling. In MM MD calculations the potential energy of the molecular system is approximated by a specific function U, called a force field. Then the forces that act on the atoms of a molecular system can be described as</p>
      <div class="align-center">
        <img class="img-extra-small" src="image/research/research-study_and_control_complex_chem_systems_6.jpg" alt="Study and control of complex chemical systems">
      </div>
      <p>where <b>r<sub>i</sub></b> represents the Cartesian coordinates of the target atom, U is an potential energy function.</p>
      <div class="align-center">
        <img class="img-small" src="image/research/research-study_and_control_complex_chem_systems_1.jpg" alt="Study and control of complex chemical systems">
      </div>
      <h4>MM force field</h4> 
      <p>A force field describes the interactions between bonded atoms (pairs, triples, tetrads), and non-bonded atoms (Coulomb and van der Waals interactions)</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_2.png" alt="Study and control of complex chemical systems">
      </div>
      <p>To set a force field, i.e. the potential energy function, one has to set its functional form and its parameters. For example, a standard form of a classic force field is the following one:</p>
      <div class="align-center">
        <img class="img-big" src="image/research/research-study_and_control_complex_chem_systems_3.png" alt="Study and control of complex chemical systems">
      </div>
      <ul>
        <li>Here, ki, r0, theta_0, etc. are the parameters that has to be defined.</li>
        <li>van der Waals parameters (sigma, q, epsilon) are defined for each atom type;</li>
        <li>the parameters for bonded interactions are defined for each pairs, triples and tetrads of atom types respectively.</li>
      </ul>
      <p>To paramterize a molecule in a certain force field means to define the atom types of each atom of the molecule.</p>
      <h4>Why OWL?</h4>
      <p>While for standard amino acids and other commonly used molecules the parameters are already very good, for the rarely-used cofactors, such as retinal and its derivatives, the parameters are far from perfection. In this case one has to run QM/MM MD treating a cofactor at the quantum mechanics level to avoid mistakes. Another approach here is to develop accurate parameters.</p>
      <p>To solve this problem we apply machine learning techniques that derive new parameters by comparion of data sets that were obtained for the target molecule using quantum chemical calculations and obtained with a classical approach in a force field under development.</p>

      <h3>3. Applying modern methodologies of computational biophysics for studying optical and thermodynamic properties of rhodopsin proteins.</h3>
      <p>1. We investigate the molecular mechanisms that define the optical properties of specific rhodopsin proteins and interprotein spectral shifts applying modern MM and QM/MM methodologies. Applying these methodologies for <i>visual rhodopsins</i>, we can reveal the molecular mechanisms of <b>adaptation</b>, considering the visual adaptation of animals to specific environment. Applying these methodologies for <i>microbial rhodospins</i>, we can develop rhodopsin mutants with the optimized <b>spectral properties</b>. Optimized for the specific application of interest. In this field we also perform the large-scale benchmark studies to define the best methodologies for computational studies and to define their limits.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_4.png" alt="Study and control of complex chemical systems">
      </div>
      <p>2. We develop and apply methodologies for the calculation of thermodynamic properties of rhodopspin proteins, e.g. the difference in Gibbs free energy between two rhodopsin conformers.</p>
      <p>3. We develop and apply computational methodologies for the investigation of photoactivated events in rhodopsin proteins.</p>
      <div class="align-center">
        <img class="img-info" src="image/research/research-study_and_control_complex_chem_systems_5.jpg" alt="Study and control of complex chemical systems">
      </div>
    </div>
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>