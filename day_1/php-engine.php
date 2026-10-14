<?php

declare(strict_types=1);

function getAge(): int
{
    return "19";
}

echo getAge();

//PHP Fatal error:  Uncaught TypeError: getAge(): Return value must be of type int, string returned in /home/asus/learn-php/day_1/php-engine.php:7
//Stack trace:
//#0 /home/asus/learn-php/day_1/php-engine.php(10): getAge()
//#1 {main}
//  thrown in /home/asus/learn-php/day_1/php-engine.php on line 7

