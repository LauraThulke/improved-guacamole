<?php
$user = 'Laura';
$menu = [
    'Profile',
    'Friends' , 
    'Stream',
    'Logout' ,
];

print '<hr>';

if ($user == 'admin'){
    $menu[] = 'Administration';
} else {
    $menu[] = 'Bossbitch';
    
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
