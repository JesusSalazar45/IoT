<?php
    echo "Hello world!\n";
    $host = "ec2-54-83-201-84.compute-1.amazonaws.com";
    $user = "ryvfvynzqazlcx";
    $password = "54073c0f267ca0ace145876ac7d4d981064d8c9f1af3efd503512a629ec800b7";
    $dbname = "d1jv2gq7sc413i";
    $port = "5432";
    $conn_string = "host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password." options='--client_encoding=UTF8'";
    $dbconn = pg_connect($conn_string);

    $username = "";
    $pass = "";

    if($conexion) {
        $sql = "SELECT * FROM users WHERE id=1";
        $rs = pg_query( $conexion, $sql );
        if( $rs ){
            if( pg_num_rows($rs) >= 0 ){
                while( $obj = pg_fetch_object($rs) ){
                    $username = $obj->username;
                    $pass = $obj->pass;
                    console.log($username);
                    console.log($pass);
                }
            }
        }
    }
    
    $opcion = $_POST["opcion"];
	header('Content-Type: application/json');
	$datos = array(
		'estado' => 'ok',
		'username' => $username,
		'pass' => $pass
	);
	echo json_encode($datos, JSON_FORCE_OBJECT);
?>