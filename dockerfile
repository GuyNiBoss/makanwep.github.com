# ใช้ PHP เวอร์ชัน 8.2 พร้อม Apache
FROM php:8.2-apache

# เปิด mod_rewrite (ถ้าใช้ .htaccess)
RUN a2enmod rewrite

# คัดลอกไฟล์ทั้งหมดของคุณไปยังโฟลเดอร์เว็บของ Apache
COPY . /var/www/html/

# กำหนด permission ถ้าจำเป็น
RUN chown -R www-data:www-data /var/www/html

# เปิดพอร์ต 80 (พอร์ต default ของเว็บ)
EXPOSE 80