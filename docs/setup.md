# Setup

## Docker

```bash
docker-compose up --build -d
docker exec -it phel_snake ./tools/composer play
```

## Local

Requires PHP `>=8.3`
([linux](https://github.com/phpbrew/phpbrew) |
[Mac](https://github.com/shivammathur/homebrew-php)).

```bash
./tools/composer install
./tools/composer play
```

## Running directly

`composer play` is a shortcut for:

```bash
vendor/bin/phel run src/main.phel [options]
```

See [options](options.md) for the full list of flags.
