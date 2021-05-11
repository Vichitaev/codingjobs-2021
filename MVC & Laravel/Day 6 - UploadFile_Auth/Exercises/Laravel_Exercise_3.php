<?php


/*

    Based on the flower exercise.

	Doc : https://laravel.com/docs/8.x/authentication

	Goal of this exercise is to implement authentication inside Laravel.
    
	Step 1 : 

		Implements the authentication in a new Laravel project or in a existing one.

	Step 2 :

		Change the user migration.
		User table should now have those columns :
			- first_name (string)
			- last_name (string)
			- city (string)
			- postal code (numeric)
			- role (boolean)
			- email
			- email_verified_at
			- password
			- remember token
			- updated_at
			- created_at

		You also have to edit the register form to match.

	Step 3 :

		Create a 'home.blade.php' page
		This page will display a welcome message and links to register/login page.

		When the user is not loggued in, he should be redirect to this page.
		
		PS : Do not use welcome.blade.php view.

	Step 4 :

		Anyone can access the flowers list page and flower details page.
		
		Hide the edit and delete button on the flowers list when user is not loggued in.
		Only loggued in user can access delete and edit page.

	Step 5 :

