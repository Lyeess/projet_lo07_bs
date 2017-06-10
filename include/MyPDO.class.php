<?php

class MyPDO {

    private static $instance;

    public static function getInstance() {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=projet_lo07;charset=utf8', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return self::$instance;
    }

}
