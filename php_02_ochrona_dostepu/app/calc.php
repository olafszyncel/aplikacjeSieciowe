<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$liczba_lat,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$liczba_lat = isset($_REQUEST['liczba_lat']) ? $_REQUEST['liczba_lat'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$liczba_lat,&$oprocentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($liczba_lat) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $liczba_lat == "") {
		$messages [] = 'Nie podano liczby lat';
	}
    if ( $oprocentowanie == "") {
        $messages [] = 'Nie podano oprocentowania';
    }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $liczba_lat )) {
		$messages [] = 'liczba lat nie jest liczbą całkowitą';
	}

    if (! is_numeric( $oprocentowanie )) {
        $messages [] = 'oprocentowanie nie jest liczbą całkowitą';
    }

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$liczba_lat,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$liczba_lat = intval($liczba_lat);
    $oprocentowanie = intval($oprocentowanie);
	

    //wykonanie operacji
    $r = $oprocentowanie / 12 / 100;

    // Przeliczenie liczby lat na liczbę miesięcy
    $n = $liczba_lat * 12;

    // Wzór na ratę kredytu
    $result = ($kwota * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
}

//definicja zmiennych kontrolera
$kwota = null;
$liczba_lat = null;
$oprocentowanie = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$liczba_lat,$oprocentowanie);
if ( validate($kwota,$liczba_lat,$oprocentowanie,$messages) ) { // gdy brak błędów
	process($kwota,$liczba_lat,$oprocentowanie,$messages,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';