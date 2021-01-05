<?php

/**
 * E3 A)
 *  We need to find Martin, and we have a list of people
 *  Once martin is found, we need to inform in which position of the list he was.
 *
 *  The output should be the following: I found Martin, he is in the number X of the list.
 *
 *  Hint: Remember that the first position of an array is 0.
 */

$input = ["John","Mike","Adam","Richard","Martin","Sven"];



/**
 * E3 B)
 *
 * There's a shop that needs to apply discounts to some products.
 * The discount amount varies depending on the category of the products:
 *
 * Shoes : 10 percent
 * Shirts: 15 percent
 * Hats: 5 percent
 *
 * The products that do not belong the categories listed will have no discount.
 *
 * For each product processed, generate a output with the following format:
 *
 *  White shirt of category: Shirts , will have a discount of : 10 percent.
 *
 *  For those with no discount:
 *
 *  Red scarf of category: Scarf. will have no discount.
 *
 * hint: Combine loops and conditional statements.
 *
 * The input is available below.
 */

$products = [
    "Red scarf" => "Scarfs", "White shirt" => "Shirts",
    "Red shirt" => "Shirts", "Tennis hat" => "Hats",
    "Tennis shoes" => "Shoes", "BLue scarf" => "Scarfs",
    "Blue scarf" => "Scarfs", "Blue shirt" => "Shirts",
    "Apple Watch" => "Watches", "Pink shirt" => "Shirts",
    "Brown shirt" => "Shirts", "Baseball hat" => "Hats",
    "Skate shoes" => "Shoes", "Trecking shoes"
];
