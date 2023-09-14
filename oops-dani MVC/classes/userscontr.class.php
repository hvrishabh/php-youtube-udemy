<?php

class UsersContr extends Users
{

    public function createUsers($fname, $lname, $dob)
    {
        $this->setUsers($fname, $lname, $dob);

    }

}
