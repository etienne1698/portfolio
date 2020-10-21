<?php

$post = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);

if (isset($post['email']) && isset($post['name']) && isset($post['message'])) {
    try {
        $message = new MessageModel();
        $message->message = $post['message'];
        $message->email = $post['email'];
        $message->name = $post['name'];
        if ($message->save()) {
            die(json_encode(array('success' => true, 'message' => Context::getContext()->translate('messageSended'))));
        }
        die(json_encode(array('error' => true)));

    } catch (Exception $e) {

    }
}