<?php

$author_text = 'Our Authors are our assets.';

$authors = array();
$sql = "SELECT * FROM author_details WHERE author_status = 'active' ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()){
        $author_id = $row['author_id'];			
        $author_name = $row['author_name'];		
        $author_bio = $row['author_bio'];	
        $author_photo = $row['author_photo'];

        $author = new stdClass();			
        $author->author_id = $author_id;			
        $author->author_name = $author_name;
        $author->author_bio = $author_bio;
        $author->author_photo = $author_photo;

        array_push($authors, $author);
    }
}

?>