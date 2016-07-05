<?php
include_once('views/myview.php');
$t = new MyView();
$t->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);

$t->progress = 31;

ob_start();
// $t->name = "home";
$t->output_file = 'index.html';
$t->render('index.phtml');
$contents = ob_get_contents();
file_put_contents($t->output_file, $contents);

/* toggle only 1 of the following two lines */
ob_end_flush(); // clear buffer and output contents
// ob_end_clean(); // clear buffer and silently discard contents

ob_start();
// $t->name = "blog";
$t->output_file = 'blog.html';
$t->render('blog.phtml');
$contents = ob_get_contents();
file_put_contents($t->output_file, $contents);

ob_end_flush();

ob_start();
// $t->name = "github";
$t->output_file = 'github.html';
$t->render('github.phtml');
$contents = ob_get_contents();
file_put_contents($t->output_file, $contents);

ob_end_flush();

ob_start();
// $t->name = "github";
$t->output_file = 'ref.html';
$t->render('ref.phtml');
$contents = ob_get_contents();
file_put_contents($t->output_file, $contents);

ob_end_flush();
?>
