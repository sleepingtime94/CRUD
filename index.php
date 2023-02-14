<?php
include_once './database.php';

$db = new DB();

//** get all post */
// foreach ($db->allPost('post_artikel', 'post_created') as $list) {
//     echo $list['post_title'] . ' <hr>';
// }

//** select post */
// foreach ($db->selectPost('post_artikel', 'post_id="2"') as $list) {
//     echo $list['post_title'];
//     echo $list['post_content'];
//     echo $list['post_created'];
// }

//** update */
// $data = [
//     "post_link" => "perjanjian-kerjasama-inovasi-sitalak-dengan-pengadilan-agama-rantau"
// ];
// echo $db->updatePost('post_artikel', $data, 'post_id="1"');

//** insert */
// $data = [
//     "post_title" => "Ini adalah judul",
//     "post_content" => "lorem ipsum sir dolor amet",
//     "post_cover" => "cover.jpg",
//     "post_link" => "link-is-linked"
// ];
// echo $db->insertPost('post_artikel', $data);

//** delete */
// echo $db->deletePost('post_artikel', 'post_id="31"');
