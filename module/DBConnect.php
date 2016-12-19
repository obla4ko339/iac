<?php


abstract class DBConnect
{
    

    abstract public function connect();
    public function disconnect(){}
    public function select(){}
    public function insert($table, $value){}
    public function delete(){}
    public function update(){}



}