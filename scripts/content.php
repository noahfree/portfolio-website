<?php // NOTE: ADD LOADING ICON

$infoId = empty($_GET['infoId']) ? '' : $_GET['infoId'];

$string = null;

switch($infoId){
    case 'about':
        $string = "Hello, thank you for visiting my website. I am a computer science & economics double major at the University of Missouri, set to graduate in the spring of 2023.";
        break;
}


print $string;
?>