# PHP + PHPMYADMIN + MYSQL EXAMPLE
This is a simple example of how to use PHP with MySQL and phpMyAdmin within a Docker compose.

## PHPMYADMIN credentials
- **Username**: root
- **Password**: root
- **DB_HOST**: db 
- **DB_PORT**: 3306
- **Database**: testdb
- **Table**: productos
- **Columns**:
  - id (int, primary key, auto increment)
  - nombre (varchar)
  - precio (float)

> **DB_HOST: db** is the name of the MySQL service in the docker-compose.yml file. it needs to be used as the host in phpmyadmin because phpmyadmin and mysql aren't in the same container.

