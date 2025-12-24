<!DOCTYPE html>

<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>Settings</title>
    </head>
    <body>

    <?php include "navbar.php"; ?>

        
<body>
    <h1><strong>Customize Site Colors!</strong></h1>
    <p>Below you can select different colors for the website. Changes will apply to all pages.</p>

    <div class="color-picker">
        <label for="bgColor">Background:</label>
        <input type="color" id="bgColor" value="#D3D3D3">
    </div>

    <div class="color-picker">
        <label for="headerColor">Header:</label>
        <input type="color" id="headerColor" value="#201A1A">
    </div>

    <div class="color-picker">
        <label for="paragraphColor">Paragraph:</label>
        <input type="color" id="paragraphColor" value="#333333">
    </div>

    <div class="color-picker">
        <label for="linkColor">Links:</label>
        <input type="color" id="linkColor" value="#000000">
    </div>

    <div class="color-picker">
        <label for="navbarColor">Navbar:</label>
        <input type="color" id="navbarColor" value="#4c4c4c">
    </div>

        <button type="button" onclick="applyGrayTheme()">
            Gray Theme Preset
        </button>
        <button type="button" onclick="applyGreenTheme()">
            Green Theme Preset
        </button>

</body>
</html>
