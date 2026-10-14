<?php

declare(strict_types=1);

function calculatePrice(int $count, float $price, bool $discount): string
{
    return "Done $count and $price and $discount";
}
echo calculatePrice(10, 15.5, true);
