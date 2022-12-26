<?php
$links = Array(
    "home" => array("Home", "cyan"),
    "housing" => array("Housing", "magenta"),
    "incoming" => array("Incoming Students", "green"),
    "partners" => array("ESNcard and Partners", "orange"),
    "events" => array("Events", "dark-blue"),
    "coc" => array("Terms and Conditions", NULL)
);

$current_page = "home";

if (isset($_GET['p']) && isset($links[$_GET['p']])){
    $current_page = $_GET['p'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESN Luxembourg<?= $current_page == "home" ? "" : " - " . $links[$current_page][0] ?></title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
            <nav>
                <div class="socials">
                    <a href="https://www.instagram.com/esnluxembourg/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/esnluxembourg"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/esn-luxembourg/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <ul>
                    <li><a href="/"><img src="images/LU_colour.png" alt="ESN Luxembourg Logo"></a></li>
                    <?php
                        foreach ($links as $link_p => $link_pair) {
                            if ($link_pair[1] === NULL) {
                                continue;
                            }
                            $link_text = $link_pair[0];
                            $link_color = $link_pair[1];
                            echo sprintf('<li class="%s %s"><a href="%s">%s</a></li>', $link_color, $current_page == $link_p ? 'current' : "", $link_p, $link_text);
                        }
                    ?>
                </ul>
            </nav>
    </header>
    <div class="inner <?= $current_page ?>">
        <?php 
            include("pages" . DIRECTORY_SEPARATOR . $current_page . ".php");
        ?>
    </div>
</body>
</html>