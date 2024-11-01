<?php
require_once dirname(__FILE__).'/../../config.php';

//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if (!($role == 'admin' || $role == 'menager' )) {
    include _ROOT_PATH.'/app/calc_view.php';
    //zatrzymaj dalsze przetwarzanie skryptów
    exit();
}
