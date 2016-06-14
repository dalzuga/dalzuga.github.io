<?php
include_once('views/myview.php');
$t = new MyView();
$t->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);
$t->progress = 26;
ob_start();
$t->render('index.phtml');
$contents = ob_get_contents();
$file = 'index.html';
file_put_contents($file, $contents);

/* toggle only 1 of the following two lines */
ob_end_flush(); // clear buffer and output contents
// ob_end_clean(); // clear buffer and silently discard contents

ob_start();
$t->render('blog.phtml');
$contents = ob_get_contents();
$file = 'blog.html';
file_put_contents($file, $contents);

ob_end_flush();
?>
