# Phel Snake

A CLI snake game written in [Phel](https://phel-lang.org/).

![](img/demo-snake.webp)

## Quick start

```bash
docker-compose up --build -d
docker exec -it phel_snake ./tools/composer play
```

Or locally (PHP `>=8.3`):

```bash
./tools/composer install
./tools/composer play
```

Use the arrow keys to move, `P` to pause, `R` to replay the last run
on the game-over screen.

## Documentation

- [Setup](docs/setup.md)
- [Controls](docs/controls.md)
- [Game modes](docs/modes.md) — simple, full, two-player
- [Features](docs/features.md) — power-ups, combos, obstacles, levels, wrap, high-score, replay
- [Options](docs/options.md) — full CLI reference
