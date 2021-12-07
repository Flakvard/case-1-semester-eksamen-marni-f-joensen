<?php

if (isset($_POST["note"])) {
    onSave();
}

if (isset($_GET["i"])) {
    viseElement(($_GET['i']));
}

if (isset($_POST["tilpasProduktet"])) {
    VælgStel();
}

if (isset($_POST["selectedStel"])) {
    $selectedStel = (string)$_POST["selectedStel"];
    saveToFile($selectedStel);

    if ($selectedStel == "Egetræ") {
        VælgEgebejdseformer();
    } else {
        VælgBogebejdseformer();
    }
}
if (isset($_POST["egebejdseformer"])) {
    $selectedBejdseform = (string)$_POST["egebejdseformer"];
    saveToFile($selectedBejdseform);
} elseif (isset($_POST["bogebejdseformer"])) {
    $selectedBejdseform = (string)$_POST["bogebejdseformer"];
    saveToFile($selectedBejdseform);
}

if (isset($_POST["bogebejdseformer"]) || isset($_POST["egebejdseformer"])) {

    VælgBetræk();
}
if (isset($_POST["selectedBetræk"])) {
    $selectedBetræk = (string)$_POST["selectedBetræk"];
    saveToFile($selectedBetræk);
    if ($selectedBetræk == "Tekstil") {
        VælgTekstil();
    } else {
        VælgLæder();
    }
}
if (isset($_POST["selectedteksil"])) {
    $selectedTekstilLev = (string)$_POST["selectedteksil"];
    saveToFile($selectedTekstilLev);
    if ($selectedTekstilLev == "Gabriel") {
        VælgGabriel();
    } else {
        VælgKvadrat();
    }
}

if (isset($_POST["læder"])) {
    $selectedtekstil = (string)$_POST["læder"];
    saveToFile($selectedtekstil);
    Vælgmål();
} elseif (isset($_POST["Kvadrat"])) {
    $selectedtekstil = (string)$_POST["Kvadrat"];
    saveToFile($selectedtekstil);
    Vælgmål();
} elseif (isset($_POST["Gabriel"])) {
    $selectedtekstil = (string)$_POST["Gabriel"];
    saveToFile($selectedtekstil);
    Vælgmål();
}

if (isset($_POST["antal"])) {
    $selectedBredde = (int)$_POST["Bredde"];
    $selectedDybte = (int)$_POST["Dybde"];
    $selectedHøjde = (int)$_POST["Højde"];
    $SelectedAntal = (int)$_POST["antal"];
    saveToFile($selectedBredde);
    saveToFile($selectedDybte);
    saveToFile($selectedHøjde);
    saveToFile($SelectedAntal);
    Bemærkning();
}
if (isset($_POST["note"])){
    SeVaren();
}
?>