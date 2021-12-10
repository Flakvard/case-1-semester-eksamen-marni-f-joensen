<?php

if (isset($_POST["note"])) {
    onSave();
}

if (isset($_GET["i"])) {
    processForm();
}

if (isset($_GET["j"])) {
    $SletOgRediger = count(getFromFile());
    RedigerVarene($SletOgRediger);

?>
    <form method="post"> <?php // man kan også lave en (action="savenote.php" hvor den fører det til savenote)                            
                            ?>
        <input type="text" name="Redigering"> Hvad skal det ændres til?.<br>
        <button type="submit">Gem</button><br>
        Efter du har gemt, tryk tilbage
        <br>
    </form>
    <a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/produkter/plus-5012.php">Tilbage</a>
<?php
    @$nye_value = (string)$_POST["Redigering"];
    skiftElement(($_GET['j']), $nye_value);

    if (isset($_GET["færdig"])) {
        $SletOgRediger = count(getFromFile());
        SeVaren($SletOgRediger);
    }
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
    saveToFile("Sørensen Leather");
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

if (isset($_POST["Bredde"]) || isset($_POST["Dybde"]) || isset($_POST["Højde"])) {
    $selectedBredde = (int)$_POST["Bredde"];
    $selectedDybte = (int)$_POST["Dybde"];
    $selectedHøjde = (int)$_POST["Højde"];
    saveToFile($selectedBredde);
    saveToFile($selectedDybte);
    saveToFile($selectedHøjde);
    Bemærkning();
}
if (isset($_POST["note"])) {
    VælgAntal();
}
if (isset($_POST["antal"])) {
    $SelectedAntal = (int)$_POST["antal"];
    saveToFile($SelectedAntal);
    $SletOgRediger = count(getFromFile());
    SeVaren($SletOgRediger);
}

if (isset($_POST["RetEllerSlet"])) {
    $SletOgRediger = count(getFromFile());
    SeVaren($SletOgRediger);
}

if (isset($_POST["Slet"])) {
    $SletOgRediger = count(getFromFile());
    SletVarerne($SletOgRediger);
}
if (isset($_POST["Rediger"])) {
    $SletOgRediger = count(getFromFile());
    RedigerVarene($SletOgRediger);
}

if (isset($_POST["TilføjTilIndkøbskurv"])) {
    TilføjTilIndkøbskurv();
    ClearJsonFile();
}

if (isset($_POST["sletAlt"])){
    ClearJsonFile();
}

?>