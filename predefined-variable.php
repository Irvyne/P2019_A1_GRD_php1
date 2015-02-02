<?php

$ItemPerPage = 20;

if (isset($_GET['ItemPerPage'])) {
    $ItemPerPage = $_GET['ItemPerPage'];
}

echo $ItemPerPage;