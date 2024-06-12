<!DOCTYPE html>
<html lang="tr">
<head>
  <?php $title = "CSDurağı - Listele"; include("placeholder/head.php"); ?>
  <style>
    .download_container{
      padding: 3%;
      background-size: cover;
    }

    .login_container{
      max-width: 100% !important;
      max-height: 300px;
      font-family: "Open Sans", sans-serif;
      font-weight: 100;
      font-size: 15px;
      line-height: 30px;
      overflow-y: scroll;
    }
  </style>
  <?php include("placeholder/conn.php");?>
  <?php
    $sql = "SELECT * FROM uyeler";
    $veri = mysqli_query($conn, $sql);
  ?>
</head>

<body class="sub_page">

  <div class="hero_area2">

    <!-- header section strats -->
      <?php $active = "listele"; include("placeholder/navbar.php"); ?>
    <!-- end header section -->
  </div>

  <!-- login section -->

  <section class="download_section layout_padding">
    <div class="container">
      <div class="download_container">
        <div class="box">
          <div class="login_container">
            <table border="1" cellpadding="5" style="width: 100%;">
              <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>E-Posta</th>
                <th>Şifre</th>
                <th>Doğum Tarihi</th>
                <th>Cinsiyet</th>
              </tr>
              <?php
                while ($row = mysqli_fetch_assoc($veri))
                {
                  echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['ad']."</td>";
                    echo "<td>".$row['soyad']."</td>";
                    echo "<td>".$row['eposta']."</td>";
                    echo "<td>".$row['sifre']."</td>";
                    echo "<td>".$row['dtarih']."</td>";
                    if ($row['cinsiyet'] == "Erkek")
                    {
                      echo "<td style='color: blue;'>".$row['cinsiyet']."</td>";
                    }
                    else
                    {
                      echo "<td style='color: red;'>".$row['cinsiyet']."</td>";
                    }
                  echo "</tr>";
                }                
              ?>
            </table>
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

</body>

</html>