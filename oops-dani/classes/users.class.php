<?php

class Users extends Dbh
{

    protected function getUser($fname)
    {
        $sql = "SELECT * FROM users where user_firstname = ? ";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fname]);

        $result = $stmt->fetchAll();

        return $result;

    }

    protected function setUsers($fname,$lname,$dob)
    {
        $sql = "INSERT INTO `users`(`user_id`, `user_firstname`, `user_lastname`, `user_dateofbirth`) VALUES ('',?,?,?)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fname,$lname,$dob]);


    }

}
