<?php

class Creature
{
    protected $_name;
    protected $_color;
    protected $_gender;

    public function __construct($name, $color, $gender)
    {
        $this->_name = $name;
        $this->_color = $color;
        $this->_gender = $gender;
    }
}
