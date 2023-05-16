<?php

function check_login($conn)
{

    if(isset($_SESSION['IdUser']))
    {

        $id = $_SESSION['IdUser'];
        $query = "select * from LoginUser where IdUser = '$IdUser'";

        $result = sqlsrv_query($conn,$query);
        if($result)
        {

            $user_data = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
            return $user_data;
        }
    }
    else
    {
        //redirect to login
        header("Location: login.php");
        die;
    }



}

function random_num($length)
{

    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++) { 
        # code...

        $text .= rand(0,9);
    }

    return $text;
}