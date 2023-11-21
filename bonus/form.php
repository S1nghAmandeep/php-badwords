<?php

$user_text = $_GET['user_text'];
$text_form = $_GET['text_area'];

// var_dump([123]);

$new_text = str_replace($user_text, '***', $text_form);
?>

<h1>Bad Words</h1>
<p><?php echo $text_form ?></p>
<p>Il totale di caratteri: <?php echo strlen($text_form) ?></p>
<p><?php echo $new_text ?></p>
<p>Il totale di caratteri: <?php echo strlen($new_text) ?></p>