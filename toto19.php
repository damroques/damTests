<?php



function check($string ) {

    global $flag;

    for($i=0; $i<strlen($string); $i++){

        if ($string[$i] == ")") {
            $i--;
            $rest = $string[$i];
            echo $rest;
            if ($rest == "(") {
                $res = str_replace($rest, "", $string);
                $string = $res;
                //print_r($string);

            } else{

                $flag = false;
                return $flag;
            }
        }

        elseif ($string[$i] == "]") {
            $rest = substr($string, -2);
            if ($rest == "[") {
                $res = str_replace($rest, "", $string);
                $string = $res;

            } else{
                $flag = false;
                return $flag;
                }

            }
        }
    if(strlen($string)== 0) {
        $flag = true;

        return $flag;
    }
}

var_dump(check('[()]'));
//var_dump(check('(()[])'));
/*var_dump(check('([)]'));
var_dump(check('(('));
var_dump(check('[(()])'));
var_dump(check("([(([[(([]))]]))])"));
var_dump(check("[](()()[[]])()[]([])"));
var_dump(check("([((([(([]))])))))])"));
var_dump(check("[](()()[[]])[][[([])"));*/


?>