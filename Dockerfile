FROM php:7.4-apache

# Instalar las extensiones necesarias
RUN docker-php-ext-install mysqli