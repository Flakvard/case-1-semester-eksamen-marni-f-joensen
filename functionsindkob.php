
<?php

function ClearIndkobskurv()
{
    // read json file
    $data = file_get_contents("../Indkoebskurv/tilpasseVaren.json");

    // decode json to associative array
    $notesArray = json_decode($data, true);

    // get array index to delete
    $arr_index = array();
    foreach ($notesArray as $key => $value) {
        if (1 == 1) {
            $arr_index[] = $key;
        }
    }

    // delete data
    foreach ($arr_index as $i) {
        unset($notesArray[$i]);
    }
    // rebase array
    $notesArray = array_values($notesArray);

    // encode array to json and save to file
    file_put_contents("../Indkoebskurv/tilpasseVaren.json", json_encode($notesArray));
}


function getFromIndkøbskurven()
{
    $jsonNotes1 = file_get_contents("C:\\xampp\\htdocs\\case-1-semester-eksamen-marni-f-joensen\\Indkoebskurv\\indkobskurv.json");
    $notesArray1 = json_decode($jsonNotes1, true); //True betyder - det skal vi ikke tænke som meget om?
    return $notesArray1; // returnerer til en variable
}
?>