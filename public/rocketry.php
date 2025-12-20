<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>V1.02</title>
        
    </head>
    <main class="project">
        <section class="hero">
            <h1>Active Control Rocketry System</h1>
            <p>
                A custom avionics and telemetry system for experimental rocketry,
                featuring LoRa communications, onboard sensing, and real-time ground visualization.
            </p>
        </section>

        <section>
            <h2>System Overview</h2>
            <ul>
                <li>Custom PCB with ESP-based controller</li>
                <li>LoRa telemetry at 937 MHz</li>
                <li>Servo-actuated fin control</li>
                <li>GPS (NEO-6M), IMU, magnetometer</li>
            </ul>
        </section>



</html>
