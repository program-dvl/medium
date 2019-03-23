# Project Setup
 1.)  Clone this repo.
 
 2.) ``` composer install ```
 
 3.)  create .env file and configure the .env file for database name, username and password.
 
 4.) ```  php artisan key:generate ```
 
 5.) ``` php artisan storage:link ```
 
 6.) ``` php artisan migrate ```

 7.) ``` php artisan db:seed ```

 8.) ``` php artisan serve ```
 
 
 # Project URL
 - Frontend : http://127.0.0.1:8000/
 - Admin Panel : http://127.0.0.1:8000/admin
    ###### Credentials for admin user:

    1.) Email : mindvalley@admin.com
    
    2.) Password : 12345678
 
 # Features of the projects
 - Admin side login and registration
 - Admin panel to post articles.
 - Ability to add one or more photos to the article through redactor.
 - Functionality to tag Articles
 - Frontend to list and display articles.
 - Calculate read time as medium.com according to 256 word/Minute.
 
 **Note :** Faker has been used to generate one user for admin panel and 10 dummy articles with random html as body of articles. Initially it will show Image ( no image ) in article listing. but at admin side we have feature to add multiple images in redactor and first image will be used in blog listing. 
 

