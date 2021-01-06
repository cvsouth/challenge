##### Installation

* Rename `.env.example` to `.env` and enter the usual credentials
* `composer install`
* `php artisan passport:install`
* `php artisan migrate`

##### Usage

* Register an account
* After registration take a note of your API token
* Use the token to add messages via the API
  * `POST` `//domain/api/message/store`
  * Message is given as POST data called `content`
* Messages can then be viewed at `GET` `//domain/`

You can also regenerate your API token using the link in the user menu.
