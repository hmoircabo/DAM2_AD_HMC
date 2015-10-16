<?php

define("SINPERMISOS",0);
define("LOGIN",1);
define("ADEMPRESA",2);
define("ADFACTURA",4);
define("EDEMPRESA",8);
define("EDFACTURA",16);
define("ADMIN",32);

$user = SINPERMISOS;

echo "creado usuario con ".$user." permisos.<br/>";

$user = LOGIN;
if($user & LOGIN)
{
	echo "Usuario logueado<br/>";
	//echo $user."<br/>";
}

$user += ADEMPRESA;
if($user & ADEMPRESA)
{
	echo "Permisos de lectura de empresa<br/>";
	//echo decbin($user)."<br/>";
}
else
{
	echo "no tiene permisos de lectura de empresa<br/>";
}

$user += ADFACTURA;
if($user & ADFACTURA)
{
	echo "Permiso de lectura facturacion<br/>";
	//echo decbin($user)."<br/>";
}
else
{
	echo "no tiene permisos de lectura facturacion<br/>";
}

$user += ADMIN;
if($user & ADMIN)
{
	echo "Permisos de administrador de Permisos<br/>";
	//echo decbin($user)."<br/>";
}

$user -= ADEMPRESA;
if($user & ADEMPRESA)
{
	echo "Sigue teniendo permiso";
}
else
{
	echo "Permisos de acceso a datos empresariales eliminados<br/>";
	//echo decbin($user)."<br/>";
}

if($user & ADMIN)
{
	echo "SI tiene permisos de administrador de Permisos<br/>";
	//echo decbin($user)."<br/>";
}
else
{
	echo "NO tiene permisos de administrador de Permisos<br/>";
}


?>

