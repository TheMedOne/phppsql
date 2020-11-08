<?php
	// Initialize connection variables.
	$host = "medone.postgres.database.azure.com";
	$database = "postgres";
	$user = "adminmedone@medone";
	$password = "Themedone@2020";

	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password") 
		or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
	print "Successfully created connection to database.<br/>";
    //host=medone.postgres.database.azure.com port=5432 dbname={your_database} user=adminmedone@medone password={your_password} sslmode=require