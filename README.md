# angularpsql

script.js is the main file, which is included in the index.html along with dependencies angular.js and angular-route.js.
each module is defined inside the script.js which is the format of angular.


components folder
contains the dashboard.html, login form , register form, home.html.

The server communication is done by php files.#which are register.php , server.php(login).
the php file recieves the data from the login and register forms and initiates a result comparing with psql database produces a result , which is fetched by main script.js and displayed to user.
