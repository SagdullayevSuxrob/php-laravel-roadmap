<?php

// belgilangan typelardan birini qabul qilishi mumkin

function getValue(): int|string
{
    return "Hello";
}

echo getValue();

echo "\n";

function getPrice(): int|string
{
    return 18000;
}
echo getPrice();