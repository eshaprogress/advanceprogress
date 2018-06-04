# Development

To quickly get started with this app you can use docker (https://docs.docker.com/get-started/)

This will simplify installing dependencies and managing configuration. First install docker and then
simply run `docker-compose up`. The app should now be running on on port 8000.

To shut down the server use `docker-compose down`


Development
==============
initial build:
- npm install
- composer install

- composer dev-update `updates IDE tooling autocompletes`

Strip Debugging
=============
- https://stripe.com/docs/testing `Has a list of test CreditCard Numbers`

Development Environment w/ Laradock
==============
- Install Laradock `git clone https://github.com/Laradock/laradock.git`
- Run Laradock Containers `cd laradock && docker-compose up -d nginx mysql phpmyadmin workspace`
- Go inside of workspace Container `cd laradock && docker-compose exec workspace bash`