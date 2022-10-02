# Phel Snake

A cli-game written in [Phel](https://phel-lang.org/).

## How to play

#### Using Docker

1. Clone this repo
2. Build the image and run the container: `docker-compose up --build -d`
3. Run the game: `docker exec -it phel_snake ./tools/composer start`

#### Locally (no Docker)

1. Ensure you have PHP `>=8.0`
   1. Some help about how to install multiple PHP versions locally on [linux](https://github.com/phpbrew/phpbrew) and [Mac](https://github.com/shivammathur/homebrew-php)
2. Clone this repo
3. Install the dependencies: `./tools/composer install`
4. Run the game: `./tools/composer start`

## Common Q/A

- How to **compile** and **play** the game? `./tools/composer start`
- How to just **compile** the game? `./tools/composer compile`
- How to just **play** the game? `./tools/composer play`

> After the game is compiled, you don't have to compile it again, so using directly the `play` command will 
give you a better user experience; the game will load way faster 🚀

## Demo

![](img/demo-snake.webp)