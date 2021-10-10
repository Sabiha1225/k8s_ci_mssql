Connect with mssql container
docker exec -it containerid bash
connect locally with Sqlcmd
/opt/mssql-tools/bin/sqlcmd -S localhost -U SA -P "<YourNewStrong@Passw0rd>"

Create a new Database
CREATE DATABASE ciapp
GO

View created database
SELECT Name from sys.Databases
GO

Switch context to ciapp databse
USE ciapp

Create a DB user
CREATE LOGIN localhost WITH PASSWORD = 'Admin123';
GO

-- Creates a database user for the login created above.  
CREATE USER localhost FOR LOGIN localhost;
GO

