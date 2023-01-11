<?php

class Connection
{
    public static function newConnection()
    {
        $envPath = realpath(dirname(__FILE__) . '/env.ini');
        $env = parse_ini_file($envPath);

        $banco = $env['MYSQL_DATABASE'];
        $servidor = $env['MYSQL_ROOT_HOST'];
        $usuario = $env['MYSQL_USER'];
        $senha = $env['MYSQL_PASSWORD'];

        $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        return $conn;
    }
}
