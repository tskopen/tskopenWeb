FROM php:8.2-fpm-alpine
From node:18-alpine

# Install nginx
RUN apk add --no-cache nginx


WORKDIR /app
RUN npm install


# Create directories
RUN mkdir -p /run/nginx

# Copy configs and site files
COPY nginx.conf /etc/nginx/nginx.conf
COPY start.sh /start.sh
COPY public /var/www/html



# Permissions
RUN chmod +x /start.sh \
    && chown -R www-data:www-data /var/www/html

# Expose ports
EXPOSE 80 443 3000

CMD ["/start.sh"]
CMD ["node", "index.js"]
