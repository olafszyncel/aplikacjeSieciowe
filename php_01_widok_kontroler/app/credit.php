<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($z))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$message [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$message [] = 'Nie podano liczby lat';
}
if ( $z == "") {
	$message [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $message )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$message [] = 'Podana kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$message [] = 'Liczba lat nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $z )) {
		$message [] = 'Podane oprocentowanie nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $message )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);

	//wykonanie operacji
	$r = $z / 12 / 100;

    // Przeliczenie liczby lat na liczbę miesięcy
    $n = $y * 12;

    // Wzór na ratę kredytu
    $resultc = ($x * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';