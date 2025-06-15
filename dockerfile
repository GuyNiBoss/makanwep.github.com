FROM php:8.2-apache

# คัดลอกไฟล์ทั้งหมดไปยัง DocumentRoot ของ Apache
COPY . .
# เปิดใช้งาน mod_rewrite (หากคุณใช้ .htaccess)
RUN a2enmod rewrite

# เปิดพอร์ต 80 สำหรับ Railway
EXPOSE 80 