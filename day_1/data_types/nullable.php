<?php

declare(strict_types=1);

function getPhone(): ?string // null|string
{
    return "+12166993329";
}
echo getPhone();

function getPhoneNull(): ?string
{
    return null;
}
echo getPhoneNull();