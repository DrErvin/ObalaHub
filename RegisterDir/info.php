<!DOCTYPE html>
<html>
<head>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viFewport" content="width=device-width, initial-scale=1.0">
  <title>Info</title>
  <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-school'></i>
        <div class="logo_name">ObalaHub</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
       <a href="index.php">
         <i class='bx bx-home' ></i>
         <span class="links_name">Početna stranica</span>
       </a>
       <span class="tooltip">Početna stranica</span>
     </li>
     <li>
      <li>
       <a href="account.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Korisnik</span>
       </a>
       <span class="tooltip">Korisnik</span>
     </li>
     <li>
       <a href="index-workshop.html">
         <i class='bx bx-food-menu' ></i>
         <span class="links_name">Workshop</span>
       </a>
       <span class="tooltip">Workshop</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Poruke</span>
       </a>
       <span class="tooltip">Poruke</span>
     </li>

     <li>
       <a href="index.php?logout='1'">
         <i class='bx bx-log-out' id="log_out"></i>
         <span class="links_name">Odjava</span>
       </a>
       <span class="tooltip">Odjava</span>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text" style="margin-left: 1200px;">Info</div>
    <h2>Podaci o školi</h2>
    <br>
    <h3>Rasporedi</h3>
    <br>
    <h3>III-2</h3>
    <?php
error_reporting(0);
count($raspored=array(
  array("Ponedjeljak",       " Utorak",           "Srijeda",                  "Četvrtak","  Petak"),
  array("           ",       "Odjeljenska",       "Francuski",                "  ",         "DSD"),
  array("DSD",               "Engleski   ",       "Psihologija",              " ",          "Njemački"),
  array("Geografija/Hemija", "Engleski",          "Bosanski",                 "Latinski", "Historija/Sociologija"),
  array("Geografija/Hemija", "Psihologija",       "Bosanski",                 "Engleski", "Latinski"),
  array("Demokratija",       "Sociologija/Fizika","Geografija/Hemija",        "Demokratija", "Sport"),
  array("Matematika",        "Historija/Sociologija", "Sport",                "Historija/Fizika", "Matematika"),
  array("Matematika",        "Biologija",       "Vjeronauka/Kultura religija","Sociologija/Fizika", "Bosanski"),
  array("Francuski","","Njemački","Sociologija/Biologija",""),
  array("","","","Biologija","")
  ));
  echo "<table class='center'>";
for($i=0; $i<8; $i++)
  {
      echo "<tr>";

  for($j=0; $j<5; $j++)
  {

    echo "<td>".$raspored[$i][$j]."</td>";
  }
    echo"</tr>";
  }

     echo"</table>";

?>
    <br>
    <h3>IV-4</h3>
<?php
error_reporting(0);
count($raspored=array(
  array("Ponedjeljak",         " Utorak","  Srijeda","  Četvrtak","  Petak"),
  array("Softver inžinjering", "               ","Web programiranje", "  ", " "),
  array("Softver inžinjering", "           ","Web programiranje", "       Filozofija","Filozofija"),
  array("Softver inžinjering", "Odjeljenska", "RMA", "      BHS", "       Matematika"),
  array("Matematika",          "Engleski",    "RMA", "      BHS", "       Engleski"),
  array("Matematika",          "Sport",    "Engleski", " Programiranje", "Latinski"),
  array("Sport",               "Njemački", "Filozofija","     Programiranje", "Vjeronauka"),
  array("Njemački",             "  ",       "                    ", "          ", "BHS")
  ));
  echo "<table class='center'>";
for($i=0; $i<8; $i++)
  {
      echo "<tr>";

  for($j=0; $j<5; $j++)
  {

    echo "<td>".$raspored[$i][$j]."</td>";
  }
    echo"</tr>";
  }

     echo"</table>";

?>
<br>
<h3>IV-1</h3>
<?php
error_reporting(0);
count($raspored=array(
  array("Ponedjeljak","  Utorak","  Srijeda","  Četvrtak","  Petak"),
  array("","","","",""),
  array("Engleski", "Latinski ",      "  ",       "Vjeronauka",      "Sport"),
  array("Filozofija","Njemački",     "Engleski",  "Filozofija",      "Odjeljenska"),
  array("Sociologija","Geografija",  "Historija", "Historija",       "Historija"),
  array("Bosanski","Matematika",     "Sport",     "Sociologija",     "Geografija"),
  array("Matematika","Filozofija",   " Bosanski", "Njemački",        "Geografija"),
  array("Matematika", "Sociologija", "Bosanski",   "Engleski ",      "DSD"),
  array("       DSD", "            ","Kultura religija", "        ", "    ")
  ));
  echo "<table class='center'>";
for($i=0; $i<8; $i++)
  {
      echo "<tr>";

  for($j=0; $j<5; $j++)
  {

    echo "<td>".$raspored[$i][$j]."</td>";
  }
    echo"</tr>";
  }

     echo"</table>";

?>
<br>
<h3>IV-2</h3>
<?php
error_reporting(0);
count($raspored=array(
  array("Ponedjeljak",           " Utorak","  Srijeda","  Četvrtak","  Petak"),
  array("Specijalna pedagogija", "       ","Odgoj u OB", "Francuski", "Filozofija"),
  array("Specijalna pedagogija", "        ","Odgoj u OB", "Latinski","Vjeronauka/Kultura religija"),
  array("Matematika",            "Filozofija","Engleski", "Sport   ","Socijalna psihologija"),
  array("Sport",                 "DIDAK",     "Engleski", "Matematika", "Bosanski"),
  array("Socijalna psihologija", "DIDAK",    "Filozofija","Matematika", "Engleski"),
  array("Njemački",              "Bosanski", "Odjeljenska","Njemački ", "         "),
  array("DSD",                   "Bosanski", "Francuski  ","        ", "          "),
  array("         ",             "Likovno ", "        ",  "          ", "         "),
array("         ",             "Muzičko",   "       ",    "          ", "         "),
  ));
  echo "<table class='center'>";
for($i=0; $i<8; $i++)
  {
      echo "<tr>";

  for($j=0; $j<5; $j++)
  {

    echo "<td>".$raspored[$i][$j]."</td>";
  }
    echo"</tr>";
  }

     echo"</table>";

?>
<br>
    <h3>Tlocrt škole</h3>
    <h3>Lokacija</h3>
    <div class="lokacija">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11507.809592441896!2d18.4157977!3d43.8568153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48a630f2c7e8fdee!2sGimnazija%20Obala%20Sarajevo!5e0!3m2!1shr!2sba!4v1644563261290!5m2!1shr!2sba" width="400" height="250" style="border:1000;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>
  <script src="script.js"></script>
</body>
