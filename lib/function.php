<?php

function secure_input($data){
    return strip_tags(htmlspecialchars(trim(stripcslashes($data))));  
}

