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
        <h1 class="new-opinion"><?php echo $publications; ?></h1>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="publication">
        <p>Nikolaev, D.M., Panov, M.S., Shtyrov, A.A., Boitsov, V.M., Vyazmin, S.Y., Chakchir, O.B., Yakovlev, I.P. and Ryazantsev, M.N., 2019. Perspective Tools for Optogenetics and Photopharmacology: From Design to Implementation. In <i>Progress in Photon Science</i> (pp. 139-172).</p>
      </div>
      <div class="publication">
        <p>Filatov, A.S., Knyazev, N.A., Shmakov, S.V., Bogdanov, A.A., Ryazantsev, M.N., Shtyrov, A.A., Starova, G.L., Molchanov, A.P., Larina, A.G., Boitsov, V.M. and Stepakov, A.V., 2018. Concise Synthesis of Tryptanthrin Spiro Analogues with In Vitro Antitumor Activity Based on One-Pot, Three-Component 1, 3-Dipolar Cycloaddition of Azomethine Ylides to Сyclopropenes. <i>Synthesis</i>.</p>
      </div>
     <div class="publication">
        <p>Smikhovskaia, A.V., Panov, M.S., Tumkin, I.I., Khairullina, E.M., Ermakov, S.S., Balova, I.A., Ryazantsev, M.N. and Kochemirovsky, V.A., 2018. In situ laser-induced codeposition of copper and different metals for fabrication of microcomposite sensor-active materials. <i>Analytica Chimica Acta</i>.</p>
      </div>
      <div class="publication">
        <p>Nikolaev, D.M., Shtyrov, A.A., Panov, M.S., Jamal, A., Chakchir, O.B., Kochemirovsky, V.A., Olivucci, M. and Ryazantsev, M.N., 2018. A Comparative Study of Modern Homology Modeling Algorithms for Rhodopsin Structure Prediction. <i>ACS omega, 3</i>(7), pp.7555-7566.</p>
      </div>
      <div class="publication">  
        Logunov, L.S., Panov, M.S., Myund, L.A., Tumkin, I.I., Khairullina, E.M., Ryazantsev, M.N., Balova, I.A. and Kochemirovsky, V.A., 2018. Influence of the ligand nature on the in situ laser-induced synthesis of the electrocatalytically active copper microstructures. <i>Arabian journal of chemistry, 11</i>(5), pp.624-634.
      </div>
      <div class="publication">  
        Rotov, A.Y., Astakhova, L.A., Sitnikova, V.S., Evdokimov, A.A., Boitsov, V.M., Dubina, M.V., Ryazantsev, M.N. and Firsov, M.L., 2018. New Experimental Models of Retinal Degeneration for Screening Molecular Photochromic Ion Channel Blockers. <i>Acta naturae, 10</i>(1), p.75 (IF 2.00).
      </div>
      <div class="publication">  
        Filatov, A.S., Knyazev, N.A., Ryazantsev, M.N., Suslonov, V.V., Larina, A.G., Molchanov, A.P., Kostikov, R.R., Boitsov, V.M. and Stepakov, A.V., 2018. A highly diastereoselective one-pot three-component 1, 3-dipolar cycloaddition of cyclopropenes with azomethine ylides generated from 11 H-indeno [1, 2-b]-quinoxalin-11-ones. <i>Organic Chemistry Frontiers, 5</i>(4), pp.595-605.
      </div>
      <div class="publication">  
        Panov, M.S., Vereshchagina, O.A., Ermakov, S.S., Tumkin, I.I., Khairullina, E.M., Skripkin, M.Y., Mereshchenko, A.S., Ryazantsev, M.N. and Kochemirovsky, V.A., 2017. Non-enzymatic sensors based on in situ laser-induced synthesis of copper-gold and gold nano-sized microstructures. <i>Talanta, 167</i>, pp.201-207.
      </div>
      <div class="publication">  
        Nikolaev, D.M., Emelyanov, A., Boitsov, V.M., Panov, M.S. and Ryazantsev, M.N., 2017. A voltage-dependent fluorescent indicator for optogenetic applications, archaerhodopsin-3: Structure and optical properties from in silico modeling. <i>F1000Research, 6</i>.
      </div>
      <div class="publication">  
        Ledovskaya, M.S., Molchanov, A.P., Kostikov, R.R., Panikorovsky, T.L., Gurzhiy, V.V., Ryazantsev, M.N., Boitsov, V.M. and Stepakov, A.V., 2016. Anthracene-fused isoxazolopyrrolo [2, 1-a] isoquinolines via an endocyclic N-acyliminium ion cyclization: a joint experimental and theoretical study. <i>Tetrahedron, 72</i>(32), pp.4827-4834.
      </div>
      <div class="publication">  
        Ryazantsev, M.N., Jamal, A., Maeda, S. and Morokuma, K., 2015. Global investigation of potential energy surfaces for the pyrolysis of C 1–C 3 hydrocarbons: toward the development of detailed kinetic models from first principles. <i>Physical Chemistry Chemical Physics, 17</i>(41), pp.27789-27805.
      </div>
      <div class="publication">  
        Muzangwa, L.G., Yang, T., Parker, D.S., Kaiser, R.I., Mebel, A.M., Jamal, A., Ryazantsev, M. and Morokuma, K., 2015. A crossed molecular beam and ab initio study on the formation of 5-and 6-methyl-1, 4-dihydronaphthalene (C11H12) via the reaction of meta-tolyl (C7H7) with 1, 3-butadiene (C4H6). <i>Physical Chemistry Chemical Physics, 17</i>(12), pp.7699-7706.
      </div>
      <div class="publication">  
        Parker, D.S., Dangi, B.B., Kaiser, R.I., Jamal, A., Ryazantsev, M. and Morokuma, K., 2014. Formation of 6-Methyl-1, 4-dihydronaphthalene in the Reaction of the p-Tolyl Radical with 1, 3-Butadiene under Single-Collision Conditions. <i>The Journal of Physical Chemistry A, 118</i>(51), pp.12111-12119.
      </div>
      <div class="publication">  
        Parker, D.S., Dangi, B.B., Kaiser, R.I., Jamal, A., Ryazantsev, M.N., Morokuma, K., Korte, A. and Sander, W., 2014. An experimental and theoretical study on the formation of 2-methylnaphthalene (C11H10/C11H3D7) in the reactions of the para-tolyl (C7H7) and para-tolyl-d7 (C7D7) with vinylacetylene (C4H4). <i>The Journal of Physical Chemistry A, 118</i>(15), pp.2709-2718.
      </div>
      <div class="publication">  
        Panov, M.S., Voskresenska, V.D., Ryazantsev, M.N., Tarnovsky, A.N. and Wilson, R.M., 2013. 5-Azido-2-aminopyridine, a New Nitrene/Nitrenium Ion Photoaffinity Labeling Agent That Exhibits Reversible Intersystem Crossing between Singlet and Triplet Nitrenes. <i>Journal of the American Chemical Society, 135</i>(51), pp.19167-19179.
      </div>
      <div class="publication">  
        Ryazantsev, M.N., Altun, A. and Morokuma, K., 2012. Color tuning in rhodopsins: the origin of the spectral shift between the chloride-bound and anion-free forms of halorhodopsin. <i>Journal of the American Chemical Society, 134</i>(12), pp.5520-5523 (IF 14.357).
      </div>
      <div class="publication">  
        Schapiro, I., Ryazantsev, M.N., Frutos, L.M., Ferré, N., Lindh, R. and Olivucci, M., 2011. The ultrafast photoisomerizations of rhodopsin and bathorhodopsin are modulated by bond length alternation and HOOP driven electronic effects. <i>Journal of the American Chemical Society, 133</i>(10), pp.3354-3364 (IF 14.357).
      </div>
      <div class="publication">  
        Zheldakov, I.L., N. Ryazantsev, M. and Tarnovsky, A.N., 2011. Wavepacket motion via a conical intersection in the photochemistry of aqueous transition-metal dianions. <i>The Journal of Physical Chemistry Letters, 2</i>(13), pp.1540-1545.
      </div>
      <div class="publication">  
        Melloni, A., Rossi Paccani, R., Donati, D., Zanirato, V., Sinicropi, A., Parisi, M.L., Martin, E., Ryazantsev, M., Ding, W.J., Frutos, L.M. and Basosi, R., 2010. Modeling, preparation, and characterization of a dipole moment switch driven by Z/E photoisomerization. <i>Journal of the American Chemical Society, 132</i>(27), pp.9310-9319.
      </div>
      <div class="publication">  
        Schapiro, I., Ryazantsev, M.N., Ding, W.J., Huntress, M.M., Melaccio, F., Andruniow, T. and Olivucci, M., 2010. Computational photobiology and beyond. <i>Australian journal of chemistry, 63</i>(3), pp.413-429.
      </div>
      <div class="publication">  
        El-Khoury, P.Z., Tarnovsky, A.N., Schapiro, I., Ryazantsev, M.N. and Olivucci, M., 2009. Structure of the Photochemical Reaction Path Populated via Promotion of CF2I2 into Its First Excited State. <i>The Journal of Physical Chemistry A, 113</i>(40), pp.10767-10771.
      </div>
      <div class="publication">  
        Sumita, M., Ryazantsev, M.N. and Saito, K., 2009. Acceleration of the Z to E photoisomerization of penta-2, 4-dieniminium by hydrogen out-of-plane motion: theoretical study on a model system of retinal protonated Schiff base. <i>Physical Chemistry Chemical Physics, 11</i>(30), pp.6406-6414.
      </div>
      <div class="publication">  
        Sinicropi, A., Martin, E., Ryazantsev, M., Helbing, J., Briand, J., Sharma, D., Léonard, J., Haacke, S., Cannizzo, A., Chergui, M. and Zanirato, V., 2008. An artificial molecular switch that mimics the visual pigment and completes its photocycle in picoseconds. <i>Proceedings of the National Academy of Sciences</i>, pp.pnas-0802376105 (IF 9.661).
      </div>
    </div>
    
  </main>
  <footer class="main-footer">
    2019 Nanobio Group
  </footer>
</body>
</html>