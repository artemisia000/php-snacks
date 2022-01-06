
<?php

//SNACK 1

//creiamo un array contente le partite di basket di un'ipotetica tappa del calendario.
//ogni array avrà una squadra ospite ed una squadra di casa,punti fatti della squadrea di casa e punti fatti della squadra ospite.
//stampiamo a schermo tutte le patite con questo schema.
//Olimpia Milano - Cantù | 55-60

$matches = [
    [
        'team1' => 'Acqua S.Bernanrdo Cantù',
        'team2' => 'Dolomiti Trentino',
        'pointTeam1' => '70',
        'pointTeam2' => '45'
    ],
    [
        'team1' => 'Recoaro Terme Abano',
        'team2' => 'Basket Genova',
        'pointTeam1' => '50',
        'pointTeam2' => '35'
    ],
    [
        'team1' => 'Virtus Roma',
        'team2' => 'Dolomiti Bellunesi',
        'pointTeam1' => '63',
        'pointTeam2' => '38'
    ],
    [
        'team1' => 'Colussi Mantova',
        'team2' => 'Serenissima',
        'pointTeam1' => '60',
        'pointTeam2' => '38'
    ],  
    ];  

     //ciclo per stampare tutta l 'array di oggetti

    for ($i = 0; $i < count($matches); $i++ ){
    
    #stampiamo le squadre conrelativo punteggio come da schema

    echo $matches[$i]['team1']. "-" . $matches[$i]['team2']. "|" . $matches[$i]['pointTeam1']. "-". $matches[$i]['pointTeam2']. "<br>";

}

?>

<?php

//SNACK 2

//Passare coe parametri GET name,age,mail e verificare(cercando i metodi che non conosciamo nella documentazione),
//che name sia più lungo di 3 caratteri,che mail contenga un punto e una chiocciola  e che age sia un numero.
//Se uyyo è OK stampare "accesso riuscito",altrimenti "accesso negato". 


#variabili per contenere,name,age,mail 

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];

#condizione che (strlen)nome ritorna lunghezza stringa min di 3, (strpos)cerco nella stringa  . e @ e l'età deve essere un numero(is_numeric)

if (strlen($name) < 3 && (strpos($mail, '.') && strpos($mail, '@')) && is_numeric($age)) {

    echo 'Accesso riuscito';
}

else{

    echo 'Accesso negato';
}

?>

