<?php

if (isset($_GET['r'])) {
    if ($_GET['r'] == "l") {
        header('Location: https://linktr.ee/esnlux');
        exit();
    }
}

?>
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
                            "events" => "Events"
                        );
                        
                        $current_page = "home";

                        if (isset($_GET['p']) && isset($links[$_GET['p']])){
                            $current_page = $_GET['p'];
                        }

                        foreach ($links as $link_p => $link_text) {
                            echo sprintf('<li><a href="/index.php?p=%s" %s>%s</a></li>', $link_p, $current_page == $link_p ? 'class="current"' : "", $link_text);
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="inner">
        <?php if ($current_page == "home") { ?>
            <h1> Erasmus Student Network Luxembourg </h1>
            <p> Hello and welcome! We are ESN Luxembourg, the association for all international and exchange students in Luxembourg. </p>
        <?php } elseif ($current_page == "housing") { ?>
            <h1> Housing in Luxembourg </h1>
        <?php } elseif ($current_page == "incoming") { ?>

        <?php } elseif ($current_page == "partners") { ?>

        <?php } elseif ($current_page == "events") { ?>

        <?php } elseif ($current_page == "coc") { ?>
            <h1> Terms and Conditions </h1>
            <p>By attending an ESN Luxembourg event you agree to our 'Event Rules', 'Code of Conduct', and 'Photo Policy' as outlined below</p>
            <h2> Event Rules </h2>
        <?php } ?>
    </div>
</body>
</html>