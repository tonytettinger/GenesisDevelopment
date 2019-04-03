<?php

namespace AntalTettinger\OOPSandbox;
class User {

    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $twitter;

    //change password
    function change_password() {

    }
    //check access rights
    function is_logged_in() {

    }
    //update profile
    function update_profile() {
        echo 'updating profile for ' . $this->first_name;
    }
}