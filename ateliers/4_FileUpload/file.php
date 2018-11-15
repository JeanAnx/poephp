<?php 

include_once 'functions.php';
echo '$_FILES : ';
pre($_FILES);
uploadFile($_FILES);