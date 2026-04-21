# Options

Pass flags after the entry point:

```bash
vendor/bin/phel run src/main.phel [options]
```

## Board

| Option | Description |
|--------|-------------|
| `width=N` | Board width |
| `height=N` | Board height |

## Modes

| Option | Description |
|--------|-------------|
| `two-player` | [Two snakes](modes.md#two-player) share the board (arrows vs WASD) |

## Gameplay

| Option | Description |
|--------|-------------|
| `god-mode` | Disable the score-based speed increase |
| `wrap` | Snake wraps around walls instead of dying |
| `obstacles[=N]` | Scatter N obstacles (default 10) on the board |
| `no-power-ups` | Disable golden/slow-down goals |
| `no-levels` | Disable level progression |
| `level-every=N` | Goals needed per level (default 5) |

## Debug

| Option | Description |
|--------|-------------|
| `debug` | Show internal stats below the board |

## Examples

Fast, wide board, no speed-up:
```bash
vendor/bin/phel run src/main.phel width=60 height=20 god-mode
```

Obstacle-filled arena with wrap-around:
```bash
vendor/bin/phel run src/main.phel obstacles=20 wrap
```

Two-player duel on a big board:
```bash
vendor/bin/phel run src/main.phel two-player width=60 height=25
```
