<!--
 Nicole Bassen
 nbassen.greenrivertech.net
 
 This file contains the side wrapper section including the navigation menu
 and references scripts and stylesheets used throughout the website.
 It is intended to be used with public (non-admin) pages only
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Nicole Bassen</title>
  <meta name="Keywords" content="Nicole Bassen"/>
  <meta name="Description" content="The professional online resume of Nicole Bassen"/>
  <meta name="Distribution" content="global"/>
  <meta name="Robots" content="all"/>

  <!-- Favicon Browser -->
  <link href="img/nicole-portrait.jpg" type="image/jpg" rel="icon"> 

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Satisfy|Questrial' rel='stylesheet' type='text/css'>

  <!-- Font Awesome -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Plugins CSS -->
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Main CSS Stylesheet -->
  <link href="css/styles.css" rel="stylesheet">
  
  <!-- Colorbox Stylesheet -->
  <link rel="stylesheet" href="css/colorbox.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<body>

  <div class="wrapper">

    <div class="box">

      <div class="row">
        <!-- wrapper-aside -->
        <aside class="column col-sm-3 wrapper-aside">

          <header>
            
            <div class="menu">
              <div class="menuBar col-xs-12"><button onclick="toggleFunction()" class="pull-left" id="menuToggle">
                <i class="fa fa-bars fa-lg hidden-xs"></i><i class="fa fa-bars fa-2x visible-xs"></i></button>
              </div>
              <div class="dropdownMenu col-xs-12" id="menuOptions">
              <ul class="nav menu-nav">
                  <li class="navItem"><a href="index.php">About</a></li>
                  <li class="navItem"><a href="portfolio.php">Portfolio</a></li>
                  <li class="navItem"><a href="contact.php">Contact</a></li>
                  <li class="navItem"><a href="admin/login.php">Login</a></li>
              </ul>
              </div>
            </div>

            <article>
              <a href="http://nbassen.greenrivertech.net"><img src="img/nicole-portrait.jpg" class="img-responsive" id="portrait"></a>
            </article>

            <h1 class="text-primary">Nicole Bassen</h1>
            <h2>Software Developer</h2>

          </header><!--/ header title -->

        </aside><!--/ wrapper-aside -->
        
        <script>        
          // Toggles view of menu between hidden and shown
          function toggleFunction() {
            var menu = document.getElementById("menuOptions");
            if ($('#menuOptions').css('display') == 'none') {
                $('#menuOptions').show("slow");
            } else {
                $('#menuOptions').hide("slow");
            }
          }
        </script>