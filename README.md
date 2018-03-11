[![Build Status](https://travis-ci.org/A-Lawrence/teaching-concepts-katas-bowling-score.svg?branch=master)](https://travis-ci.org/A-Lawrence/teaching-concepts-katas-bowling-score)  [![Code Climate](https://codeclimate.com/github/A-Lawrence/teaching-concepts-katas-bowling-score/badges/gpa.svg)](https://codeclimate.com/github/A-Lawrence/teaching-concepts-katas-bowling-score)  [![Issue Count](https://codeclimate.com/github/A-Lawrence/teaching-concepts-katas-bowling-score/badges/issue_count.svg)](https://codeclimate.com/github/A-Lawrence/teaching-concepts-katas-bowling-score)  [![StyleCI](https://styleci.io/repos/88549186/shield?branch=master)](https://styleci.io/repos/88549186)

# Programming Concepts (Kata: Bowling Score)

## Definition of Kata

> An individual training exercise (in Karate or other martial art)

## Pre-requisite knowledge

* A game of bowling is made up of 10 frames.
* Each frame can consist of two rolls.
  * A roll where no pins are knocked down is known as a "Gutterball"
  * A frame where all pins are knocked down in *the first* roll is known as a *Strike*
  * A frame where all pins are knocked down across both rolls is known as a *Spare*.
* A frame's score is the value of the pins knocked down, unless:
  * It is a strike - in which case it is 10, *plus* the score of the *next two rolls*.
  * It is a spare - in which case it is 10, *plus* the score of the *next* roll.
* In the situation where the final frame is a strike, two extra rolls are awarded (totally 11 rolls for the whole game)
* In the situation where the final frame is a spare, one extra roll is awarded (totalling 11 rolls for the whole game)


## Test Cases

### Test Case 1

A game of gutterballs, equals 0.

### Test Case 2

A game where every roll knocks down 1 pin, scores 20.

### Test Case 3

A game where the first frame is a spare, the second is a 1, and all others are gutterballs, scores 12.

### Test Case 4

A game where the first frame is a strike, the second is a 9, and all others are gutterballs, scores 28.

### Test Case 5

A perfect game, of strikes on every roll, scores 300.
