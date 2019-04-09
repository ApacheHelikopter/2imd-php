<?php

    if (!empty ($_POST)){
        $text = $_POST['text'];
        
        try{

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