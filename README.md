### Housemates

Housemates is a web app made with the PHP Laravel framework that allows you and your roommates to share and coordinate shopping lists, chores, itineraries, contact information, and more. Visit http://housemates.fun to get started!

More detailed design information is available at: https://github.com/SCCapstone/CapstoneProject/wiki/Design

## Technology

* Language: primarily [PHP](https://www.php.net)
* Framework: [Laravel](https://github.com/laravel/framework)
* IDE: [Visual Studio Code](https://code.visualstudio.com)
* Hosting: [DigitalOcean](https://www.digitalocean.com)

## External Dependencies

# Optional

* [Composer](https://github.com/composer/composer)
* [Laravel](https://github.com/laravel/framework)
* [Visual Studio Code](https://code.visualstudio.com) or desired IDE
* [XAMPP](https://www.apachefriends.org)
* [MySQL](https://www.mysql.com/)

## Setup

User must install Laravel and Composer.<br>
The user must clone repository onto their local machine.<br>
The user must  also have xampp and MySQL installed in order to run an apache and MySQL database server locally. 

If the user would like to create a new laravel project the commands are as follows:<br>
User must install Laravel and Composer.<br>
Then the user must navigate into their Laravel folder in the command line.<br>
Next the user must type "laravel new projectName"

## Running

Developer will use command:
"php artisan serve" in command line within project vscode directory to run local server for viewing webpages

# Deployment

For deployment the user will have to contact Camryn or another member for the necessary username and password. This will give them access to the Forge account where deployment will be possible.

# Testing

The unit tests are in `/tests/Unit`. They are automatically integrated into Laravel with unitphp. No third-party software is necessary to unit tests. Unit tests are run using either the command 'php artisan test' or './vendor/bin/unitphp' but both achieve the same result.

The behavioral tests are in `/tests/Behavioral/`. They are built using the Selenium IDE. A guide for installing and using the Selenium command line runner can be found [here](https://www.seleniumhq.org/selenium-ide/docs/en/introduction/command-line-runner/), or, alternatively, you can [use the Selenium IDE browser extension](https://www.selenium.dev/selenium-ide/docs/en/introduction/getting-started).

## Testing Technology

We do not plan on installing software to automate testing. We will create test users in testCase.php that will create users and run functions to check certain aspects of the web application.  

## Running Tests

We will run our tests through testCase.php. Compiling and running testCase.php will automatically run our application by using the file CreateApplication.php.

## Style

This project will use the [PSR-12](https://www.php-fig.org/psr/psr-12/) style guide from the PHP Framework Interoperability Group.

## Maintainers

Camryn Reid: ctreid@email.sc.edu<br>
Colin Bowes: cbowes@email.sc.edu<br>
Lauren Lee: lel2@email.sc.edu<br>
Nicolas Becker: nbecker@email.sc.edu<br>
Roscoe Burk-Moody: roscoeb@email.sc.edu<br>
