<?php


class Shape
{
    public string $name;
    public string $color;

    public function __construct(string $name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}