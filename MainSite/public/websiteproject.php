<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'config.php'; ?>
    <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
    <title>Website</title>
</head>
<body>

<?php include "navbar.php"; ?>

<main class="project">

    <header>
        <h1>Creating my own website</h1>
        <div class="subtitle">
            Here's a review of my design considerations. I decided not to include everything I did because the website itself speaks to that. I did not use a template.
        </div>
    </header>

    <section>
        <h1>Introduction</h1>
        <p>
            This website is coded from scratch using PHP. 
            It is supported by a foundation of Nginx and Railway infrastructure. 
            This website is an attempt to expand my web development knowledge.
        </p>
    </section>

    <section>
        <h2>Design Considerations and Priorities</h2>
        
        <h3>Encourage ease of reading and understandability</h3>
        <p>
            In a sea of template and AI-created websites, my goal is to prioritize an information-rich website over a content-rich website.
        </p>

        <h3>Scalability and Project Support</h3>
        <p>
            Part of this website’s purpose is to have a domain to support future projects that may require web infrastructure.
            Currently, I plan to use this site for a ground station GUI of my flight computer.
        </p>

        <h3>Show, Don’t Tell</h3>
        <p>
            This website links every skill and claim in my resume to a project that is described in depth, demonstrating my capabilities.
        </p>
    </section>

    <section>
        <h2>Technical Considerations and Priorities</h2>

        <h3>Why PHP</h3>
        <p>
            I chose to code in PHP because it is one of the most widely used web languages and a good way to get started in web development.
        </p>

        <h3>Why Railway</h3>
        <p>
            I chose to use Railway for its scalability and the quick creation of website infrastructure such as databases, Git deployments, and more. 
            I am familiar with several companies that use it, and I wanted to learn its workflow.
        </p>
    </section>

</main>

</body>
</html>
