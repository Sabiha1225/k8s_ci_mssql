FROM php:7.4.23-apache

WORKDIR /var/www/html
#ADD site.conf /etc/apache2/sites-available/000-default.conf
COPY src/ .
USER root
RUN chmod 777 ./system
RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

#RUN sed -ri -e 's!/var/www/html!/var/www/html/public/html!g' /etc/apache2/sites-available/*.conf
#RUN sed -ri -e 's!/var/www/!/var/www/html/public/html!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

ENV ACCEPT_EULA=Y

#RUN apt-get install php-common

RUN apt-get update && apt-get install -y nano wget curl gnupg2

#RUN docker-php-ext-install bcmath sockets pcntl 

RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - 
RUN curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list > /etc/apt/sources.list.d/mssql-release.list 
RUN apt-get update 
RUN apt-get -y --no-install-recommends install msodbcsql17 unixodbc-dev 
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-enable sqlsrv pdo_sqlsrv

RUN echo "extension=pdo_sqlsrv.so" >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/30-pdo_sqlsrv.ini 

RUN echo "extension=sqlsrv.so" >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/30-sqlsrv.ini

#RUN phpenmod sqlsrv pdo_sqlsrv
    
RUN service apache2 restart
