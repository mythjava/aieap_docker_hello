FROM php:5.6-apache

# アプリケーションファイルを配置
COPY src/ /var/www/html/

EXPOSE 80

# サービス起動
CMD ["apache2-foreground"]
