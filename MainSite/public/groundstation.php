<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
        <title>GroundStationUI</title>
        <script src="https://cdn.plot.ly/plotly-3.3.0.min.js" charset="utf-8"></script>
        <script src="/js/plotly.js?v=<?php echo $version; ?>" defer></script>

    </head>

    <?php include "navbar.php"; ?>


    <body>
        <main class="project">

            <header>
                <h1>Groudnstation display for ARCS</h1>
                <div class="subtitle">
                    Portable UI for ARCS.
                </div>
            </header>
            <div>
                <h1>Introduction</h1>
                <p>
                    UNDER CONSTRUCTION FOR CURRENT PROJECT
                </p>
            </div>
            
            <div id="barometerchart" style="width:100%;height:400px;"></div>

<div id="log" style="border:1px solid #ccc; padding:10px; height:200px; overflow-y:auto;"></div>
<input id="command" placeholder="Enter command"/>
<button id="sendBtn">Send</button>

<script>
const log = document.getElementById('log');
const ws = new WebSocket('wss://websocket.tskopen.com');

// Connection established
ws.onopen = () => {
  log.innerHTML += '<p>Connected to WebSocket server</p>';
};

// Incoming messages
ws.onmessage = (event) => {
  log.innerHTML += `<p>Server says: ${event.data}</p>`;
};

// Send command to server
document.getElementById('sendBtn').onclick = () => {
  const cmd = document.getElementById('command').value;
  ws.send(JSON.stringify({ type: 'command', data: cmd }));
};
</script>







        </main>
    </body>

</html>
