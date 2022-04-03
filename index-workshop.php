<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-workshop2.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="account.php" rel='account'>
<Title >Workshop </title>
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




  <h1>
    Workshop <br>
    <img class="logo" src="ObalaHublogo.png">
  </h1>
<br>
<br>
<br>
<br>
<div class="pform">
        <div class="widget-post" aria-labelledby="post-header-title">
            <div class="widget-post__header">
              <h3 class="widget-post__title" id="post-header-title">
                 <i class="fa fa-pencil" aria-hidden="true"></i>
                Write a post
              </h3>
            </div>
            <form id="widget-form" class="widget-post__form" name="form" aria-label="post widget" action="index-workshop.php" method="get">
              <div class="widget-post__content">
                <label for="post-content" class="sr-only">Share</label>
                <textarea name="post" id="post-content" method="get" class="widget-post__textarea scroller" placeholder="Type here..."></textarea>
              </div>
              <div class="widget-post__options is--hidden" id="stock-options">
              </div>
              <div class="widget-post__actions post--actions">
                <div class="post-actions__attachments">
                  <button type="button" class="btn post-actions__stock attachments--btn" aria-controls="stock-options" aria-haspopup="true">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    stock
                  </button>
                  <button type="button" class="btn post-actions__upload attachments--btn">
                    <label for="upload-image" class="post-actions__label">
                       <i class="fa fa-upload" aria-hidden="true"></i> upload image
                    </label>
                  </button>
                  <input type="file" id="upload-image" accept="image/*" multiple>
                </div>
                <div class="post-actions__widget">
                  <button class="btn post-actions__publish">publish</button>
                </div>
              </div>
            </form>



            <?php
            session_start();
             $conn = mysqli_connect("localhost", "root", '', "registration");
            if($conn === false){
                       die("ERROR: Could not connect. "
                           . mysqli_connect_error());
                   }

                   // Taking all 5 values from the form data(input)
                   $ime =  $_REQUEST['post'];
                   $sadrzaj = $_REQUEST[$username];


                   // Performing insert query execution
                   // here our table name is college
                   $sql = "INSERT INTO forum  VALUES ('$ime',
                       '$sadrzaj')";

                   if(mysqli_query($conn, $sql)){

                       echo nl2br("\n$ime\n $sadrzaj\n");
                   } else{
                       echo "ERROR: Hush! Sorry $sql. "
                           . mysqli_error($conn);
                   }

                   // Close connection
                   mysqli_close($conn);
                   ?>

</div>
</div>
<div class="pform">
  <div class="container">
    <div class="subforum">
      <div class="subforum-title" >
        <h2>Objave</h2>


      </div>

      <div class="subforum-row">
            <div class="subforum-icon subforum-column">
              <img class="icon" src="icon.png">
                <i class=""></i>
            </div>
            <div class="subforum-description subforum-column">
                <h3><a href="#">Description Title</a></h3>
                <p> .</p>
            </div>
            <div class="subforum-stats subforum-column">
                <span>24 Posts | 12 Topics</span>
            </div>
            <div class="subforum-info subforum-column">
                <b><a href="">Last post</a></b> by <a href="" action="account.php" method="get">  </a>
                <br>on <small>12 Dec 2020</small>
        </div>
      </div>

    </div>
  </div>
</div>
<footer>
<h4> Made by 🤍 Obala Team</h4>
</footer>
<script src="script.js"></script>
</body>
</html>
