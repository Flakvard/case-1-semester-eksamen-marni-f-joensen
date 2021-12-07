<?php
function onSave()
{
    //print_r($_POST["note"]);
    saveToFile($_POST['note']);
}

function viseElement($Sletknappen)
{
    $notesArray2 = getFromFile();
    unset(($notesArray2)[$Sletknappen]);
    $jsonNotes = json_encode($notesArray2); //encoder det til en json

    file_put_contents("./indkobskurv.json", $jsonNotes); //Putter det i en json fil
    header("Location:/case-1-semester-eksamen-marni-f-joensen/indkoebskurv/test.php"); //fjerne ?i=0 i enden af URL koten
}

function saveToFile($note)
{
    $notesArray = getFromFile(); //skal bruges til næste gang (Get from fil, return json?)
    /*  */
    $notesArray[] = $note; //appender/pusher vores noter til en array. Det som [] laver er at vi tæller elementer og så tilsætter en ny element 
    $jsonNotes = json_encode($notesArray); //encoder det til en json

    file_put_contents("./indkobskurv.json", $jsonNotes); //Putter det i en json fil
}

function getFromFile()
{
    $jsonNotes1 = file_get_contents("./indkobskurv.json");
    $notesArray1 = json_decode($jsonNotes1, true); //True betyder - det skal vi ikke tænke som meget om?
    return $notesArray1; // returnerer til en variable
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
<?php    } ?>

<?php function Vælgmål()
{ ?>
    <form method="post">
        <div>
            <label for="mål">Vælg mål:</label> <br>
            <input type="text" name="Bredde" value="70"> Bredde i cm <br>
            <input type="text" name="Dybde" value="73"> Dybde i cm<br>
            <input type="text" name="Højde" value="88"> Højde i cm <br>

            <input type="text" name="antal"> Hvor mange antal møbler ønsker du?<br>
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
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
            Venligts gå til deres hjemmeside <a href="https://sorensenleather.com/collections/">Sørensenleather.com</a><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af læder du ønsker<br>
            <input type="text" name="læder">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
<?php    } ?>

<?php function VælgGabriel()
{ ?>
    <form method="post">
        <div>
            <label for="Gabriel">Vælg kvalitetstekstil fra danske Gabriel</label> <br>
            Venligts gå til deres hjemmeside <a href="https://www.gabriel.dk/en/fabrics/fabrics/?letter=">Gabriel.dk</a><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af tekstil du ønsker<br>
            <input type="text" name="Gabriel">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
<?php    } ?>


<?php function VælgKvadrat()
{ ?>
    <form method="post">
        <div>
            <label for="Kvadrat">Vælg kvalitetstekstil fra danske Kvadrat</label> <br>
            Venligts gå til deres hjemmeside <a href="https://www.kvadrat.dk/en/products?showallproducts=true">Kvadrat.dk</a><br>
            og skriv nedenfor <b>navn, farve </b>og<b> type </b>af tekstil du ønsker<br>
            <input type="text" name="Kvadrat">
        </div>
        <div>
            <button type="submit">Select</button>
        </div>
    </form>
<?php    } ?>

<?php function SeVaren()
{ ?>
    <form method="post">
        <input type="submit" name="SeVaren" value="Se din personlig vare" />
    </form>
<?php    } ?>

<?php function Bemærkning()
{ ?>
    <form method="post"> <?php // man kan også lave en (action="savenote.php" hvor den fører det til savenote)
                            ?>
        <input type="text" name="note" value="Ingen bemærkning"> Vis du har en bemærkning, så kan du skrive den her.<br>
        <button type="submit">Gem</button>
    </form>
<?php    } ?>

<?php function TilpassDitProdukt()
{ ?>
    <form method="post">
        <input type="submit" name="tilpasProduktet" value="Tilpass dit produkt" />
    </form>
<?php    } ?>