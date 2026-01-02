<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>


        <title>tskopen</title>
        
    </head>
    <body>
        <?php include "navbar.php"; ?>


    <main>
        <h1>Thor Kopenkoskey</h1>
        <section style="display: flex; align-items: flex-start; gap: 30px; padding: 20px; margin-bottom: 30px; border-radius: 25px; border: 2px solid #0066CC">
            <p>
            My name is Thor Kopenkoskey, I am a student at Florida Institute of Technology.
            </p>
            <p>
            This website acts as a display for my projects and as a resource for projects that require web infastructure.
            My hobbies include Engineering projects, Running, Rock Climbing, Board games, and camping.
            This website is under active construction as of December 20th 2025.
            </p>
        <img src="/images/Grey-Shirt-Selfie.jpg" alt="Selfie of Thor Kopenkoskey" width="200" height="300" style="float:right"> 
        </section>     
            <h2>Featured Projects</h2>

        <section class="project-container">
        <a href="/php/rocketry.php">
            <article class="project-box">
                <h2>
                    Rocketry Flight Computer & Ground Station
                </h2>
                <p>
                    Design of a modular flight computer with GPS, IMU, telemetry, and recovery systems.
                </p>
            </article>
        </a>
            <a href="/php/fair2025.php">
                <article class="project-box">
                    <h2>
                        Carbon Fiber Reinforced Concrete (2025)
                    </h2>
                    <p>
                        Experimental analysis of carbon fiber reinforcement in sidewalk concrete
                        under flexural strength testing (ASTM C78–02).
                    </p>
                </article>
            </a>

            <article class="project-box">
                <h2>
                MIT Beaverworks CubeSat Competition - Awarded Honorable Mention. 
                </h2>
                <p>
                Team competition with two other friends, Zander Colagno, and Garrison Winters.
                Competed against 32 other teams. Designed a Cubesat to detect and track wildfires from orbit.
                </p>
            </article>

            <a href="/php/websiteproject.php">
                <article class="project-box">
                    <h2>
                    Personal Website
                    </h2>
                    <p>
                    Resume and Project demonstration website.
                    Acts as web infastructure for engineering projects. One stop shop for all things Thor Kopenkoskey
                    </p>
                </article>
            </a>
        </section>


    


    
    </main>
    
    <footer>
        <p>
            Note this website is under active development and changes often. Please report any errors to tskopen@gmail.com
        </p>
        <p>    © 2025 Thor Kopenkoskey </p>
     </footer>
</body>
</html>
