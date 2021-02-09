<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once "./functions/database_functions.php";
    if(isset($_SESSION['email'])){
      $customer = getCustomerIdbyEmail($_SESSION['email']);
      $name=$customer['firstname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top"  >
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div style="width: 400px; " >
          <div class="row">
            <a class="navbar-brand" href="index.php" col-md-3>AKBA EbookStore</a>
            <form  method="post" action="search_book.php" class="col-md-6" style="margin-top:7px">
              <input type="text" class="form-control" id="inputPassword2" placeholder="Search By Keyword" name="text">
              <button type="submit" class="btn btn-primary mb-2" style="display:none"></button>
           </form>
          </div>
          </div>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              
              <li><a href="category_list.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Kategori</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Buku</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Keranjang-Ku</a></li>
              <?php 
               if(isset($_SESSION['user'])){
                 echo ' <li><a href="logout.php"><span class="	glyphicon glyphicon-log-out"></span>&nbsp; LogOut</a></li>'.'<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;'
                 .$name.
                 '</a></li>';
               }else{
                echo ' <li><a href="signin.php"><span class="	glyphicon glyphicon-log-in"></span>&nbsp; Signin</a></li>'.'<li><a href="signup.php"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Sign up</a></li>';
               }

              ?>
              
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="  background: url('https://th.bing.com/th/id/R96f0fc7f2a37335f63ee474e2ef04995?rik=W%2bo2EEHAPq%2bg4g&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f06%2fPictures-Download-Book-Wallpapers-HD.jpg&ehk=Id3Uy8otmalZYdbP1g32b7sgBA2mZnhWhclyMeGsZ%2f4%3d&risl=1&pid=ImgRaw') no-repeat center center;background-size: cover;height:900px;" >
      <div class="container">
        <h1 style="text-align:center; margin:5% auto;"><font color='white' face="Cooltevica">SELAMAT DATANG DI AKBA EBOOKSTORE </font></h1>   
        <p style="text-align:center; margin:5% auto;"><font color="white" size="5" >Cuma perlu satu buku untuk jatuh cinta pada membaca, cari buku itu, mari jatuh cinta <i> <br> - Najwa Shihab - </br> </font> </i></p> 
      </div>
    </div>
    <div class="container"> 
        <p style="text-align:center; margin:1% auto;"> <marquee><font  size="5" face="roboto" color="red"> Hai Teman-Teman Akba Store, Di sini Anda dapat menemukan buku favorit Anda dan memesannya secara online!,  Buruan Order dan nikmati promo menarik lainnya</marquee></font></p>     
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">