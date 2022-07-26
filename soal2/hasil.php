<?php
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        echo strrev($text);
    }
    ?>
    <?php 
?>