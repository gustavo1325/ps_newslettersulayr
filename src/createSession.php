<?php

class createSession{

    public function newSession(){
        return session_start();
    }

    public function addDataSession($data, $key){
        $_SESSION['$key'] = $data;
    }

}