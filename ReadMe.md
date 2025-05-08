# Steps

## Steps to configure mysql server
1. Opem XAMPP, Start Mysql, then start Apache
    This will start the mysql server (backed by Maria DB) to run at port 3007. You can connect to it from the `shell` in `XAMPP` using below command -
    ```
    mysql -u root
    ```
    There you can explore the database server with below sql queries -
    ```
    SHOW DATABASES;
    SHOW SCHEMAS;
    USE <schema_name>;
    SHOW TABLES;
    etc.
    ```
2. Connect to the mysql server by clicking on `shell` in `XAMPP`. This will open a new `CMD` window with `#` prompt. 
    Run the below commads -
    ```
    mysql -u root
    ````
    ```
    GRANT ALL PRIVILEGES ON *.* TO 'rupesh'@'%' IDENTIFIED BY '12345678';
    ```
    ```
    quit;
    ```
3. Connect to the mysql server again as the user `your_name` (rupesh).
    ```
    mysql -u rupesh -p
    12345678
    ```
    ```
    create database onlinebook;
    ```
4. Open the sql file onlinebook.sql and run all the DDL queries one by one into the sql prompt. 
You can connect to the mysql server from Mysql Workbench using the same connection parameters. Then you can run the above DDL queries there instead (the easy way).
5. Open the file in project includes\connection.php and update the user and password.
5. 