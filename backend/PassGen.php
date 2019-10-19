<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 9/11/2019
 * Time: 8:17 AM
 */

class PassGen
{
    function get_password($char){
        $pwd='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123654789@#$&';

        return substr(str_shuffle($pwd),0,$char);
    }


}