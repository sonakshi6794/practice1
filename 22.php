<?php
$subject = "abcdef";
$pattern = '/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);
?>
