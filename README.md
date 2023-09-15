# unifi-capture-email

#### Bla bla bla

## Installation des pré-requis pour PHP

Installation des paquets nessaisaires a l'installateur de php 
```
apt-get -y install apache2 nano curl composer software-properties-common
```
Mise en place du repo de php
```
add-apt-repository ppa:ondrej/php
```
Actualisation des packets
```
apt-get update
```

## Installation de PHP

Installation de php et de ces modules
```
apt-get install -y --allow-unauthenticated php7.2 php-pear php7.2-curl php7.2-dev php7.2-xml php7.2-gd php7.2-mbstring php7.2-zip php7.2-mysql php7.2-xmlrpc php-curl libapache2-mod-php
```
Redemarage du service apache
```
service apache2 restart
```

## Installation du portail

Creation du repertoire web pour le portail
```
mkdir -p /var/www/html/guest/s/default && cd /var/www/html/guest/s/default
```

Telechargement du portail
```
wget https://raw.githubusercontent.com/luucfr/unifi-capture-email/main/connecting.php
wget https://raw.githubusercontent.com/luucfr/unifi-capture-email/main/index.php
```

Installation de l'api unifi
```
composer require art-of-wifi/unifi-api-client
```
