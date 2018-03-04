<?php
    include('config.php');
    function generateRandomString(){
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++){
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    //to select unique key
    function generateKey(){
        include('config.php');
        $rand = generateRandomString();
        $sql = "SELECT * from data where uniquekey='" . $rand . "';";
        $index_result = $db->query($sql);
        if($index_result->num_rows === 0){
            return $rand;
        }
        else{
            generateKey(); //it would generate another key
        }
        $conn->close();
    }
?>