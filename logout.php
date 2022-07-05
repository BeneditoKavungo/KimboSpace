<?php
//Encerrando Sessao

session_start();
session_unset();
session_destroy();
header('Location: index.html');
