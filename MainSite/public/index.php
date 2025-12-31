<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">

        <title>tskopen</title>
        
    </head>
    <body>
        <?php include "navbar.php"; ?>


    <main>
           <section>
            <h2>Who Am I</h2></h2>
            <p>
            My name is Thor Kopenkoskey, I am a student at Florida Institute of Technology.
            This website acts as a display for my projects and as a resource for projects that require web infastructure.
            My hobbies include Engineering projects, Running, Rock Climbing, Board games, and camping.
            </p>
        </section>     

        <section class="project-container">
            <h2>Featured Projects, See Projects dropdown on the top of the page.</h2>
                
            <article class="project-box">
                <h3>
                    Rocketry Flight Computer & Ground Station
                </h3>
                <p>
                    Design of a modular flight computer with GPS, IMU, telemetry, and recovery systems.
                </p>
            </article>
            <article class="project-box">
                <h3>
                    Carbon Fiber Reinforced Concrete (2025)
                </h3>
                <p>
                    Experimental analysis of carbon fiber reinforcement in sidewalk concrete
                    under flexural strength testing (ASTM C78–02).
                </p>
            </article>
            <article class="project-box">
                <h3>
                MIT Beaverworks CubeSat Competition - Awarded Honorable Mention.
                </h3>
                <p>
                Team competition with two other friends, Zander Colagno, and Garrison Winters.
                Competed against 32 other teams. Designed a Cubesat to detect and track wildfires from orbit.
                </p>
            </article>
        </section>


    


    
    </main>
    
    <footer>
        <p>
            Note this website is under active development and changes often. Please report any errors to tskopen@gmail.com
            © 2025 Thor Kopenkoskey
        </p>
    </footer>
</body>
</html>
