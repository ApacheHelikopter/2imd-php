<?php

    trait Json {
        public function toJson(){
            $allProperties = get_object_vars($this);
            return json_encode($allProperties);
        }
    }