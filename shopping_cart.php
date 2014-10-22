<?php
    
    session_start();
    require("includes/connection.php");
    if (isset($_GET['page'])) {
        $pages=array("products", "cart");
        if (in_array($_GET['page'], $pages)) {
            $_page=$_GET['page'];
        } else {
            $_page="products";
        }   
    } else {
        $_page="products";
    }

?>
<!doctype html>
<!--[if lt IE 9]><html lang="sv" class="IE8"><![endif]-->
<!--[if IE 9]><html lang="sv" class="IE9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="sv"><!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ArtPad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/icon/touchicon-144.png">
</head>

<body>
    <div class="page_wrapper page-index">
        <?php include 'includes/nav.php'; ?>

        <div id="content" class="page_content">
            <a id="page_content--open_menu_link" href="#open_menu" class="page_content--open_menu_link">Öppna meny</a>

            

            <div class="page_content--artist">
                <h2 class="page_content--artist_heading">Shopping Cart</h2>
                
                <div id="container">

                    <div id="main">

                        <?php require($_page.".php"); ?>

                    </div>

                    <div id="sidebar">
                    <?php
                        if(isset($_SESSION['cart'])) {
                            $sql="SELECT * FROM gallery WHERE id_product IN (";
                            foreach($_SESSION['cart'] as $id => $value) {
                                $sql.=$id.",";
                            }

                            $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                            $query=mysql_query($sql);

                            if (empty($row)) {
                                error_reporting(0);
                            }

                        while($row=mysql_fetch_array($query)) {
                        ?>
                            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
                            <?php
                            }

                            ?>

                            <hr />
                            <a href="index.php?page=cart">Go to Cart</a>

                        <?php

                        } else {

                            echo "<p>Cart is empty</p>";
                        }
                    ?>
                    </div>

                </div>

            </div>

        </div>

        <div id="page_content--to_top_wrapper" class="page_content--to_top_wrapper">
            <a href="#content" class="page_content--to_top_link scroll">Till toppen</a>
        </div>

        <div class="overlay"></div>
    </div>

    <script type="text/javascript">
      window.pas = window.pas || {};
      pas.conf = pas.conf || {};
      pas.page = pas.page || {};

      pas.conf.contact_form_url = "#";
      pas.conf.contact_recipient =
        
            "#"
        
      ;

      

      

      
    </script>

    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/respond.js" type="text/javascript"></script>
    <script src="js/smoothScroll.js" type="text/javascript"></script>
    <!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-11619859-2', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
