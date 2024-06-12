<?php
    echo "
    <header class='header_section'>
      <div class='container-fluid'>
        <nav class='navbar navbar-expand-lg custom_nav-container '>
          <a class='navbar-brand' href='index.php'>
            <img src='images/logo.png' alt='...'/>
          </a>

          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class=''> </span>
          </button>

          <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav'>
            ";        

              if ($active == "kayitol")
              {
                echo
                "
                    <li class='nav-item active'>
                        <a class='nav-link' href='index.php'> <i class='fas fa-sign-in-alt'></i> Kayıt Ol <span class='sr-only'>(current)</span></a>
                    </li>
                ";
              }

              else
              {
                echo
                "
                    <li class='nav-item'>
                        <a class='nav-link' href='index.php'> <i class='fas fa-sign-in-alt'></i> Kayıt Ol</a>
                    </li>
                ";
              }

              if ($active == "listele")
              {
                echo
                "
                    <li class='nav-item active'>
                        <a class='nav-link' href='list.php'> <i class='fas fa-user'></i> Listele <span class='sr-only'>(current)</span></a>
                    </li>
                ";
              }
              else
              {
                echo
                "
                    <li class='nav-item'>
                        <a class='nav-link' href='list.php'> <i class='fas fa-user'></i> Listele</a>
                    </li>
                ";
              }
              echo "
              <form class='form-inline'>
                <button class='btn  my-2 my-sm-0 nav_search-btn' type='submit'>
                  <i class='fas fa-search'></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    ";
?>