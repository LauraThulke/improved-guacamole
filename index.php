<?php
require_once 'User.php';
require_once 'Role.php';

$user = [
    'first_name' => 'Laura',
    'last_name' => 'T-Hulk',
    'role' => 'admin',
];

$user = new User($user);

$menu = [
    'Profile',
    'Friends' ,
    'Stream',
    'Logout' ,
];

print '<hr>';

if ($user->getRole()->getName() == 'admin'){
    $menu[] = 'Administration';
} else {
    $menu[] = 'Bossbitch';
}

if ($user->getRole()->can('create_blog_post')){
    $menu[] = 'Create new blog post';
}



function printMenu ($list) {
    echo '<ol>';
    foreach ($list as $value) {
        print "<li>$value</li>";
    }
    echo "</ol>";
}

printMenu($menu);
printMenu($menu);
printMenu($menu);
printMenu($menu);
printMenu($menu);
printMenu($menu);
