<?php
function onSave()
{
    saveToFile($_POST['note']);
}

function sletElement($Sletknappen)
{
    $notesArray2 = getFromFile();
    unset(($notesArray2)[$Sletknappen]);
    $jsonNotes = json_encode($notesArray2); //encoder det til en json

    file_put_contents("../Indkoebskurv/tilpasseVaren.json", $jsonNotes); //Putter det i en json fil
    header("Location:/case-1-semester-eksamen-marni-f-joensen/produkter/plus-5012.php"); //fjerne ?i=0 i enden af URL koten
}

function skiftElement($elementSelected, $nye_value)
{
    $notesArray = getFromFile();
    $notesArray[$elementSelected] = $nye_value;

    $jsonNotes = json_encode($notesArray); //encoder det til en json

    file_put_contents("../Indkoebskurv/tilpasseVaren.json", $jsonNotes); //Putter det i en json fil
    //header("Location:/case-1-semester-eksamen-marni-f-joensen/indkoebskurv/test.php"); //fjerne ?j=0 i enden af URL koten

} ?>

<?php


function processForm()
{
    if (1 == 1) {
        sletElement(($_GET['i']));
    }
}


function saveToFile($indkøbskurv)
{
    $notesArray = getFromFile(); //skal bruges til næste gang (Get from fil, return json?)
    /* */
    $notesArray[] = $indkøbskurv; //appender/pusher vores noter til en array. Det som [] laver er at vi tæller elementer og så tilsætter en ny element
    $jsonNotes = json_encode($notesArray); //encoder det til en json

    file_put_contents("../Indkoebskurv/tilpasseVaren.json", $jsonNotes); //Putter det i en json fil
}

function getFromFile()
{
    $jsonNotes1 = file_get_contents("../Indkoebskurv/tilpasseVaren.json");
    $notesArray1 = json_decode($jsonNotes1, true); //True betyder - det skal vi ikke tænke som meget om?
    return $notesArray1; // returnerer til en variable
}

function ClearJsonFile()
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

?>
<?php function VælgEgebejdseformer()
{ ?>
    <form method="post">
        <div>
            <label for="egebejdseformer">Vælg bejdseformer for egetræet:</label>

            <select name="egebejdseformer" id="egebejdseformer">
                <option value="Ubehandlet">Ubehandlet</option>
                <option value="Natur">Natur</option>
                <option value="Lysnet">Lysnet</option>
                <option value="Hvidolieret">Hvidolieret</option>
                <option value="Lysbrun">Lys brun</option>
                <option value="Sortbejdset">Sortbejdset</option>
            </select>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <img src="../img/bejseform-eg.png" alt="Mål for varen" width="" height="">
<?php    } ?>

<?php function VælgBogebejdseformer()
{ ?>
    <form method="post">
        <div>
            <label for="bogebejdseformer">Vælg bejdseformer for bøgetræet:</label>

            <select name="bogebejdseformer" id="egebejdseformer">
                <option value="Ubehandlet">Ubehandlet</option>
                <option value="Natur">Natur</option>
                <option value="Lysnet">Lysnet</option>
                <option value="Hvidolieret">Hvidolieret</option>
                <option value="Kirsebaer">Kirsebær</option>
                <option value="Lysbrun">Lys brun</option>
                <option value="Teak">Teak</option>
                <option value="Maghogni">Maghogni</option>
                <option value="Sortbejdset">Sortbejdset</option>
            </select>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <img src="../img/bejseform-bøg.png" alt="Mål for varen" width="" height="">

<?php    } ?>

<?php function VælgStel()
{ ?>
    <form method="post">
        <div>
            <label for="stel">Vælg stel:</label> <br>
            <select name="selectedStel" id="stel">
                <option value="Egetræ">Egetræ</option>
                <option value="Bøgetræ">Bøgetræ</option>
            </select>
        </div>
        <div>
            <button type="submit">Select</button>

        </div>
    </form>
    <br><br>
    <img src="../img/stel.png" alt="Stel for varen" width="900" height="400">
<?php    } ?>

<?php function VælgBetræk()
{ ?>
    <form method="post">
        <div>
            <label for="betræk">Vælg betræk:</label> <br>
            <select name="selectedBetræk" id="stel">
                <option value="Tekstil">Tekstil</option>
                <option value="Lædermateriale">Lædermateriale</option>
            </select>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <br><br>
    <img src="../img/tekstilVSlæder.png" alt="Mål for varen" width="492" height="399">

<?php    } ?>

<?php function VælgTekstil()
{ ?>
    <form method="post">
        <div>
            <label for="betræk">Vælg teksil leverandør:</label> <br>
            <select name="selectedteksil" id="stel">
                <option value="Gabriel">Vælg kvalitetstekstil fra danske Gabriel</option>
                <option value="Kvadrat">Vælg kvalitetstekstil fra danske Kvadrat</option>
            </select>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
<?php    } ?>

<?php function VælgLæder()
{ ?>
    <form method="post">
        <div>
            <label for="læder">Vælg ægte læder fra danske Sørensen Leather</label> <br>
            Venligts gå til deres hjemmeside her <b><a href="https://sorensenleather.com/collections/">www.sørensenleather.com</a></b><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af læder du ønsker<br>
            <input type="text" name="læder">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <br><br>
    <a href="https://sorensenleather.com/collections/">
        <img src="../img/sorensenleather.png" alt="Mål for varen" width="692" height="250">
    </a>
<?php    } ?>

<?php function VælgGabriel()
{ ?>
    <form method="post">
        <div>
            <label for="Gabriel">Vælg kvalitetstekstil fra danske Gabriel</label> <br>
            Venligts gå til deres hjemmeside her <b><a href="https://www.gabriel.dk/en/fabrics/fabrics/?letter=">www.gabriel.dk</a></b><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af tekstil du ønsker<br>
            <input type="text" name="Gabriel">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <br><br>
    <a href="https://www.gabriel.dk/en/fabrics/fabrics/?letter=">
        <img src="../img/gabriel.png" alt="Mål for varen" width="692" height="250">
    </a>
<?php    } ?>


<?php function VælgKvadrat()
{ ?>
    <form method="post">
        <div>
            <label for="Kvadrat">Vælg kvalitetstekstil fra danske Kvadrat</label> <br>
            Venligts gå til deres hjemmeside her <b> <a href="https://www.kvadrat.dk/en/products?showallproducts=true">www.kvadrat.dk</a></b><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af tekstil du ønsker<br>
            <input type="text" name="Kvadrat">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <br><br>
    <a href="https://www.kvadrat.dk/en/products?showallproducts=true">
        <img src="../img/kvadrat.png" alt="Mål for varen" width="692" height="250">
    </a>
<?php    } ?>


<?php function Bemærkning()
{ ?>
    <form method="post"> <?php // man kan også lave en (action="savenote.php" hvor den fører det til savenote)
                            ?>
        <input type="text" name="note" value="Ingen bemærkning"> Vis du har en bemærkning, så kan du skrive den her.<br>
        <button type="submit">Gem</button>
    </form>
<?php    } ?>


<?php function Vælgmål()
{ ?>
    <form method="post">
        <div>
            <label for="mål">Vælg mål:</label> <br>
            <input type="text" name="Bredde" value="70"> Bredde i cm <br>
            <input type="text" name="Dybde" value="73"> Dybde i cm<br>
            <input type="text" name="Højde" value="88"> Højde i cm <br>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
    <br><br>
    <img src="../img/mål-billede.png" alt="Mål for varen" width="" height="">
<?php    } ?>

<?php function VælgAntal()
{ ?>
    <form method="post">
        <div>
            <label for="mål">Vælg antal:</label> <br>
            <input type="text" name="antal"> Hvor mange antal møbler ønsker du?<br>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
<?php    } ?>

<?php function SeVaren($SletOgRediger)
{ ?>
    <ul>
        <!-- Her starter jeg mit loop -->
        <?php foreach (jsonToOrder() as $i => $indkøbskurv) { ?>
            <li>
                <?php echo ("$i = $indkøbskurv");
                ?>
            </li>
        <?php } ?>
        <form method="post">
            <input type="hidden" name="SletteOgRedigere" value="<?php echo $SletOgRediger; ?>" />
            <button type="submit" name="Gem">Gem </button>
            <button type="submit" name="Rediger">Rediger</button>
            <button type="submit" name="Slet">Slet </button><br>
            <button type="submit" name="TilføjTilIndkøbskurv">Tilføj til indkøbskurven </button>
        </form>
    </ul>
<?php    } ?>

<?php function SletVarerne($SletOgRediger)
{ ?>
    <ul>
        <!-- Her starter jeg mit loop -->
        <?php foreach (getFromFile() as $i => $indkøbskurv) { ?>
            <li>
                <?php echo ($indkøbskurv);
                ?>
                <a href="?i=<?php echo $i; ?>">Slet</a>
            </li>
        <?php } ?>
        <form method="post">
            <input type="hidden" name="SletteOgRedigere" value="<?php echo $SletOgRediger; ?>" />
            <button type="submit" name="Gem">Gem</button>
            <button type="submit" name="sletAlt">Slet alt</button>
        </form>
    </ul>
<?php    } ?>

<?php function RedigerVarene($SletOgRediger)
{ ?>
    <ul>
        <!-- Her starter jeg mit loop -->
        <?php foreach (getFromFile() as $i => $indkøbskurv) { ?>
            <li>
                <?php echo ($indkøbskurv);
                ?>
                <a href="?j=<?php echo $i; ?>">Rediger</a>
            </li>
        <?php } ?>
        <form method="post">
            <input type="hidden" name="SletteOgRedigere" value="<?php echo $SletOgRediger; ?>" />
        </form>
    </ul>
<?php    } ?>

<?php
function jsonToOrder()
{ //Henter Json filen og laver index tal om til tekst og returnerer den
    $jsonNotes = file_get_contents("../Indkoebskurv/tilpasseVaren.json");
    $notesArray = json_decode($jsonNotes, true); //True betyder - det skal vi ikke tænke som meget om?
    @$Order = [
        "Stel" => $notesArray[0],
        "Bejdsefrom" => $notesArray[1],
        "Betræk" => $notesArray[2],
        "Leverandør" => $notesArray[3],
        "Material" => $notesArray[4],
        "Bredde" => $notesArray[5],
        "Dybde" => $notesArray[6],
        "Højde" => $notesArray[7],
        "Bemærkning" => $notesArray[8],
        "Antal" => $notesArray[9],
    ];
    return $Order;
}

function TilføjTilIndkøbskurv()
{
    $indkøbskurv = jsonToOrder(); //appender/pusher vores noter til en array. Det som [] laver er at vi tæller elementer og så tilsætter en ny element
    $jsonNotes = json_encode($indkøbskurv); //encoder det til en json

    file_put_contents("../Indkoebskurv/indkobskurv.json", $jsonNotes); //Putter det i en json fil
}

function getFromIndkøbskurv()
{
    $jsonNotes1 = file_get_contents("../Indkoebskurv/indkobskurv.json");
    $notesArray1 = json_decode($jsonNotes1, true); //True betyder - det skal vi ikke tænke som meget om?
    return $notesArray1; // returnerer til en variable
}
?>