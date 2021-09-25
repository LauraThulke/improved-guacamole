<?php

class User
{
    private string $first_name;

    private string $lastName;

    private Role $role;

    public function __construct (array $data)
    {
        $this->first_name = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->role = new Role($data['role']);
    }

    public function getFirstName () {
        return $this->first_name;
    }

    public function getLastName () {
        return $this->lastName;
    }

    public function getFullName () {
        return $this->first_name . ' ' . $this->lastName;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
}
