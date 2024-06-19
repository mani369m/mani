<?php 
    $channel_id = $_GET['id']; // Retrieves the channel ID from the GET request
    $link = "https://desktop.harimishra9109.workers.dev/bpk-tv/" . $channel_id . "_MOB/Fallback/index.m3u8"; // Creates the link using the channel ID
    header("Location: $link"); // Redirects the user to the link
?>
