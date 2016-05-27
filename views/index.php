<?php
include_once('myview.php');
$t = new MyView();
$t->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);
$t->render('index.phtml');
?>
