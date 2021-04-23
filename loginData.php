<?php
    require "connection.php";

    $action = $_GET['action'];
    // echo  $action;
    
    if ($action == 'loadData')
    {
        $sql = "Select *from users";
        
        $data = pg_query($db_connection,$sql);

        
        $users = [];
        while($row = pg_fetch_array($data, NULL, PGSQL_ASSOC))
        {
            $user = [];
            $user['username'] = $row['username'];
            $user['password'] = $row['password'];
            $users[] = $user;
        }
        echo json_encode($users);
    }

    if ($action == 'submit')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "Select * from users where username = '$username' and password = '$password'";
        $data = pg_query($db_connection, $sql);

        $result = pg_num_rows($data);

        echo json_encode($result);
    }
?>