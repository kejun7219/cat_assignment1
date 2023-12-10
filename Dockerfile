FROM php:8-apache
COPY . /var/www/html
WORKDIR /var/www/html
RUN apt update
RUN apt install default-jre -y
CMD [ "php", "-S", "0.0.0.0:3000", "-t", "./src" ]