<?php  

include_once 'includes/classes/ControlCore.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $lang["Common"]["Title"] ?></title>
        <link rel="stylesheet" type="text/css" href="static/css/index.css" media="screen" />
        <script type="text/javascript" src='static/javascript/basic.js'></script>
    </head>
    <body>
        <?php //info_data(); ?>
        <section id="box1">
            <h1>The duck</h1> 
            <section>
                <h1>Introduction</h1>
                <p>in this section, we will expand our duck concept.</p>
            </section>
            <section>
                <h1>Habitat</h1>
                <p>The duck, as a fierce predator, needs an environment with abundant wolves to hunt.</p>
            </section>
            <button onclick="clean();"><?php echo $lang["Bottons"]["Clean"] ?></button>
        </section>
        <footer>
            <p>Copyright 2019 © The Example company</p>
        </footer>
    </body>
</html>

