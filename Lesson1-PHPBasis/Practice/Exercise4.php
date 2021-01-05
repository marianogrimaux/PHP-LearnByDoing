<?php

/**
 * A) Loops
 *
 * You took a freelance job to create a clock in PHP
 * The clock should count from 1 to 10 seconds.
 *
 * Create at least 3 solutions for this problem using loops.
 *
 * Hint : Use the php function sleep(1) so the count is accurate.
 *
 */




/**
 *  Multidimensional arrays.
 *  A flight agency is tracking how many seats are available in the plains.
 *  they've got the information, but want you to show it in a more human friendly way.
 *
 *  Below you'll find an array containing the data.
 *
 * Your output should be :
 *  Flight number: , origin: , destination: , available seats:
 *
 * Amount of flights with no seats available.
 *
 * Amount of national flights.
 *
 * Amount of international flights.
 *
 * The flight number with more seats available.
 */

$flights = [
    "National" => [
        [1958, "BUE", "MZA", 1],
        [2233, "BUE", "CBA", 3],
        [2343, "BUE", "MDP", 0],
        [2257, "BUE", "CBA", 3],
        [2237, "CBA", "MZA", 5],
        [2518, "CBA", "MDP", 24]
    ],
    "International" =>
    [
        [1958, "EZE", "GRU", 33],
        [2233, "EZE", "CDG", 12],
        [2343, "GRU", "MAD", 0],
        [2257, "GRU", "EZE", 5],
        [2237, "CDG", "MAD", 3],
        [2518, "CDG", "GRU", 2]
    ]
];