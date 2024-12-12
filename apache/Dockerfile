# Use Ubuntu base image
FROM ubuntu:latest

# Install Apache, PHP, and mysqli
RUN apt-get update && \
apt-get install -y apache2 php libapache2-mod-php php-mysqli && \
apt-get clean
# Copy website files into container
COPY . /var/www/html
# Expose port 80 to make the web server accessible
EXPOSE 80
# Command to run Apache
CMD ["apachectl", "-D", "FOREGROUND"]