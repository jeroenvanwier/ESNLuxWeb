<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESN Luxembourg</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="inner">
            <nav>
                <ul>
                    <li><a href="/"><img src="images/LU_colour.png" alt="ESN Luxembourg Logo"></a></li>
                    <?php
                        $links = Array(
                            "home" => "Home",
                            "housing" => "Housing",
                            "incoming" => "Incoming Students",
                            "partners" => "ESNcard and Partners",
                            "events" => "Events",
                            "coc" => "",
                            "links" => ""
                        );
                        
                        $current_page = "home";

                        if (isset($_GET['p']) && isset($links[$_GET['p']])){
                            $current_page = $_GET['p'];
                        }

                        foreach ($links as $link_p => $link_text) {
                            if ($link_text != "") {
                                echo sprintf('<li %s><a href="%s">%s</a></li>', $current_page == $link_p ? 'class="current"' : "", $link_p, $link_text);
                            }
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="inner">
        <?php 
            include("pages" . DIRECTORY_SEPARATOR . $current_page . ".php");
        ?>
    </div>
</body>
</html>