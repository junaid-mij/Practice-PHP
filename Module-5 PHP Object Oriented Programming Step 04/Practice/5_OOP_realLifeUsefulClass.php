<?php

/**
 * Convert Hex to RGB Color:
 *
 * ltrim()      : In PHP, ltrim() is a built-in function that is used to remove any leading white space characters or other specified characters from the beginning of a string. The name "ltrim" is short for "left trim", and the function operates on the left side of the string.
 *                Syntax: ltrim (string $str, string $characters = " \t\n\r\0\x0B" ) : string
 * list()       : In PHP, list() is a language construct that is used to assign variables to the values of an array or iterable. It allows you to assign multiple variables at once, using the values of an array or iterable.
 * sscanf()     : In PHP, sscanf() is a function that is used to parse input from a string according to a specified format. The function reads input from a string and assigns values to variables based on a specified format string.
 *
 */

echo "5 Writing a Real Life Useful Class: \n";

//Hexa to RGB Converter:
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    function getColor()
    {
        return $this->color;
    }
    function getRGBColor()
    {
        return [$this->red, $this->green, $this->blue];
    }
    function readRGBColor()
    {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
    }
    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    function parseColor()
    {
        if ($this->color) {
            [$this->red, $this->green, $this->blue] = sscanf($this->color, '%02x%02x%02x');
        } else {
            [$this->red, $this->green, $this->blue] = [0, 0, 0];
        }
    }
    function getRed()
    {
        return $this->red;
    }
    function getGreen()
    {
        return $this->green;
    }
    function getBlue()
    {
        return $this->blue;
    }
}

$myColor = new RGB("#ff0000");
$myColor->readRGBColor();
//echo $myColor->getRed ();

?>
