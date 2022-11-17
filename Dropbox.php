<?php

include_once('vendor/autoload.php');
use GuzzleHttp\Psr7\StreamWrapper;
class Dropbox {

    private $authorizationToken = 'sl.BS29bWX2gAcnS454vvSBLyhgLSn8HAyS3QFsT5qP2JJAvXdD8uGydwPZCBsfCP1BjekYvYAWzhdGO1DLkXaTrxz--c_T1w2gLrxC5OW7U6cDVSuNISwdk-RX-e1xpMS0usQxlkdPq4I4';
    private $client;

    public function __construct() {
        $this->client = new Spatie\Dropbox\Client($this->authorizationToken);
    }

    public function test() {
        $result = $this->client->createFolder('justAnotherFolder');

        // $this->client->upload($path = '/anotherfolder/filename.txt', $content = 'hello, world', $mode='add');

        // $from = '/anotherfolder/filename.txt';
        // $to = '/testFolder/somefile.txt';
        // $this->client->move($from, $to);

        //   $result = $this->client->listFolder($path = 'testFolder');

        //$this->client->getTemporaryLink($path = '/anotherfolder/');

        // $from = '/dropboxpath/somefile.txt';
        // $to = '/dropboxpath/archive/somefile.txt';
        // $this->client->move($from, $to, $autorename=true);
        // with autorename results in 'somefile (1).txt'

        //$this->client->copy($from = '/dropboxpath/somefile.txt', $to = '/dropboxpath/archive/somefile.txt');
        // $this->client->createSharedLinkWithSettings($path = "/anotherfolder/", $settings = ["access" => "viewer", 
        // "allow_download" => true, 
        // "audience" => "public", 
        // "requested_visibility" => "public" ]);

        //$this->client->search($query = 'cat', $includeHighlights = false);
        //$this->client->rpcEndpointRequest('search', ['path' => '', 'query' => 'bat cave']);

        //$this->client->listSharedLinks($path = null, $direct_only = false, $cursor = null);

        //$this->client->delete($path = '/anotherfolder/');

        //$this->client->download($path = '/anotherfolder/');

        //$this->client->downloadZip($path = '/anotherfolder/');

        //$this->client->getMetadata($path = '/anotherfolder/');

        //$this->client->getTemporaryLink($path = '/anotherfolder/');

        //$this->client->getThumbnail($path = '/anotherfolder/', $format = 'jpeg', $size = 'w64h64');

        //$this->client->rpcEndpointRequest('api::file_requests/count');

        //$this->file_request_create($deadline = '2020-10-12T17:00:00Z', $destination = "/File Requests/Homework", $title = "Homework submission");

        // $this->file_requests_delete($idArray = ['oaCAVmEyrqYnkZX9955Y', 'BaZmehYoXMPtaRmfTbSG']);

        //$this->file_requests_delete_all_closed();

        //$this->file_requests_get($id = 'oaCAVmEyrqYnkZX9955Y');

        // $this->file_requests_list($limit = 1000);

        //  $this->file_requests_list_continue($cursor = 'ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu');

        // $this->file_requests_update($deadline = '2020-10-12T17:00:00Z', $destination = "/File Requests/Homework", $id = "oaCAVmEyrqYnkZX9955Y", $title = "Homework submission");

        //$this->fileCopyBatch($formpath = "/Homework/math", $toPath = "/Homework/algebra", $autoRename = false);

        //$this->fileBatchCheck($asyncJobID = "34g93hh34h04y384084");

        // $this->files_copy_reference_get($path = "/video.mp4");

        //$this->files_copy_reference_save($copyReference = "z1X6ATl6aWtzOGq0c3g5Ng", $path = "/video.mp4");

        // $this->files_create_folder_batch($paths = ["/Homework/math"], $autoRename = false, $forceAsync = false);

        //$this->files_delete_batch($entries = [["path" => "/Homework/math/Prime_Numbers.txt"], ["path" => "/Homework/math/Prime_Numbers2.txt"]]);

        //$this->files_delete_batch_check($asyncJobID = "34g93hh34h04y384084");

        //$this->files_export($path = "/Homework/math/Prime_Numbers.gsheet");

        // $this->files_get_file_lock_batch($entries = [["path" => "/John Doe/sample/test.pdf"], ["path" => "/John Doe/sample/test2.pdf"]]);

        // $this->files_get_metadata($path = "/Homework/math",
        // $include_deleted = false,
        // $has_shared_members = false,
        // $include_media_info = false);

        //$this->files_get_preview($path = "/word.docx");

        //$this->files_get_temporary_link($path = "/video.mp4");

        // $this->files_get_temporary_upload_link($path = "/Homework/math/Matrices.txt",
        // $mode = "add",
        // $mute = false,
        // $strict_conflict = false,
        // $duration = 3600,
        // $autoRename = true);

        // $this->files_get_thumbnail_batch($entries = [
        //     [
        //         "format" => "jpeg",
        //         "mode" => "strict",
        //         "path" => "/image.jpg",
        //         "size" => "w64h64"
        //     ],
        //     [
        //         "format" => "jpeg",
        //         "mode" => "strict",
        //         "path" => "/image2.jpg",
        //         "size" => "w64h64"
        //     ]
        // ]);

        // $this->files_list_folder_continue($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu");

        // $this->files_list_folder_get_latest_cursor($path = "/Homework/math",
        // $include_deleted = false,
        // $has_shared_members = false,
        // $include_media_info = false,
        // $mounted_folders = true,
        // $non_downloadable_files = true,
        // $resursive = false);

        //$this->files_list_folder_longpoll($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu", $timeout = 30);

        //$this->files_list_revisions($limit = 10, $mode = "path", $path = "/root/word.docx");

        // $this->files_lock_file_batch($entries = [
        //     [
        //         "path" => "/John Doe/sample/test.pdf"
        //     ],
        //     [
        //         "path" => "/John Doe/sample/test2.pdf"
        //     ]
        // ]);

        // $this->files_move_batch($entries = [
        //     [
        //         "from_path" => "/Homework/math",
        //         "to_path" => "/Homework/algebra"
        //     ],
        //     [
        //         "from_path" => "/Homework/math2",
        //         "to_path" => "/Homework/algebra2"
        //     ]
        //     ], $autoRename = false, $allow_ownership_transfer = false);

        //$this->files_move_batch_check($asyncJobID = "34g93hh34h04y384084");

        // $this->files_paper_create($importFormat = 'html', $path = "/Paper Docs/New Doc.paper");

        // $this->files_paper_update(
        //     $importFormat = 'html',
        //     $path = "/Paper Docs/New Doc.paper",
        //     $doc_update_policy = "update",
        //     $paper_revision = 123);

        //single file
        // $this->files_permanently_delete("/Paper Docs/New Doc.paper");

        //$this->files_restore($path = "/Homework/math/Prime_Numbers.txt", $rev = "a1c10ce0dd78");

        //  $this->files_save_url($path = "/Homework/math/Prime_Numbers.txt", $url = "http://example.com/a.txt");

        //$this->files_save_url_check_job_status($asyncJobID = "34g93hh34h04y384084");

        // $this->files_search_continue_v2($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu");

        //$this->files_tags_add($path = "/Prime_Numbers.txt", $tag_text = "my_tag");

        // $this->files_tags_get($paths = [
        //     "/Prime_Numbers.txt", "/Prime_Numbers2.txt"
        //  ]);

        //$this->files_tags_remove($path = "/Prime_Numbers.txt", $tag_text = "my_tag");

        //$this->files_unlock_file_batch($entries = [[ "path" => "/John Doe/sample/test.pdf"], [ "path" => "/John Doe/sample/test2.pdf"]]);

        //$this->files_upload_session_append_v2($cursor = [ "offset" => 0, "session_id" => "1234faaf0678bcde" ], $close = false);

        //$this->files_upload_session_finish($path = "/Homework/math/Matrices.txt", $offset = 0, $sessionID = '1234faaf0678bcde', $autoRename = false, $mode = 'add', $mute = false, $strict_conflict = false);

        // $this->files_upload_session_finish_batch_v2($entries = [ [ "commit" => [ "autorename" => true, "mode" => "add", "mute" => false, "path" => "/Homework/math/Matrices.txt", "strict_conflict" => false ], "cursor" => [ "offset" => 0, "session_id" => "1234faaf0678bcde" ] ] ]);

        //$this->files_upload_session_finish_batch_check($asyncJobID = "34g93hh34h04y384084");

        //$this->files_upload_session_start($close = false);

        //$this->files_upload_session_start($close = false);

        //$this->files_upload_session_start_batch($num_sessions = 1);

        return print_r($result);
    }

    public function createFolder($path) {
        return $this->client->createFolder($path);
    }

    public function upload(string $path, $content, $mode = 'add', $autoRename = false) {
        return $this->client->upload($path, $content, $mode, $autoRename);
    }

    public function move(string $fromPath, string $toPath, bool $autorename = false) {
        return $this->client->move($fromPath, $toPath, $autorename);
    }

    public function listFolder(string $path = '', bool $recursive = false) {
        return $this->client->listFolder($path, $recursive);
    }

    public function getTemporaryLink($path) {
        return $this->client->getTemporaryLink($path);
    }

    public function copy($fromPath, $toPath) {
        return $this->client->copy($fromPath, $toPath);
    }

    public function createSharedLinkWithSettings(string $path, array $settings = []) {
        return $this->client->createSharedLinkWithSettings($path, $settings);
    }

    public function search(string $query, bool $includeHighlights = false) {
        return $this->client->search($query, $includeHighlights);
    }

    public function listSharedLinks(string $path = null, bool $direct_only = false, string $cursor = null) {
        return $this->client->listSharedLinks($path, $direct_only, $cursor);
    }

    public function delete($path) {
        return $this->client->delete($path);
    }

    public function download($path) {
        return $this->client->download($path);
    }

    public function downloadZip($path) {
        return $this->client->downloadZip($path);
    }

    public function getMetadata($path) {
        return $this->client->getMetadata($path);
    }

    public function getThumbnail(string $path, string $format = 'jpeg', string $size = 'w64h64') {
        return $this->client->getThumbnail($path, $format, $size);
    }

    public function file_request_count(){
        $this->client->rpcEndpointRequest('api::file_requests/count');
    }

    public function file_request_create($deadline = '2020-10-12T17:00:00Z', $destination = "/File Requests/Homework", $title = "Homework submission", $open = true, $allow_late_upload = "allow") {
        $parameters = json_decode('{
            "deadline": {
                "allow_late_uploads": "' . $allow_late_upload . '",
                "deadline": "' . $deadline . '"
            },
            "destination": "' . $destination . '",
            "open": "' . $open . '",
            "title": "' . $title . '"
        }', true);
        return $this->client->rpcEndpointRequest('api::file_requests/create', $parameters);
    }

    public function file_requests_delete($idArray = ['oaCAVmEyrqYnkZX9955Y', 'BaZmehYoXMPtaRmfTbSG']) {
        return $this->client->rpcEndpointRequest('api::file_requests/delete', ["ids" => $idArray]);
    }

    public function file_requests_delete_all_closed() {
        return $this->client->rpcEndpointRequest('api::file_requests/delete_all_closed');
    }

    public function file_requests_get($id = 'oaCAVmEyrqYnkZX9955Y') {
        return $this->client->rpcEndpointRequest('api::file_requests/get', ["id" => $id]);
    }

    public function file_requests_list($limit = 1000) {
        return $this->client->rpcEndpointRequest('api::file_requests/list_v2', ["limit" => $limit]);
    }

    public function file_requests_list_continue($cursor = 'ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu') {
        return $this->client->rpcEndpointRequest('api::file_requests/list/continue', ["cursor" => $cursor]);
    }

    public function file_requests_update($deadline = "2020-10-12T17:00:00Z", $destination = "/File Requests/Homework", $id = "oaCAVmEyrqYnkZX9955Y", $title = "Homework submission", $open = true, $tag = "update", $allow_late_upload = "seven_days") {
        $parameters = [
            "deadline" => [
                ".tag" => $tag,
                "allow_late_uploads" => $allow_late_upload,
                "deadline" => $deadline
            ],
            "destination" => $destination,
            "id" => $id,
            "open" => $open,
            "title" => $title
        ];
        return $this->client->rpcEndpointRequest('api::file_requests/update', $parameters);
    }

    public function fileCopyBatch($formpath = "/Homework/math", $toPath = "/Homework/algebra", $autoRename = false) {
        $jayParsedAry = [
            "autorename" => $autoRename,
            "entries" => [
                [
                    "from_path" => $formpath,
                    "to_path" => $toPath
                ]
            ]
        ];
        return $this->client->rpcEndpointRequest('api::files/copy_batch_v2', $jayParsedAry);
    }

    public function fileBatchCheck($asyncJobID = "34g93hh34h04y384084") {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/copy_batch/check_v2', $jayParsedAry);
    }

    public function files_copy_reference_get($path = "/video.mp4") {
        $jayParsedAry = [
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/copy_reference/get', $jayParsedAry);
    }

    public function files_copy_reference_save($copyReference = "z1X6ATl6aWtzOGq0c3g5Ng", $path = "/video.mp4") {
        $jayParsedAry = [
            "copy_reference" => $copyReference,
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/copy_reference/save', $jayParsedAry);
    }

    public function files_create_folder_batch($paths = ["/Homework/math"], $autoRename = false, $forceAsync = false) {
        $jayParsedAry = [
            "autorename" => $autoRename,
            "force_async" => $forceAsync,
            "paths" => $paths
        ];
        return $this->client->rpcEndpointRequest('api::files/create_folder_batch', $jayParsedAry);
    }

    public function files_create_folder_batch_check($asyncJobID = '34g93hh34h04y384084') {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/create_folder_batch/check', $jayParsedAry);
    }

    public function files_delete_batch($entries = [["path" => "/Homework/math/Prime_Numbers.txt"]]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/delete_batch', $jayParsedAry);
    }

    public function files_delete_batch_check($asyncJobID = "34g93hh34h04y384084") {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/delete_batch/check', $jayParsedAry);
    }

    public function files_export($path = "/Homework/math/Prime_Numbers.gsheet") {
        $jayParsedAry = [
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/export', $jayParsedAry);
    }

    public function files_get_file_lock_batch($entries = [["path" => "/John Doe/sample/test.pdf"]]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/get_file_lock_batch', $jayParsedAry);
    }

    public function files_get_metadata($path = "/Homework/math", $include_deleted = false, $has_shared_members = false, $include_media_info = false) {
        $jayParsedAry = [
            "include_deleted" => $include_deleted,
            "include_has_explicit_shared_members" => $has_shared_members,
            "include_media_info" => $include_media_info,
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/get_metadata', $jayParsedAry);
    }

    public function files_get_preview($path = "/word.docx") {
        $jayParsedAry = [
            "path" => $path
        ];
     //   return $this->client->rpcEndpointRequest('content::files/get_preview', $jayParsedAry);
         $response = $this->client->contentEndpointRequest('files/get_preview', $jayParsedAry);
         return StreamWrapper::getResource($response->getBody());
    }

    public function files_get_temporary_link($path = "/video.mp4") {
        $jayParsedAry = [
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/get_temporary_link', $jayParsedAry);
    }

    public function files_get_temporary_upload_link($path = "/Homework/math/Matrices.txt", $mode = "add", $mute = false, $strict_conflict = false, $duration = 3600, $autoRename = true) {
        $jayParsedAry = [
            "commit_info" => [
                "autorename" => $autoRename,
                "mode" => $mode,
                "mute" => $mute,
                "path" => $path,
                "strict_conflict" => $strict_conflict
            ],
            "duration" => $duration
        ];
        return $this->client->rpcEndpointRequest('api::files/get_temporary_upload_link', $jayParsedAry);
    }

    public function files_get_thumbnail_batch($entries = [
        [
            "format" => "jpeg",
            "mode" => "strict",
            "path" => "/image.jpg",
            "size" => "w64h64"
        ]
    ]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('content::files/get_thumbnail_batch', $jayParsedAry);
    }

    public function files_list_folder_continue($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu") {
        $jayParsedAry = [
            "cursor" => $cursor
        ];
        return $this->client->rpcEndpointRequest('api::files/list_folder/continue', $jayParsedAry);
    }

    public function files_list_folder_get_latest_cursor($path = "/Homework/math", $include_deleted = false, $has_shared_members = false, $include_media_info = false, $mounted_folders = true, $non_downloadable_files = true, $resursive = false) {
        $jayParsedAry = [
            "include_deleted" => $include_deleted,
            "include_has_explicit_shared_members" => $has_shared_members,
            "include_media_info" => $include_media_info,
            "include_mounted_folders" => $mounted_folders,
            "include_non_downloadable_files" => $non_downloadable_files,
            "path" => $path,
            "recursive" => $resursive
        ];
        return $this->client->rpcEndpointRequest('api::files/list_folder/get_latest_cursor', $jayParsedAry);
    }

    public function files_list_folder_longpoll($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu", $timeout = 30) {
        $jayParsedAry = [
            "cursor" => $cursor,
            "timeout" => $timeout
        ];
        return $this->client->rpcEndpointRequest('api::files/list_folder/longpoll', $jayParsedAry);
    }

    public function files_list_revisions($limit = 10, $mode = "path", $path = "/root/word.docx") {
        $jayParsedAry = [
            "limit" => $limit,
            "mode" => $mode,
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/list_revisions', $jayParsedAry);
    }

    public function files_lock_file_batch($entries = [
        [
            "path" => "/John Doe/sample/test.pdf"
        ]
    ]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/lock_file_batch', $jayParsedAry);
    }

    public function files_move_batch($entries = [
        [
            "from_path" => "/Homework/math",
            "to_path" => "/Homework/algebra"
        ]
    ], $autoRename = false, $allow_ownership_transfer = false) {
        $jayParsedAry = [
            "allow_ownership_transfer" => $allow_ownership_transfer,
            "autorename" => $autoRename,
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/move_batch_v2', $jayParsedAry);
    }

    public function files_move_batch_check($asyncJobID = "34g93hh34h04y384084") {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/move_batch/check_v2', $jayParsedAry);
    }

    public function files_paper_create($importFormat = 'html', $path = "/Paper Docs/New Doc.paper") {
        $jayParsedAry = [
            "import_format" => $importFormat,
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/paper/create', $jayParsedAry);
    }

    public function files_paper_update($importFormat = 'html', $path = "/Paper Docs/New Doc.paper", $doc_update_policy = "update", $paper_revision = 123) {
        $jayParsedAry = [
            "doc_update_policy" => $doc_update_policy,
            "import_format" => $importFormat,
            "paper_revision" => $paper_revision,
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/paper/update', $jayParsedAry);
    }

    public function files_permanently_delete($path = "/Homework/math/Prime_Numbers.txt") {
        $jayParsedAry = [
            "path" => $path
        ];
        return $this->client->rpcEndpointRequest('api::files/permanently_delete', $jayParsedAry);
    }

    public function files_restore($path = "/Homework/math/Prime_Numbers.txt", $rev = "a1c10ce0dd78") {
        $jayParsedAry = [
            "path" => $path,
            "rev" => $rev
        ];
        return $this->client->rpcEndpointRequest('api::files/restore', $jayParsedAry);
    }

    public function files_save_url($path = "/Homework/math/Prime_Numbers.txt", $url = "http://example.com/a.txt") {
        $jayParsedAry = [
            "path" => $path,
            "url" => $url
        ];
        return $this->client->rpcEndpointRequest('api::files/save_url', $jayParsedAry);
    }

    public function files_save_url_check_job_status($asyncJobID = "34g93hh34h04y384084") {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/save_url/check_job_status', $jayParsedAry);
    }

    public function files_search_continue_v2($cursor = "ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu") {
        $jayParsedAry = [
            "cursor" => $cursor
        ];
        return $this->client->rpcEndpointRequest('api::files/search/continue_v2', $jayParsedAry);
    }

    public function files_tags_add($path = "/Prime_Numbers.txt", $tag_text = "my_tag") {
        $jayParsedAry = [
            "path" => $path,
            "tag_text" => $tag_text
        ];
        return $this->client->rpcEndpointRequest('api::files/tags/add', $jayParsedAry);
    }

    public function files_tags_get($paths = [
        "/Prime_Numbers.txt", "/Prime_Numbers2.txt"
    ]) {
        $jayParsedAry = [
            "paths" => $paths
        ];
        return $this->client->rpcEndpointRequest('api::files/tags/get', $jayParsedAry);
    }

    public function files_tags_remove($path = "/Prime_Numbers.txt", $tag_text = "my_tag") {
        $jayParsedAry = [
            "path" => $path,
            "tag_text" => $tag_text
        ];
        return $this->client->rpcEndpointRequest('api::files/tags/remove', $jayParsedAry);
    }

    public function files_unlock_file_batch($entries = [["path" => "/John Doe/sample/test.pdf"]]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/unlock_file_batch', $jayParsedAry);
    }

    public function files_upload_session_append_v2($cursor = [
        "offset" => 0,
        "session_id" => "1234faaf0678bcde"
    ], $close = false) {
        $jayParsedAry = [
            "close" => $close,
            "cursor" => $cursor
        ];
        return $this->client->rpcEndpointRequest('content::files/upload_session/append_v2', $jayParsedAry);
    }

    public function files_upload_session_finish($path = "/Homework/math/Matrices.txt", $offset = 0, $sessionID = '1234faaf0678bcde', $autoRename = false, $mode = 'add', $mute = false, $strict_conflict = false) {
        $jayParsedAry = [
            "commit" => [
                "autorename" => $autoRename,
                "mode" => $mode,
                "mute" => $mute,
                "path" => $path,
                "strict_conflict" => $strict_conflict
            ],
            "cursor" => [
                "offset" => $offset,
                "session_id" => $sessionID
            ]
        ];
        return $this->client->rpcEndpointRequest('content::files/upload_session/finish', $jayParsedAry);
    }

    public function files_upload_session_finish_batch_v2($entries = [
        [
            "commit" => [
                "autorename" => true,
                "mode" => "add",
                "mute" => false,
                "path" => "/Homework/math/Matrices.txt",
                "strict_conflict" => false
            ],
            "cursor" => [
                "offset" => 0,
                "session_id" => "1234faaf0678bcde"
            ]
        ]
    ]) {
        $jayParsedAry = [
            "entries" => $entries
        ];
        return $this->client->rpcEndpointRequest('api::files/upload_session/finish_batch_v2', $jayParsedAry);
    }

    public function files_upload_session_finish_batch_check($asyncJobID = "34g93hh34h04y384084") {
        $jayParsedAry = [
            "async_job_id" => $asyncJobID
        ];
        return $this->client->rpcEndpointRequest('api::files/upload_session/finish_batch/check', $jayParsedAry);
    }

    public function files_upload_session_start($close = false) {
        $jayParsedAry = [
            "close" => $close
        ];
        return $this->client->rpcEndpointRequest('content::files/upload_session/start', $jayParsedAry);
    }

    public function files_upload_session_start_batch($num_sessions = 1) {
        $jayParsedAry = [
            "num_sessions" => $num_sessions
        ];
        return $this->client->rpcEndpointRequest('api::files/upload_session/start_batch', $jayParsedAry);
    }

    public function normalizePath($path){
        return $this->client->normalizePath($path);
    }

}
