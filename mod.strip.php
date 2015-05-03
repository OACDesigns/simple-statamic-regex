<?php
class Modifier_strip extends Modifier
{
    public function index($value, $parameters=array())
    {
        $pattern = $parameters[0];
        switch ($pattern) {
            case 'SPACE':
                $pattern = "/\s/";
                break;

            case 'NL':
                $pattern = "/(\n)*(\n\r)*/";
                break;
            
            default:
                break;
        }
        $replace = isset($parameters[1]) ? $parameters[1] : "";
        return preg_replace($pattern, $replace, $value);
    }
}
?>