<?php

$version = (float) substr(class_exists('\Twig\Environment') ? \Twig\Environment::VERSION : \Twig_Environment::VERSION, 0, 3);

if ($version >= 3) {
    abstract class Twig_Fuel_Extension_Wrapper extends \Twig\Extension\AbstractExtension 
    {

    }
}
else
{
    abstract class Twig_Fuel_Extension_Wrapper extends Twig_Extension
    {

    }
}