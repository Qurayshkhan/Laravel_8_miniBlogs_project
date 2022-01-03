<?php

namespace App\Gates;
 
class AdminGates{
    public function check_admin($user){
        if($user->email==='hk147471@gmail.com'){

                    return true;
                 }else{
                     return false;
                }
    }
}

?>