<?php
/**
 * Return a value's basename
 */
class Modifier_basename extends Modifier
{
    public function index($value, $parameters=array()) {
        return basename($value);
    }
}
