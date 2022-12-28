<?php
// index.php

require_once '../src/Hello.php';
$hello = new Hello();
var_dump($hello->talk());