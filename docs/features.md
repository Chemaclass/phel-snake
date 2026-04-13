# Features

## Power-ups

Goals spawn with a random type in full mode (disable with
`no-power-ups`):

| Type | Glyph | Effect |
|------|-------|--------|
| Normal (~84%) | solid block | +1 score, grow by one |
| Golden (~8%) | `$` | +5 score, grow by one |
| Slow (~8%) | `~` | +2 score, halves game speed for 40 ticks |

The score bonus is applied before the combo multiplier (see below).

## Combo multiplier

Eating goals within 30 ticks of each other grows a combo counter. Each
eat multiplies the score delta by the current combo (capped at x5).
The combo resets when the window elapses without a new goal. The
current multiplier is displayed below the stats while a chain is
active.

## Obstacles

With `obstacles[=N]`, `N` random obstacle cells (default 10) are
scattered across the board. The snake dies on contact and goals never
spawn on obstacle cells. The area directly in front of the spawn is
reserved so you don't die on the first tick.

## Level progression

Every `level-every` goals (default 5), a new 3-cell wall segment is
added to the board, slowly increasing difficulty. Disable with
`no-levels`.

## Wrap-around

With `wrap`, the snake teleports to the opposite wall instead of dying
on boundary contact. Self-collision and obstacle contact still end the
run.

## High-score persistence

The best single-player score is stored in `~/.phel-snake-highscore`
and shown on the game-over screen. Beating it displays a `NEW HIGH
SCORE!` banner.

## Replay

Every single-player run seeds its PRNG with a random value and records
the input stream tick-by-tick. On the game-over screen, pressing `R`
replays the exact session — same spawn, same goal layout, same
keystrokes — deterministically. Any other key exits.
