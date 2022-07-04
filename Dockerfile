##Build Docekr Image
FROM ubuntu
RUN apt update
RUN apt install -y apache2
RUN apt install -y apache2-utils
RUN apt install -y php php-mysql
RUN apt clean
RUN git clone https://github.com/MrRowey/Roweys-FAF-Development-site.git
COPY src/ src
WORKDIR /var/www/html
EXPOSE 80
