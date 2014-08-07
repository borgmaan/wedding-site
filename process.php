<?php

print("Hello World");
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$attending = strip_tags($_POST['attentive']);
$count = strip_tags($_POST['count']);

// Send Message
mail( "borgman.wedding@gmail.com", "$name Wedding RSVP",
"Name: $name\nEmail: $email\nAttending: $attending\nCount: $count\n"
);
?>