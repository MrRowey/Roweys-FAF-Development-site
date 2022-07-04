FROM php:8-0-apache
COPY src/ /
RUN git clone https://github.com/MrRowey/Roweys-FAF-Development-site.git
WORKDIR /var/www/html
EXPOSE 80
