
<?php
    $succes ="";
    $error ="";
    function requiredInput($value){
        $str = trim($value);
        if(strlen($str) > 0){
            return true;
        }
        return false;
    }

    // sanitize string inout
    function santString($value){
        $str = trim($value);
        // Use filter_var with the updated constant
        $str = filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // Continue with the rest of your validation or processing logic
        $str = preg_replace('/[^A-Za-z\s]/', '', $str);
        return $str;
    }

    // sanitize string inout
    function santIEmail($email){
        $email = trim($email);
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        return $email;
    }

    //min input
    function minInput($value,$min){
        if(strlen($value) < $min){
            return false;
        }
        return true;
    }

    //max input
    function maxInput($value,$max){
        if(strlen($value) > $max){
            return false;
        }
        return true;
    }

    //validate email
    function validateEmail($email){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
?>