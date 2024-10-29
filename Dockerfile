# Usando a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instala as extensões necessárias para conectar ao MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite para usar .htaccess
RUN a2enmod rewrite

# Adicionar ServerName para evitar aviso
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Configuração para permitir que o Apache sirva arquivos do diretório principal
RUN echo "<Directory /var/www/html/> \
       Options Indexes FollowSymLinks \
       AllowOverride All \
       Require all granted \
       DirectoryIndex index.php \
   </Directory>" > /etc/apache2/sites-available/000-default.conf

# Define o diretório de trabalho para o Apache
WORKDIR /var/www/html

# Copia todos os arquivos da raiz e do src para o diretório do Apache
COPY . /var/www/html/
