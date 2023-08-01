# Verwende das offizielle PHP-Image als Basis
FROM php:8.0-apache

# Installiere die ODBC-Unterstützung für PHP und aktiviere PDO-ODBC
RUN apt-get update && apt-get install -y gnupg curl unixodbc-dev net-tools && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixODBC,/usr \
    && docker-php-ext-install pdo_odbc pdo_mysql

# Installiere den ODBC-Treiber
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update && ACCEPT_EULA=Y apt-get install -y msodbcsql17

# Setze die ODBC-Verbindungszeichenfolge als Umgebungsvariable im Container
ENV ODBC_CONNECTION_STRING "Driver={ODBC Driver 17 for SQL Server};Server=192.168.9.19;Database=SBODemoSCM;Uid=sa;Pwd=sa"

# Starte den Webserver (in diesem Fall wird der eingebaute Webserver von PHP verwendet)
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
