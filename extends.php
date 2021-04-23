<?php

class Nanay{

    private $name = 'rose';
    protected $last_name = 'magango';
    public $nick_name = 'maria';
}


class Anak extends Nanay{

    public $first_name = 'drix';

    public function get_fullname()
    {
        return $this->first_name. ' '. $this->last_name;
    }
}


$drix = new Anak();

echo '<pre>';
var_dump($drix);
echo '</pre>';
echo $drix->get_fullname();
