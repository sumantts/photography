<?php

$posts_pHistory = array();

$sql_ph = "SELECT category_list.category_id, category_list.category_name, category_list.category_slug, author_details.author_id, author_details.author_name, post_manager.post_id, post_manager.post_title, post_manager.post_description, post_manager.post_image, post_manager.post_video, post_manager.post_tags, post_manager.activity_status, post_manager.created_on FROM post_manager JOIN category_list ON category_list.category_id = post_manager.category_id JOIN author_details ON author_details.author_id = post_manager.author_id WHERE author_details.author_status = 'active' AND category_list.activity_status = 'active' AND  post_manager.activity_status = 'active' AND category_list.category_slug = 'public_history' ";
$result_ph = $mysqli->query($sql_ph);

if ($result_ph->num_rows > 0) {
    while($row_ph = $result_ph->fetch_array()){
        $post_id_ph = $row_ph['post_id'];	
        $post_title_ph = $row_ph['post_title'];	
        $post_image_ph = $row_ph['post_image'];	
        $post_video_ph = $row_ph['post_video'];	
        $created_on_ph = $row_ph['created_on'];	

        $post_pHistory = new stdClass();			
        $post_pHistory->post_id = $post_id_ph;			
        $post_pHistory->post_title = $post_title_ph;
        $post_pHistory->post_image = $post_image_ph;
        $post_pHistory->post_video = $post_video_ph;
        $post_pHistory->created_on = $created_on_ph;

        array_push($posts_pHistory, $post_pHistory);
    }
}
//$mysqli->close();
?>