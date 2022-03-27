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
       <a href="http://localhost:3000">
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
              <p>-nastavnik/ca sociologije na njemačkom jeziku za bilingvalni program ... 1 izvršilac - 2 časa nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure do povratka radnice sa porodiljskog odsustva, a najkasnije do 11.05.2022. godine;<br>
-nastavnik/ca engleskog jezika ... 1 izvršilac - 9 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;<br>
-nastavnik/ca psihologije ... 1 izvršilac - 22 časa nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;<br>
-nastavnik/ca njemačkog jezika ... 1 izvršilac - 14 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;<br>
-nastavnik/ca informatike ... 1 izvršilac - 20 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;<br>
-nastavnik/ca matematike ... 1 izvršilac - 7 časova nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure, a najkasnije do 31.08.2022. godine;<br>
-bibliotekar/ka ... 1 izvršilac - 20 sati sedmično, na određeno vrijeme, od okončanja konkursne procedure , a najkasnije do 31.08.2022. godine.<br>
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
              <img src = "images/logo.png" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>OBAVJEŠTENJE o raspisanom javnom konkursu za popunu upražnjenih radnih mjesta u školskoj 2021/2022. godini:</h2>
              <p>-Nastavnik/ca sociologije ... 1 izvršilac, 2 časa nastavne norme sedmično, na određeno vrijeme, od okončanja konkursne procedure do povratka radnice s porodiljskog odsustva, a najkasnije do 11.5.2022. godine (na njemačkom jeziku);<br>
-Rukovalac nastavnom tehnikom-programer ... 1 izvršilac, 40 sati radnog vremena sedmično, na određeno vrijeme, od okončanja konkursne procedure do 31.08.2022. godine;<br>


Kompletan sadržaj teksta javnog kokursa možete pogledati na LINKu, kao i na službenim stranicama Ministarstva za odgoj i obrazovanje Kantona Sarajevo (www.mo.ks.gov.ba) i Javne ustanove „Služba za zapošljavanje Kantona Sarajevo“  (www.szks.ba).

Javni konkurs ostaje otvoren deset dana od dana objave obavještenja u dnevnim novinama, a krajnji rok za prijavu na ovaj javni konkurs je 08.01.2022. godine.

Konkurs će ostati  objavljen na internet stranicama u čitavom periodu roka prijave.</p>

            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/f17.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>SVEČANO OTVORENJE UČIONICE ʺJACQUES PRÉVERTʺ I DODJELA POTVRDE LABELFRANCEDUCATION GIMNAZIJI OBALA SARAJEVO</h2>
              <p>U srijedu, 10. novembra 2021. godine, u našoj školi je bilo svečano. Posjetila nas je Njena Ekselencija, Ambasadorica Francuske u Bosni i Hercegovini, gospođa Christine Toudic, a povod posjete je bilo svečano otvorenje učionice ʺJacques Prévertʺ i dodjela potvrde LabelFrancEducation Gimnaziji Obala Sarajevo. Svečanom događaju, pored ambasadorica Republike Francuske, prisustvovali su i predstavnica Ministarstva za odgoj i obrazovanje KS Lamija Husić, direktor Gimnazije Obala Sarajevo profesor Hedžić Benjamin, gosti iz Ministarstva i Francuskog institut u Sarajevu. Predstavnici tri ustanove su se obratili prisutnim medijima i gostima.<br>

Ambasadorica Republike Francuske Christine Toudici dodjelila je Plaketu LabelFrancEducation Gimnaziji Obala Sarajevo koju izdaje francusko ministarstvo za Evropu i Vanjske Poslove (Ministère français de l’Europe et des Affaires étrangères (MEAE).  LabelFrancEducation je potvrda kvalitete izvrsnosti predavanja francuskog stranog jezika u bilingvalnim odjeljenjima širom svijeta gdje se francuski izučava kao strani jezik i gdje je najmanje jedna nejezička materija izučavana na francuskom jeziku. Učenici naše škole su prezentovali svoja iskustva pohađanja dvojezičnog B/H/S i francuskog programa.</p>

            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/5.jpg" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>PROJEKAT GIMNAZIJE OBALA U SARADNJI SA KLUBOVIMA ROTARY SARAJEVO I DOLMABAHCE ROTARY ISTANBUL</h2>
              <p>Gimnaziju Obala posjetili su članovi Dolmabahce Rotary Istanbul kluba i članovi Rotary kluba Sarajevo uz čiju podršku će se realizirati projekat pod nazivom „ Two countries one vision“. Cilj ovoga projekta je izgradnja i dugoročnih prijateljskih veza između učenica i učenika dvaju zemalja. U projektu učestvuju učenice i učenici koji pohađaju Corlu Fen Bililmleri schools iz Istanbula i učenici Gimnazije Obala. Ovim povodom organiziran je svečani prijem na kome su nastupili članovi školskog benda Gimnazije Obala i članovi hora i orkestra. Za ovu priliku pripremili su i izveli kompoziciju na turskom jeziku. S obzirom da su učenici iz Istanbula poslali svoja pisma prijateljima u Sarajevo, tako je obavljena i primopredaja pisama o temi „ How does International friendship create long term peace“. Učenice i učenici nisu skrivali oduševljenje kada su primili pisma prijatelja koja bi uskoro trebali i lično upoznati. Kao simbol
izgradnje mosta prijateljstva dvaju škola, u naselju Grbavica ispred Centra za mlade općine Novo Sarajevo, posađeno je i „ Stablo prijateljstva“, koje će posvjedočiti o prijateljstvu i povezivanju mladih ljudi Turske i Bosne I Hercegovine. „ Ponosan sam što je naša škola dio ovog projekta. Imamo saradnje s mnogim evropskim i regionalnim školama, ali me posebno raduje činjenica da ćemo u budućnosti imat i veze sa uglednom školom iz Istanbula. Povezivanja su veoma značajna jer upravo kroz takve susrete učenici stiču nova iskustva i imaju priliku govoriti strane jezike. Nadam se da će se uskoro i učenici sastati a posebno izražavam zahvalnost Rotary klubova iz Istanbula i Sarajeva koji će nas u tome I podržati, naglašava direktor Gimnazije Obala, profesor Benjamin Hedžić. Gosti su školskom bendu i orkestru darovali veoma vrijedne muzičke instrumente.</p>

            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/6.png" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>DOBRO NA MOM EKRANU</h2>
              <p>U sklopu manifestacije "Selam, ya Resulallah" učenici J.U. GIMNAZIJA OBALA Sarajevo sa svojom profesoricom islamske vjeronauke Aidom Trebinjac uradili su video pod nazivom "Dobro na mom ekranu". Naši učenici su imali temu da prikažu kroz kratki film na koji sve način se  može iskazati dobročinstvo prema učiteljima i onima koji poučavaju i odgajaju. Profesorica Aida izabrala je one učenike za koje je smatrala da bi ovu temu prikazali u što boljem svjetlu. Učenici su kroz razne animacije i ideje uspješno realizovali ovaj projekat  koji organizuje Medžliš Islamske zajednice Sarajevo.
U subotu 23.10.2021.godine u Multimedijalnom centru Kovači, upriličena je premijera filma. Na listi od 8 srednjih škola iz Kantona Sarajevo, našla se i naša škola. Učenici koji su bili dio ovog projekta, sa svojom profesoricom i pomoćnicom direktora Dženetom Sarajlić prisustvovali su ovom svečanom činu. Našu školu predstavili su Šabić Ammar učenik III1 i Tajić Merjem učenica III5. Ovo je  samo još jedan u nizu uspješnih projekata kojim su učenici i njihova profesorica predstavili našu školu. Pogledajte<a href="https://www.youtube.com/watch?v=24N_rwEnqSA&ab_channel=GimnazijaObalaSarajevo"><b>video<b></a></p>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/logo.png" alt = "">
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>DANAS OBILJEŽAVAMO SVJETSKI DAN UČITELJA!</h2>
              <p>Ovaj datum se obilježava u cijelom svijetu i u Bosni i Hercegovini, s ciljem da se istakne uloga učitelja , prosvjetnih radnika u obrazovanju i razvoju djece, te naglase principi i preporuke o položaju učitelja , nastavnika i profesora.

Na Svjetski dan prosvjetnih radnika podsjećamo vas na plemenitost i tešku misiju obrazovanja i odgoja djece. Učitelji su umjetnici u razvoju dječijeg karaktera, koji se trude osim lekcija , naučiti ih da žive iskreno, slobodno i okruženo ljubavlju.

Iako znamo da radimo sjajan posao, uzbudljiv, težak, odgovoran i važan  , sretni smo upravo zbog toga što smo izabrali ovu profesiju.

Svim profesoricama i profesorima GIMNAZIJE OBALA, želimo sretan Dan učitelja i nadamo se da ćemo u dobrom zdravlju i radosti s našim učenicama i učenicima , još ih mnogo dočekati.  <br>



Direktor škole  <br>

Prof. Benjamin Hedžić</p>

            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <p style="text-align:center;padding-bottom:20px;"> Za  više informacija posjetite <a href="https://obala.edu.ba/">školsku stranicu</a></p>
  </section>
  <script src="script.js"></script>
</div>

</body>
</html>
