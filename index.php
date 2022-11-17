<?php

include_once('Dropbox.php');

$dropbox = new Dropbox();

try {

//Download
// $response = $dropbox->download($dropbox->normalizePath($path = 'testFolder/somefile.txt'));
// file_put_contents('files/somefile.txt', $response);

//Download ZIP
// $response = $dropbox->downloadZip($dropbox->normalizePath($path = 'testFolder'));
// file_put_contents('files/somefile.zip', $response);

//getThumbnail
//$response = $dropbox->getThumbnail($dropbox->normalizePath($path = 'testFolder/photo.jpg'));
//file_put_contents('files/thumb.jpg', $response);

//File requests get (if there is no file request you will get empty result)
//$response = $dropbox->file_requests_get($id = 'kR4xuDrD6D8AAAAAAAAACg');

//Count (if there is no file reqeust you will get empty result)
//$response = $dropbox->file_request_count();

//upload from PC
//$response = $dropbox->upload('testFolder/upload.jpg', fopen('files/thumb.jpg', 'r'));
} catch (\Exception $e) {
    $response = $e->getMessage();
}
print_r($response);
