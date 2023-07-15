COMPONENT?=test
say_hello:
	echo "Hello World"

start:
	docker-compose up -d

stop:
	docker-compose down

install:
	docker-compose run app composer install

migrate:
	docker-compose run app php artisan migrate

component:
	docker-compose run app php artisan make:livewire $(COMPONENT)

key:
    docker-compose run app php artisan key:generate
