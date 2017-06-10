<?php
require_once "./include/WebPage.class.php";

$webPage = new WebPage();
$webPage->ajouterBody("<h4>Bienvenue</h4>");
$webPage->rendu();