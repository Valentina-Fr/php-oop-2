<?php

class User {
    protected $name;
    protected $last_name;
    protected $email;
    
    public function __construct($_name, $_last_name, $_email) {
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->email = $_email;
    }
}

class Premium extends User {
    protected $level;
    protected $discount;
    
    public function __construct($_name, $_last_name, $_email, $_level = 0) {
        parent:: __construct ($_name, $_last_name, $_email);
        $this->level = $_level;
    }

    public function setDiscount(){
        if($this->level == 1) {
            $this->discount = 10;
        } elseif ($this->level == 2) {
            $this->discount = 20;
        }
    }
}