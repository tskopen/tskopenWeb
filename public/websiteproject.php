<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>Website</title>
        
    </head>
    <?php include "navbar.php"; ?>

    <main class="project">

        <header>
            <h1>Creating my own website</h1>
            <div class="subtitle">
                Heres a review of my design considerations. I decided not to put what I did because the website itself speaks to that. I did not use a template.
            </div>
        </header>

            <h1>Introduction</h1>
            <p>
                This website is coded from scratch using PHP.
                This website is supported from a foundation of Nginx and railway infastructure
                This website is a attempt to expand my web development knowledge.
            </p>
        </section>

        <section>
            <h2>Design Considerations and Priorities</h2>
          
                <h3>Encourage ease of reading and understandability</h3>
                  <p>
                  In a sea of template and AI created websites, my goal is priorize a information rich website over a content rich website.
                  </p>
                <h3>Scalability and Project Support</h3>
                  <p>
                  A part of this website was to have a domain to support future projects that may require web infastrucre.
                  Currently I plan to use this site for a ground station GUI of my flight computer.
                  </p>
                <h3>Show dont tell</h3>
                  <p>
                  This website try to link every skill and claim in my resume to a project that is described in depth to show how I demonstrate a capability.
                  </p>
        </section>
        <section>
            <h2>Technical Considerations and Priorities</h2>
          
                <h3>Why PHP</h3>
                  <p>
                  I chose to code in PHP due to it being the most widely used web language and as a way to get started in web development.
                  </p>
                <h3>Why Railway</h3>
                  <p>
                  I chose to use Railway for its scalability, and quick of creation website infastructure such as databases, git deployments, and more.
                  I know of several companies that use it and I wanted to learn its workflow.
                  </p>
        </section>
    </section>

</html>
