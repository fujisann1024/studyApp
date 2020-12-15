<?php
function xss($formData){
    htmlspecialchars($formData,ENT_QUOTES);
}
?>