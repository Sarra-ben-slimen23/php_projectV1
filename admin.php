<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ST.Travel</title>
        <link rel="icon" href="img/logo.png" />
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
      
  <body>
      <header>
      <!-- <h1 class="logo">ST.Travel Agence</h1> -->

<?php
        $cin=$_GET['cin'];
      if($cin=="123456"){
    echo "<h1 class='logo'>Bienvenue dans la page admin</h1>
    
      <nav class='navbar'>
        <a href='index.html'>HOME</a>
        <a href='#about'>ABOUT</a>
      </nav>

    </header>

    <aside>
      <nav>
        <ul>
          <li>
            <a href='home.html' target='za'>Home</a>
          </li>
          <li>
            <a href='admin.html' target='za'>Espace Administrateur</a>
          </li>
        </li>
        </ul>
      </nav>
    </aside>

    <section>
      <iframe src='admin.html' name='za'></iframe>
    </section>
    
    ";
    }
    else{
        echo "
        <h1 class='logo'>vous n'avez pas le droit d'accéder à cette page</h1>
    
      <nav class='navbar'>
        <a href='index.html'>HOME</a>
        <a href='#about'>ABOUT</a>
      </nav>

    </header>

        ";
    }
?>

    

    
  </body>
</html>
