<?php
    class User {
        public $a = 10;
        private $b = 99;
        protected $c =100;

        function test(){
            return $this->c;
        }
    }

    class Member extends User{
        function test(){
            return $this->c;
        }
    }

    $john = new User;
    // echo $john->a;
    // echo $john->b;
    // echo $john->c;

    // echo $john->test();

    $mary = new Member;

    // echo $mary->c;
    echo $mary->test();
