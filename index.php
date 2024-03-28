//! PHP Giorno 2-------------------------------------------------------------------------

//? Esercizio 1 - foreach

// $arr = [2,5,7,9,10,21];

// function sommaNumeri($arr){

//     $result = 0;

//     foreach ($arr as $numero){
//         $result += $numero;
//     }

//     return $result;
// }

// $risultato = sommaNumeri($arr);

// echo($risultato);


//? Esercizio 2 - for

// $arr = [2,5,7,9,10,21];

// function sommaNumeri($arr){

//     $result = 0;

//     for ($i=0; $i < count($arr); $i++) { 
//         $result += $arr[$i];
//     }

//     return $result;
// }

// $risultato = sommaNumeri($arr);

// echo $risultato;


//? Esercizio 1 - array_reduce

// $arr = [2,5,7,9,10,21];


// function sommaNumeri($a,$b){
//     $a += $b;
//     return $a;
// }

// $risultato = array_reduce($arr, "sommaNumeri");

// echo $risultato;


//? Esercizio 2

// function checkLength($string)
// {
//     if (strlen($string) >= 8) {
//         return true;
//     }
       
//     echo "La password deve avere minimo 8 caratteri\n";
//     return false;
    
// }

// function checkUppercase($string)
// {
//     for ($i = 0; $i < strlen($string); $i++) {
//         if (ctype_upper($string[$i]) == true) {
//             return true;
//         }
//     }
//     echo "La password deve contenere una Maiuscola\n";
//     return false;
// }

// function checkNumber($string)
// {
//     for ($i = 0; $i < strlen($string); $i++) {
//         if (is_numeric($string[$i]) == true) {
//             return true;
//         }
//     }
//     echo "La password deve contenere un numero\n";
//     return false;
// }

// function checkSpecials($string)
// {
//     $specials = ['!', "?", "*", "@"];
//     for ($i = 0; $i < strlen($string); $i++) {
//         if (in_array($string[$i], $specials)) {
//             return true;
//         }
//     }
//     echo "La password deve contenere un carattere speciale\n";
//     return false;
// }

// function checkPassword($string)
// {
//     $rule1 = checkLength($string);
//     $rule2 = checkUppercase($string);
//     $rule3 = checkNumber($string);
//     $rule4 = checkSpecials($string);

//     if ($rule1 && $rule2 && $rule3 && $rule4) {
//         return true;
//     } else {
//         return false;
//     }
// }

// $tentativi=0;

// $i = 0;
// do {
//     if($i>0){
//         echo "Ti rimangono " . 5-$i . " tentativi\n";
//     }
//     $password = readline('Inserisci una password: ');
//     $risultato = checkPassword($password);
//     $i++;
// } while ($risultato == false && $i < 5);

// if($risultato == false) {
//     echo "Hai esaurito i tentativi\n";
// } else {
//     echo "Password corretta\n";
// };


// $risultato = checkPassword($password);
// // var_dump($risultato);
