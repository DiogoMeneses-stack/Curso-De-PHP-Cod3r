<?php
session_start();
session_destroy();
header('Location: sessao_01.php');