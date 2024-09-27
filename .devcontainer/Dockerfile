#build Ansible demo environemnt
FROM ubuntu:jammy
ENV DEBIAN_FRONTEND noninteractive
ENV LANG C.UTF-8
ENV pip_packages "ansible cryptography"
 
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        apt-transport-https \
        ca-certificates \
        curl \
        jq \
        lsb-release \
        python3-pip \
        unzip \
        nginx \
        bash \
        php8.1-fpm \
        php8.1-curl \
        nano \
        openssl \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean


RUN pip install --upgrade pip \
    && pip install $pip_packages \
    && pip install ansible

#generate self signed cert     
RUN openssl req -x509 -newkey rsa:4096 -keyout /etc/ssl/private/cert.key -out /etc/ssl/certs/cert.crt -sha256 -days 365 -nodes -subj "/C=US/ST=MA/L=Boston/O=selfsigned/OU=selfsigned/CN=selfsigned"

#Copy nginx and php configuration files
COPY www.conf /etc/php/8.1/fpm/pool.d/www.conf 
COPY index.php /var/www/html/index.php
COPY default /etc/nginx/sites-enabled/default
COPY default /etc/nginx/sites-avaliable/default
COPY nginx-ssl.conf /etc/nginx/snippets/nginx-ssl.conf

RUN service nginx start \ 
    && service php8.1-fpm start

CMD bash
