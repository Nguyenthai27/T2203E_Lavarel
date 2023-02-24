<?php

use Pusher\Pusher;

if(!function_exists("admin_ur;")){
    function admin_url($path){
        return url("admin/".$path);
    }
}
if(!function_exists("money_format")){
    function money_format($m){
        return "$".format_money($m);
    }
}
if(!function_exists("notification")){
    function notification($channle,$event,$data){
        // send notification
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            '778ba3922c41ec19e6df',
            '207873fca9b89d7a4de6',
            '1538350',
            $options
        );
        $pusher->trigger($channle,$event,$data);
    }
}
