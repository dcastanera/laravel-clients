# Laravel Clients

This package was built for Laravel 5 and provides Client objects with Contacts &
Configuration Items. Users can also be assigned to Clients and has a many to
many relationship where you can have more than one user assigned to a client and
more than one client assigned to a user.  

This package makes the following objects and variables available:  

#### Clients
- name  
- address
- address2
- city
- state
- zip
- phone
- website

#### Contacts
- first_name  
- last_name
- address
- address2
- city
- state
- zip
- phone
- email

#### Configuration Items
- name  
- url
- username
- password

## Installation

#### Composer
In order to install this package you need to use composer. Simply type the
following into your command line interface:


    composer require dcastanera/laravel-clients

#### Service Provider
Next we need to register the package's service provider. In the "providers"
section of your config/app.php file, add the following line to the list:


    DCastanera\Clients\ClientServiceProvider::class,


#### Publish Files
Now that everything is loaded, in order for things to work correctly, we need to
copy or publish some files into your Laravel installation. Enter the following
command to publish the files:


    php artisan vendor:publish


#### Database Migration
One of the things we did with the publish command we just used was copy a database
migration file into your database/migrations folder. Enter the following command
to run the migration and install the necessary tables in your database.


    php artisan migrate


## Usage
