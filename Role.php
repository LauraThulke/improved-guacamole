<?php

class Role
{
    private $permissions = [
        'create_blog_post',
        'edit_blog_post',
        'delete_blog_post',
    ];

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function can(string $action) {
        return in_array($action, $this->permissions);
    }
}
