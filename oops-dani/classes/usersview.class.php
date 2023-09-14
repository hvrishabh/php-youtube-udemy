<?php

class UsersView extends Users{
    public function showUsers($fname){
        $results = $this->getUser($fname);
        foreach($results as $val){
            echo "Full Name is : " . $val['user_firstname'] . " " . $val['user_lastname'] . " " . $val['user_dateofbirth'];
            echo "<pre>";

            print_r($val);
        }


    }

}