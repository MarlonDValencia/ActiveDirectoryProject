<?php
$ldap = ldap_connect("project.so");
if ($bind = ldap_bind($ldap, $_POST['usuario'], $_POST['contraseña'])) {
  echo("Sesión Iniciada Correctamente");
} else {
  echo("Credenciales incorrectas");
}