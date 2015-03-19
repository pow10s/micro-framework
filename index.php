<?php
if (isset($_GET['action'])){
    if($_GET['action'] == 'view_message'){
        echo 'view';
    }
    elseif($_GET['action'] == 'create_message'){
        echo 'create';
    }
    elseif($_GET['action'] == 'update_message'){
        echo 'update';
    }
    }

