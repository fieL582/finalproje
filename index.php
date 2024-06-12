<!DOCTYPE html>
<html lang="tr">
<head>
  <?php $title = "CSDurağı - Kayıt Ol"; include("placeholder/head.php"); ?>
  <style>
    .download_container {
      padding: 3%;
      background: url('../images/download-bg.jpg') no-repeat fixed;
      background-size: cover;
    }
    
    .login-container {
      width: 50%;
    }

    /* Bilgilendirme kutusu */
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

    .success-msg,
    .error-msg {
      margin: 10px 0;
      padding: 10px;
      border-radius: 3px 3px 3px 3px;
    }
    .success-msg {
      color: #270;
      background-color: #DFF2BF;
    }
    .error-msg {
      color: #D8000C;
      background-color: #FFBABA;
    }
  </style>
  <?php include("placeholder/conn.php");?>
  <?php
    $GLOBALS['mesaj'] = null;

    if($_POST)
    {
      $ad = $_POST['ad'];
      $soyad = $_POST['soyad'];
      $eposta = $_POST['eposta'];
      $sifre = $_POST['sifre'];
      $stekrar = $_POST['stekrar'];
      $dtarih = $_POST['dtarih'];
      $cinsiyet = $_POST['cinsiyet'];

      // E-Posta eşsizlik kontrol
      $sql = "SELECT eposta FROM uyeler WHERE eposta = '$eposta'";
      $veri = mysqli_query($conn, $sql);
      if (mysqli_num_rows($veri) > 0)
      {
        $mesaj = "Bu e-posta adresi başkası tarafından kullanılmakta!";
        $bilgikutu = "
        <div class='error-msg'>
          <i class='fa fa-times-circle'></i>
            $mesaj
        </div>
        ";     
      }

      else if ($sifre != $stekrar)
      {
        $mesaj = "Şifre ve şifre tekrara girilen aynı değil, lütfen kontrol edin!";
        $bilgikutu = "
        <div class='error-msg'>
          <i class='fa fa-times-circle'></i>
            $mesaj
        </div>
        ";
      }

      else
      {
        $sql = "INSERT INTO uyeler(ad, soyad, eposta, sifre, dtarih, cinsiyet) VALUES('$ad', '$soyad', '$eposta', '$sifre', '$dtarih', '$cinsiyet')";
        if (mysqli_query($conn, $sql))
        {
          $mesaj = "Kaydınız başarılı bir şekilde oluşturuldu!";
          $bilgikutu = "
          <div class='success-msg'>
            <i class='fa fa-check'></i>
              $mesaj
          </div>
          ";
        }
      }
    }
  ?>
</head>

<body class="sub_page">

  <div class="hero_area2">

    <!-- header section strats -->
      <?php $active = "kayitol"; include("placeholder/navbar.php"); ?>
    <!-- end header section -->
  </div>

  <!-- login section -->

  <section class="download_section layout_padding">
    <div class="container">
      <div class="download_container">
        <div class="box">
          <div class="login-container">
            <form id="kayit" name="kayit" action="index.php" onsubmit="return formKontrol()" method="POST">
              <!-- input parametreleri olarak required bilerek eklenmedi, JS ve PHP validasyonları yeterli olduğu için -->
              <?php
                if ($_POST)
                {
                  echo $bilgikutu;
                }
              ?>
              <h3>CSDurağı - Kayıt Ol</h3>
              <fieldset>
                <input placeholder="Ad" type="text" name="ad" tabindex="1">
              </fieldset>
              <fieldset>
                <input placeholder="Soyad" type="text" name="soyad" tabindex="2">
              </fieldset>
              <fieldset>
                <input placeholder="E-Posta" type="text" name="eposta" tabindex="3"> <!-- type bilerek text yapıldı, JavaScript validasyonu çalıştığı görülsün diye -->
              </fieldset>
              <fieldset>
                <input placeholder="Şifre" type="password" name="sifre" tabindex="4">
              </fieldset>
              <fieldset>
                <input placeholder="Şifre (Tekrar)" type="password" name="stekrar" tabindex="5">
              </fieldset>
              <fieldset>
                <input placeholder="Doğum Tarihi" type="date" name="dtarih" tabindex="6">
              </fieldset>
              <fieldset>
                <select name="cinsiyet" tabindex="7">
                  <option value="Erkek">Erkek</option>
                  <option value="Kadın">Kadın</option>
                </select>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="8">Kayıt Ol</button>
              </fieldset>   
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end login section -->

  <!-- info section -->

    <?php include("placeholder/footer.php"); ?>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script type="text/javascript" src="js/fvalidation.js"></script>
</body>

</html>