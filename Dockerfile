FROM webdevops/php-nginx-dev:8.1

WORKDIR /app

# Customize Nginx
COPY ./docker/vhost.conf /opt/docker/etc/nginx/vhost.conf
