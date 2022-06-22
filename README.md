# Phel Snake

A cli-game written in [Phel](https://phel-lang.org/).

## How to play

#### Using Docker

1. Clone this repo
2. Build the image: `docker-compose up --build -d`
3. Run the game: `docker exec -ti -u dev phel_snake vendor/bin/phel run src/game.phel`

#### Locally (no Docker)

1. Ensure you have PHP `>=8.0`
   1. Some help about how to install multiple PHP versions locally on [linux](https://github.com/phpbrew/phpbrew) and [Mac](https://github.com/shivammathur/homebrew-php)
2. Ensure you have [composer](https://getcomposer.org/composer-stable.phar)
3. Clone this repo
4. Install the dependencies: `composer install`
5. Run the game: `vendor/bin/phel run src/game.phel`

#### Demo

![](img/demo-snake.webp)