<?php


class Nanay{

    private $first_name = 'rose';
    public $last_name = 'magango';
    public $nick_name = 'maria';
}


class Anak{

    public $first_name = 'drix';
    private $last_name;

    public function __construct($nanay)
    {
        $this->last_name = $nanay->last_name;
    }

    public function get_fullname()
    {
        return $this->first_name. ' '. $this->last_name;
    }
}



$rose = new Nanay();
$drix = new Anak($rose);

echo '<pre>';
var_dump($drix);
echo '</pre>';



