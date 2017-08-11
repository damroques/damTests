<?php



function check($string ) {

    global $flag;
    $nope = '(]';
    $nope2 = '[)';
    if(strstr($string, $nope2 , $nope)) {
        $flag = false;

        return $flag;
    }
    $arr = str_split($string);
    $res = null;

    foreach ($arr as $value){

        switch($value) {
            case "(":
                $res += 1;
                break;

            case "[":
                $res += 10;
                break;

            case ")":
                $res -= 1;
                break;

            case "]":
                $res -= 10;
                break;
        }
        if ($res < 0){
            $flag = false;
            return $flag;
        }
    }
    if ($res != 0){
        $flag = false;

        return $flag;

    }elseif ($res == 0){
        $flag = true;

        return $flag;


    }

}

/*var_dump(check('[()]'));
var_dump(check('(()[])'));*/
var_dump(check('([)]'));
var_dump(check('(('));
var_dump(check('[(()])'));
var_dump(check("([(([[(([]))]]))])"));
var_dump(check("[](()()[[]])()[]([])"));
var_dump(check("([((([(([]))])))))])"));
var_dump(check("[](()()[[]])[][[([])"));


?>