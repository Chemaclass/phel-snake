# Phel Snake

A cli-game written in [Phel](https://phel-lang.org/).

## How to play

#### Using Docker

1. Clone this repo
2. Build the image and run the container: `docker-compose up --build -d`
3. Run the game: `docker exec -it phel_snake ./tools/composer play`

#### Locally (no Docker)

1. Ensure you have PHP `>=8.0`
   1. Some help about how to install multiple PHP versions locally on [linux](https://github.com/phpbrew/phpbrew) and [Mac](https://github.com/shivammathur/homebrew-php)
2. Clone this repo
3. Install the dependencies: `./tools/composer install`
4. Run the game: `./tools/composer play`

Alternatively, you can run the game using the `phel run` command, and define the width and height of the board, and optionally a debug flag.

```bash
vendor/bin/phel run src/game.phel width=40 height=15 debug
```

## Demo

![](img/demo-snake.webp)