<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

    <script src="https://use.fontawesome.com/d870cc0e10.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style type="text/css">
        .bgimg {
            background-image: url('/wp-content/uploads/2023/05/divbg.png');

        }

        .bgimg2 {
            background-image: url('/wp-content/uploads/2023/05/header.png');
            background-repeat: space;
        }

        @media only screen and (max-width : 767px) {
            img.desktoppic {
                display: none;
            }
        }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <header id="header-wrap">

        <div id="roof" class="hidden-xs">
            <div class="container">
                <div class="col-md-6 col-sm-6">
                    <div class="info-bar-address">
                        <i class="icon-location-pin"></i> University of The Gambia, Peace Building, Kanifing
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                <div class="quick-contacts">
                    <span><i class="icon-phone"></i> (220) 377 5908 </span>
                    <span><a href="https://twitter.com/IndabaXGambia"><i class="fab fa-twitter"></i> Follow us on Twitter</a></span>
                </div>


                </div>
            </div>
        </div>


        <div class="navigation-menu">
            <nav class="navbar navbar-default navbar-event">
                <div class="container">

                    <div class="navbar-header col-md-2">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand desktoppic" href="index.html"><img class="desktoppic" style="width:170px; height:125px; padding-top:10px" src="/wp-content/uploads/2023/05/indabaxlogo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html"><i class="fa fa-home"></i> &nbsp; Home</a></li>
                            <li class="animated bounceIn"><a href="#speakers"><i class="fa fa-podcast"></i> &nbsp; Speakers</a></li>

                            <li><a href="#schedule"><i class="fa fa-calendar-plus-o"></i> &nbsp;Schedule</a></li>
                            <li><a href="#sponsors"><i class="fa fa-thumbs-up"></i> &nbsp;Sponsors</a></li>

                            <li><a href="#orgs"><i class="fa fa-users"></i> &nbsp; Organisers</a></li>

                            <li><a href="#map"><i class="fa fa-paper-plane"></i> &nbsp;Contact</a></li>
                        </ul>
                    </div>
                </div>

                <?php wp_nav_menu(array('menu_class' => 'navbar-nav mx-lg-auto', 'container' => 'ul',)); ?>

            </nav>
        </div>
    </header>