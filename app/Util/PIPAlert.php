<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Util;
use Collective\Html;


class PIPAlert {

    public function alertPIP() {
        $rs = '';
        $rs .= '
        <script>
            $(function(){
                    swal("Good job!", "You clicked the button!", "success");
            });
        </script>
            ';
        
        return $rs;
    }

}
