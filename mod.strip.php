<?php
class Modifier_strip extends Modifier
{
    public function index($value, $parameters=array())
    {
        return preg_replace ( $parameters[0] , "" , $value);
    }
}
?>