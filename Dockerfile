##Build Docekr Image
FROM ubuntu:20.04
RUN sudo apt install apache2 -y
RUN sudo apt install php libapache2-mod-php php-mysql -y
RUN git clone https://github.com/MrRowey/Roweys-FAF-Development-site.git
WORKDIR /var/www/html
EXPOSE 80
