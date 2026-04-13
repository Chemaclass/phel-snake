# Phel Snake

A CLI snake game written in [Phel](https://phel-lang.org/).

![](img/demo-snake.webp)

## Versions

- **[Full version](src/full-version/game.phel)**: Snake speeds up after each goal
- **[Simple version](src/simple-version/game.phel)**: Just the snake and board

## Setup

### Docker

```bash
docker-compose up --build -d
docker exec -it phel_snake ./tools/composer play
```

### Local

Requires PHP `>=8.3` ([linux](https://github.com/phpbrew/phpbrew) | [Mac](https://github.com/shivammathur/homebrew-php))

```bash
./tools/composer install
./tools/composer play
```

## Controls

- **Arrow keys**: Move the snake
- **Space**: Accelerate (full version)
- **P**: Pause / resume

Game ends when the snake hits the border.

## Options

```bash
vendor/bin/phel run src/main.phel [options]
```

| Option | Description |
|--------|-------------|
| `width=N` | Board width |
| `height=N` | Board height |
| `god-mode` | Disable speed increase |
| `debug` | Show internal stats |
| `simple` | Play simple version |
| `wrap` | Snake wraps around walls instead of dying |

Example:
```bash
vendor/bin/phel run src/main.phel width=40 height=15 god-mode
```
