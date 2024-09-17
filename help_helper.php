<?php 
function pre($data = '')
{
    echo '<pre style="margin:5px; opacity:0.9; border-radius:0; box-shadow: 1px 3px 5px 1px #888888; background-color:#ede6f5; color:#666666; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:#4a3389;">';
    print_r($data);
    echo '</pre>';
}
?>