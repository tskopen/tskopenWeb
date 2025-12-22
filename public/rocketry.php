<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>V1.02</title>
        
    </head>
    <?php include "navbar.php"; ?>

    <main class="project">

        <header>
            <h1>Active Rocketry Control System &ndash; ARCS</h1>
            <div class="subtitle">
                Exploration of embedded systems and programming, and PCB development.
            </div>
        </header>

            <h1>Introduction</h1>
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

        <section>
            <h2>Structural Requirements</h2>
            <ul>
            <li>The rocket shall be constructed using a 75 mm Blue Tube airframe to enhance durability and support multiple flights.</li>
            <li>The rocket shall be structurally capable of withstanding flight speeds up to Mach 2.</li>
            <li>The rocket’s fins shall be actuated indirectly via mechanical linkages to reduce servo wear and minimize risk of mechanical failure.</li>
            <li>The rocket shall be fully recoverable via parachute deployment to enable soft landings and reuse.</li>
            <li>The rocket shall use a body tube size that prioritizes internal volume, ease of construction, and maintenance over maximum aerodynamic efficiency, while maintaining safe flyability.</li>
            <li>The rocket shall be capable of dual back-to-back launches, both with and without active servo control enabled.</li>
            <li>The rocket’s descent rate shall be limited to approximately 3–5 m/s to ensure safe recovery.</li>
            </ul>
        </section>

        <section>

        <h2>Ground Station Requirements</h2>

            <h3>Hardware Requirements</h3>
            <ul>
                <li>The ground station shall interface with a Raspberry Pi using a LoRa radio link to send and receive commands and telemetry.</li>
                <li>The ground station shall support wireless communication (e.g., RF or Bluetooth) as required for data exchange.</li>
                <li>The Raspberry Pi shall be equipped with a compact display, keyboard, and pointing device to allow field operation.</li>
                <li>The ground station shall operate from a portable battery supply for remote launch environments.</li>
            </ul>

            <h3>Software & User Interface Requirements</h3>
            <ul>
                <li>The ground station shall provide a user interface that is intuitive and easy to understand for operators.</li>
                <li>The user interface shall clearly display system status and telemetry in real time.</li>
            </ul>

            <h3>Telemetry & Command Requirements</h3>
            <ul>
                <li>The ground station shall display telemetry link strength to indicate communication reliability.</li>
                <li>The ground station shall display altitude, velocity, and temperature data received from the flight vehicle.</li>
                <li>The ground station shall display 9-axis IMU data, including accelerometer, gyroscope, and magnetometer readings.</li>
                <li>The ground station shall display the status of all GPIO and pyro channels.</li>
                <li>The ground station shall indicate command transmission and receipt status to confirm successful communication.</li>
                <li>The ground station shall display GPS position data for tracking and recovery.</li>
            </ul>
        </section>

    <section class="flightComputerRequirements">
        <h2>Flight Computer Requirements</h2>

        <h3>Architecture & Interfaces</h3>
        <ul>
            <li>The flight computer shall support connection to an independent external radio module to allow flexible placement and system architecture.</li>
            <li>The flight computer shall provide USB-C connectivity for configuration, data access, and firmware flashing.</li>
            <li>The flight computer shall provide general-purpose I/O (GPIO) pins to support future expansion and custom payloads.</li>
        </ul>

        <h3>Sensing & Control</h3>
        <ul>
            <li>The flight computer shall integrate a GPS receiver for position and recovery tracking.</li>
            <li>The flight computer shall integrate a 9-axis IMU (accelerometer, gyroscope, and magnetometer) for attitude and motion sensing.</li>
            <li>The flight computer shall integrate temperature and barometric pressure sensors for environmental and altitude estimation.</li>
            <li>The flight computer shall provide multiple pyro channels for recovery and deployment events.</li>
            <li>The flight computer shall provide multiple servo output channels for active control surfaces.</li>
        </ul>

        <h3>Power & Reliability</h3>
        <ul>
            <li>The flight computer shall support a minimum of one hour of continuous powered operation during active flight and ground testing.</li>
            <li>The flight computer shall support a low-power recovery mode capable of operating for at least 48 hours to aid post-flight recovery.</li>
        </ul>

        <h3>Data Logging & Status</h3>
        <ul>
            <li>The flight computer shall record flight and sensor data to an onboard SD card for post-flight analysis.</li>
            <li>The flight computer shall provide LED-based status indicators to communicate system state and fault conditions.</li>
        </ul>
    </section>

</html>
