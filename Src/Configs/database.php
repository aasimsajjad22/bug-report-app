<?php

return [

    'pdo' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'db_name' => 'bug_app',
        'db_username' => 'root',
        'db_user_password' => 'Ciklum@123$',
        'default_fetch' => PDO::FETCH_OBJ,
    ],
    'mysqli' => [
        'host' => 'localhost',
        'db_name' => 'bug_app',
        'db_username' => 'root',
        'db_user_password' => 'Ciklum@123$',
        'default_fetch' => MYSQLI_ASSOC,
    ],
];