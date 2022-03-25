<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Morate biti prijavljeni";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <link rel="stylesheet" type="text/css" href="blog.css">
</head>
<body>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-school'></i>
        <div class="logo_name">ObalaHub</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
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
       <a href="info.php">
         <i class='bx bx-info-circle'></i>
         <span class="links_name">Info</span>
       </a>
       <span class="tooltip">Info</span>
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
      <div class="text"><h1>ObalaHub</h1></div>
      <section class = "blog" id = "blog">
      <div class = "container">
        <div class = "blog-content">
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/logo.png" alt = "">
            </div>
            <div class = "blog-text">
              <span>23 Mart, 2022</span>
              <h2>OBAVJEŠTENJE o raspisanom Javnom konkursu za popunu upražnjenih radnih mjesta u školskoj 2021/2022. godini:</h2>
              <p>Nastavnik/ca sociologije na njemačkom jeziku za bilingvalni program ... 1 izvršilac - 2 časa nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure do povratka radnice sa porodiljskog odsustva, a najkasnije do 11.05.2022. godine;
nastavnik/ca engleskog jezika ... 1 izvršilac - 9 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;
nastavnik/ca psihologije ... 1 izvršilac - 22 časa nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;
nastavnik/ca njemačkog jezika ... 1 izvršilac - 14 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;
nastavnik/ca informatike ... 1 izvršilac - 20 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;
nastavnik/ca matematike ... 1 izvršilac - 7 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;
bibliotekar/ka ... 1 izvršilac - 20 sati sedmično, na određeno vrijeme, od okončanja konkursne procedure , a najkasnije do 31.08.2022. godine.
Kompletan sadržaj teksta javnog kokursa možete pogledati na LINKu, kao i na službenim stranicama Ministarstva za odgoj i obrazovanje Kantona Sarajevo (www.mo.ks.gov.ba) i Javne ustanove „Služba za zapošljavanje Kantona Sarajevo“  (www.szks.ba).

Javni konkurs ostaje otvoren deset dana od dana objave obavještenja u dnevnim novinama, a krajnji rok za prijavu na ovaj javni konkurs je 29.3.2022. godine.

Konkurs će ostati  objavljen na internet stranicama u čitavom periodu roka prijave.
              </p>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-2.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis libero quas ipsum laudantium nihil! Quaerat.</p>
              <a href = "#">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-3.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis libero quas ipsum laudantium nihil! Quaerat.</p>
              <a href = "#">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-4.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis libero quas ipsum laudantium nihil! Quaerat.</p>
              <a href = "#">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-5.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis libero quas ipsum laudantium nihil! Quaerat.</p>
              <a href = "#">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-6.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis libero quas ipsum laudantium nihil! Quaerat.</p>
              <a href = "#">Read More</a>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
  </section>
  <script src="script.js"></script>
</div>
</body>
</html>
