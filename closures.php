<?php

$greet = function (Closure $lang, $name)
{
    return $lang($name);
};

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};

echo $greet($en, 'Rich');