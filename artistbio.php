
<!doctype html>
<!--[if lt IE 9]><html lang="sv" class="IE8"><![endif]-->
<!--[if IE 9]><html lang="sv" class="IE9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="sv"><!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Artist Name</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">

    <link rel="stylesheet" href="styles.css" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="artistbio.css" type="text/css">

    <style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50%;
            height:60%;
            padding: 16px;
            border: 16px solid black;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
        .lightboximg {
            max-width: 100%;
        }
        .center {
            text-align: center;
        }
        .addCartButton {
            background: black;
            border:none;
            color:white;
            width:220px;
            margin:5px 0px;
            padding: 10px 0px;
            font-size:18px;
        }
        .addCartButton:hover {
            background: #ADD8EA;
            cursor:pointer;
            border:none;
            color:white;
        }
    </style>


    
</head>

<body>
    <div class="page_wrapper page-artist">
        <div id="menu" class="page_menu">

            <h1 class="page_menu--logo"><a href="http://placehold.it/260x144"></a></h1>

      <ul class="page_menu--actions">
                <li class="page_menu--action_book"><a href="index.html">Home</a></li>
                <li class="page_menu--action_book"><a href="artist.html">Artists</a></li>
                <li class="page_menu--action_book"><a href="gallery.html">Gallery</a></li>
                <li class="page_menu--action_book"><a href="#">Events</a></li>
                <li class="page_menu--action_book"><a href="#">Submit Work</a></li>
                <li class="page_menu--action_book"><a href="#">Shopping Cart</a></li>
                <li class="page_menu--action_book"><a href="faq.html">FAQ</a></li>
                <li class="page_menu--action_book"><a href="terms.html">Terms and Conditions</a></li>
                
            </ul>



            <address class="page_menu--address">
                Universtiy of Central Florida<br />
                4000 Central Florida Blvd<br />
               Orlando, FL 32816<br />

               (407) 823-2000<br />
               
            </address>
        </div>

        <div id="content" class="page_content">
            <a id="page_content--open_menu_link" href="#open_menu" class="page_content--open_menu_link">menu</a>

            <?php
                //MYSQL: 
                $mysqli = new mysqli("sulley.cah.ucf.edu","ka247238","mason95","ka247238");

                if (isset($_GET['id'])) //Catergory ID in catalog
                    if($_GET['id'] != null){
                        $proID = intval($_GET['id']);
                        $proID = intval($proID);
                    }

                
                    global $mysqli, $proID;
                    $id = $proID;

                    $productquery = "SELECT * FROM artpad WHERE id=".$id." LIMIT 1";

                    if ($result = $mysqli->query($productquery)) {
                        while ($row = $result->fetch_assoc()) {
                            $name = $row["name"];
                            $bio = $row["bio"];
                            $bioimg = $row["bioimg"];
                            $bioimgbg = $row["bioimgbg"];
                            $art01 = $row["art01"];
                            $art02 = $row["art02"];
                            $art03 = $row["art03"];
                            $title01 = $row["title01"];
                            $title02 = $row["title02"];
                            $title03 = $row["title03"];
                            $price01 = $row["price01"];
                            $price02 = $row["price02"];
                            $price03 = $row["price03"];
                            $artdes01 = $row["artdes01"];
                            $artdes02 = $row["artdes02"];
                            $artdes03 = $row["artdes03"];

                            echo '
                            <div class="page_content--artist_background_container">
                                <div class="page_content--artist_background_inner">
                                    <img src="img/'.$bioimgbg.'" class="page_content--artist_background" alt="" />
                                </div>
                            </div>

                            <div class="page_content--artist">
                                <h2 class="page_content--artist_heading">'.$name.'</h2>
                                    <img src="img/'.$bioimg.'" class="page_content--artist_image" alt="" />

                                <p>'.$bio.'</p>

                                <div id="light" class="white_content">
                                    <div class="center"><img src="img/'.$art01.'" alt="" class="lightboximg"/></div>
                                    <h3>'.$title01.'</h3>
                                    <p>$'.$price01.'</p>
                                    <p>'.$artdes01.'</p>
                                    <input type="submit" value="add to cart" class="addCartButton"></br>
                                    <a href = "javascript:void(0)" onclick = "document.getElementById(\'light\').style.display=\'none\';document.getElementById(\'fade\').style.display=\'none\'">Close</a>
                                </div>
                                <div id="light2" class="white_content">
                                    <div class="center"><img src="img/'.$art02.'" alt="" class="lightboximg"/></div>
                                    <h3>'.$title02.'</h3>
                                    <p>$'.$price02.'</p>
                                    <p>'.$artdes02.'</p>
                                    <input type="submit" value="add to cart" class="addCartButton"></br>
                                    <a href = "javascript:void(0)" onclick = "document.getElementById(\'light2\').style.display=\'none\';document.getElementById(\'fade\').style.display=\'none\'">Close</a>
                                </div>
                                <div id="light3" class="white_content">
                                    <div class="center"><img src="img/'.$art03.'" alt="" class="lightboximg"/></div>
                                    <h3>'.$title03.'</h3>
                                    <p>$'.$price03.'</p>
                                    <p>'.$artdes03.'</p>
                                    <input type="submit" value="add to cart" class="addCartButton"></br>
                                    <a href = "javascript:void(0)" onclick = "document.getElementById(\'light3\').style.display=\'none\';document.getElementById(\'fade\').style.display=\'none\'">Close</a>
                                </div>
                                <div id="fade" class="black_overlay"></div>

                                <ul class="page_tiles">
                                    <li class="page_tiles--artist">
                                        <img src="img/'.$art01.'" alt="" />
                                        <a href = "javascript:void(0)" onclick = "document.getElementById(\'light\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'" class="page_tiles--artist_book_link">enlarge</a>
                                        <h2 class="page_tiles--artist_heading"><a href = "javascript:void(0)" onclick = "document.getElementById(\'light\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'">'.$title01.'</a></h2>
                                    </li>

                                    <li class="page_tiles--artist">
                                        <img src="img/'.$art02.'" alt="" />
                                        <a href = "javascript:void(0)" onclick = "document.getElementById(\'light2\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'" class="page_tiles--artist_book_link">enlarge</a>
                                        <h2 class="page_tiles--artist_heading"><a href = "javascript:void(0)" onclick = "document.getElementById(\'light2\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'">'.$title02.'</a></h2>
                                    </li>

                                    <li class="page_tiles--artist">
                                        <img src="img/'.$art03.'" alt="" />
                                        <a href = "javascript:void(0)" onclick = "document.getElementById(\'light3\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'" class="page_tiles--artist_book_link">enlarge</a>
                                        <h2 class="page_tiles--artist_heading"><a href = "javascript:void(0)" onclick = "document.getElementById(\'light3\').style.display=\'block\';document.getElementById(\'fade\').style.display=\'block\'">'.$title03.'</a></h2>
                                    </li>
                                </ul>
                                

                            </div>
                            ';
                        }
                    }
            ?>
            

        </div>

        <div id="page_content--to_top_wrapper" class="page_content--to_top_wrapper">
            <a href="#content" class="page_content--to_top_link scroll">To top</a>
        </div>

        <div class="overlay"></div>
    </div>

    <script type="text/javascript">
      window.pas = window.pas || {};
      pas.conf = pas.conf || {};
      pas.page = pas.page || {};

      pas.conf.contact_form_url = "#";
      pas.conf.contact_recipient = "#";
    </script>

    <script src="script.js" type="text/javascript"></script>
    <script src="modernizr.js" type="text/javascript"></script>
    <script src="respond.js" type="text/javascript"></script>
    <script src="smoothScroll.js" type="text/javascript"></script>
    
    
</body>
</html>
