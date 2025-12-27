FROM php:8.2-fpm-alpine
# Install nginx
RUN apk add --no-cache nginx


# copy from stage 1
COPY --from=node_builder /node /node


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
EXPOSE 80 443

CMD ["/start.sh"]
