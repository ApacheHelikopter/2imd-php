<?php

    require_once("../bootstrap.php");

    if (!empty ($_POST)){
        $text = $_POST['text'];
        
        try{
            $c = new Comment();
            $c->setText($text);
            $c->save();

            $result = [
                "status" => "success",
                "message" => "Saved successfully"
            ];

        } catch( Throwable $t ){
            $result = [
                "status" => "error",
                "message" => "Something went wrong"
            ];
        }

        echo json_encode($result);
    }