<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'carlos');
define('DB_PASS', 'secret');
define('DB_NAME', 'compromiso_escolar_corfo');
define('DB_PORT', '3306');

function connectDB()
{
    return Conexion();
}

function connectDB_demos()
{
    return Conexion();
}

function Conexion()
{
    $lista = array(
        '127.0.0.1',
        '::1'
    );

    try {
        if (in_array($_SERVER['REMOTE_ADDR'], $lista)) {
            $conn = new PDO(
                "mysql:host=localhost; dbname=compromiso_escolar_corfo;charset=UTF8",
                "carlos",//"carlos", //root
                "root",//"secret",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode=""')
            );
            $conn->setAttribute(
                PDO :: ATTR_ERRMODE,
                PDO :: ERRMODE_EXCEPTION
            );

            return $conn;
        } else {
            $conn = new PDO(
                "mysql:host=167.71.191.60; dbname=compromiso_escolar_corfo;charset=UTF8",
                "root",
                "92mbx6#p^wq@hac^",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode=""')
            );
            $conn->setAttribute(
                PDO :: ATTR_ERRMODE,
                PDO :: ERRMODE_EXCEPTION
            );
            return $conn;
        }
    } catch (Exception $e) {
        exit ("Excepción capturada: " . $e->getMessage());
    }
}