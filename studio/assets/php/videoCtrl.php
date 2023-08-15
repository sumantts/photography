<?php

$posts_videos = array();

$sql = "SELECT category_list.category_id, category_list.category_name, category_list.category_slug, author_details.author_id, author_details.author_name, post_manager.post_id, post_manager.post_title, post_manager.post_image, post_manager.post_video, post_manager.post_tags, post_manager.activity_status, post_manager.created_on FROM post_manager JOIN category_list ON category_list.category_id = post_manager.category_id JOIN author_details ON author_details.author_id = post_manager.author_id WHERE author_details.author_status = 'active' AND category_list.activity_status = 'active' AND  post_manager.activity_status = 'active' AND post_manager.post_video != '' ORDER BY RAND() LIMIT 3";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()){
        $post_id = $row['post_id'];			
        $category_name = $row['category_name'];		
        $author_name = $row['author_name'];		
        $post_title = $row['post_title'];		
        //$post_description = $row['post_description'];	
        $post_image = $row['post_image'];	
        $post_video = $row['post_video'];		
        $post_tags = $row['post_tags'];		
        $created_on = $row['created_on'];		
        $activity_status = $row['activity_status'];		
        $author_name = $row['author_name'];	

        $post_videos = new stdClass();			
        $post_videos->post_id = $post_id;			
        $post_videos->category_name = $category_name;
        $post_videos->author_name = $author_name;
        $post_videos->post_title = $post_title;
        //$post_videos->post_description = $post_description1;
        $post_videos->post_image = $post_image;
        $post_videos->post_video = $post_video;
        $post_videos->post_tags = $post_tags;
        $post_videos->created_on = $created_on;

        array_push($posts_videos, $post_videos);
    }
}
//$mysqli->close();
?>