const ws = new WebSocket('wss://my-websocket-service.up.railway.app');

ws.on('open', () => ws.send('Hello server'));
ws.on('message', msg => console.log('Received:', msg));
