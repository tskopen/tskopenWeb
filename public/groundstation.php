<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>GroundStationUI</title>
        <script src="https://cdn.plot.ly/plotly-3.3.0.min.js" charset="utf-8"></script>
    </head>

    <?php include "navbar.php"; ?>

    <main class="project">

    <body>
        <header>
            <h1>Groudnstation display for ARCS</h1>
            <div class="subtitle">
                Portable UI for ARCS.
            </div>
        </header>
        <div>
            <h1>Introduction</h1>
            <p>
                I put the groundstation on a webserver for ease of transportation and portability. AKA I dont need a drag a spare monitor places.
            </p>
        </div>
        
        <div id="barometerchart" style="width:100%;height:400px;"></div>
    </body>
</html>
