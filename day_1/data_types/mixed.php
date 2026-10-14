<?php

//mixed - istalgan data type berish mumkin
// int|string|bool|null|array|object

declare(strict_types=1);

function getData(): mixed
{
    return 2334;
}
echo getData();