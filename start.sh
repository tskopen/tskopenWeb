#!/bin/ash

# Clean tmp folder (optional)
rm -rf /var/www/html/tmp/*

echo "⟳ Starting PHP-FPM..."
php-fpm &  # Runs in background

echo "⟳ Starting Node..."
node /node/server.js &

echo "⟳ Starting Nginx..."
nginx -g "daemon off;"  # Runs in foreground to keep container alive
