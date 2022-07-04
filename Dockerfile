FROM ubuntu:lts
RUN sudo apt install apache2
RUN sudo apt install php libapache2-mod-php php-mysql
COPY src/ /
RUN git clone https://github.com/MrRowey/Roweys-FAF-Development-site.git
WORKDIR /var/www/html
EXPOSE 80
