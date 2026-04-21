# Game modes

## Single-player (default)

Classic snake with all the bells on: the snake grows when it eats a
goal, the speed ramps up with your score, and power-ups, combos, and
level progression are active. Hitting a wall, your own tail, or an
obstacle ends the run.

## Two-player

Two snakes share the same board. Player 1 drives with the arrow keys,
player 2 with `WASD`. A single goal is shared — whoever eats it scores.
A snake dies on walls (unless `wrap` is set), on self-collision, or
when it runs into the opponent's body. The game ends as soon as either
snake dies, and a P1/P2/Draw banner is shown.

Power-ups, combos, and level walls are disabled in two-player mode to
keep the match symmetric.

```bash
vendor/bin/phel run src/main.phel two-player
```
