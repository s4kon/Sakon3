<?php

include "vk_api.php"; 


const VK_KEY = "a445c703fff90458f9b5e7f2ad40342e3e67a706e49e7ec4597900b1068a47f81e7b4a50c4921fea45fc2";
const ACCESS_KEY = "e4263022";
const VERSION = "5.95";


$vk = new vk_api(VK_KEY, VERSION);
$data = json_decode(file_get_contents('php://input'));

if ($data->type == 'confirmation') {
    exit(ACCESS_KEY); 
}
$vk->sendOK(); 
$id = $data->object->from_id; 
$message = $data->object->text;

if ($data->type == 'message_new') {

    if ($message == '1') {

            $vk->sendMessage($id, "2");
            
        }


    }