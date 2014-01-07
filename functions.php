<?php

function print_post_title() {
global $post;
$thePostID = $post->ID;
$post_id = get_post($thePostID);
$title = $post_id->post_title;
$perm = get_permalink($post_id);
$post_keys = array(); $post_val = array();
$post_keys = get_post_custom_keys($thePostID);

if (!empty($post_keys)) {
foreach ($post_keys as $pkey) {
if ($pkey=='url1' || $pkey=='title_url' || $pkey=='url_title') {
$post_val = get_post_custom_values($pkey);
}
}
if (empty($post_val)) {
$link = $perm;
} else {
$link = $post_val[0];
}
} else {
$link = $perm;
}
echo '<h1 class="entry-title"><a href="'.$link.'" rel="bookmark" title="'.$title.'">'.$title.'</a></h1>';
}

?>