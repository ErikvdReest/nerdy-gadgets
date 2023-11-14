<?php
include __DIR__ . "/header.php";
?>

<!DOCTYPE html>
<body>
<div class="box box2forms">
    <div class="box inloggen_account">

        <div id="loginform-parent">
            <h2>Inloggen met account</h2>
            Vul uw e-mail adres en wachtwoord in om in te loggen.<br><br>
            <form id="loginform" method="post" action="">
                <table class="adresgegevens">
                    <tbody><tr>
                        <th><label for="emailaddress">E-mail adres</label></th>
                        <td><input type="email" id="emailaddress" name="emailaddress" value="" autocomplete="email"></td>
                    </tr>
                    <tr>
                        <th><label for="password">Wachtwoord</label></th>
                        <td><input type="password" id="password" name="password" autocomplete="current-password"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit">Inloggen</button></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><a href="javascript:void(0);" onclick="$('#loginformparent').hide(); $('#passwordformparent').show();">Wachtwoord vergeten?</a></td>
                    </tr>
                    </tbody></table>
            </form>
        </div>

        <div class="form-separator"></div>

        <div class="box inloggen_nieuweklant">
            <form id="nieuweKlantForm" method="post" action="" autocomplete="off" novalidate="novalidate">
                <h2>Nieuwe klant</h2>
                Vul hieronder uw gegevens in om een account aan te maken. Uw gegevens worden per mail toegezonden.<br><br>
                <table class="adresgegevens">
                    <tbody><tr>
                        <th>Voornaam </th>
                        <td><input type="text" name="voornaam" class="" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Achternaam </th>
                        <td><input type="text" name="achternaam" class="" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Land *</th>
                        <td>
                            <div class="selectParent"><select name="land" id="land" class="">
                                    <option value="0">-- kies een land --</option>
                                    <option value="2">België</option><option value="1" selected="selected">Nederland</option>
                                </select></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Postcode </th>
                        <td><input type="text" name="postcode" id="postcode" onblur="PostcodeCheck();" class="" value="" style="width:6em;" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Huisnummer </th>
                        <td>
                            <input type="text" id="huisnummer" name="huisnummer" onblur="PostcodeCheck();" class=" small number" value="" style="width:4em;" autocomplete="off">
                            <input type="text" id="toevoegsel" name="toevoegsel" onblur="" class="small" value="" autocomplete="off" style="width:4em"> <small>a, I, bis, etc</small>
                        </td>
                    </tr>
                    <tr>
                        <th>Straatnaam </th>
                        <td><input type="text" id="straatnaam" name="straatnaam" class=" readonly" value="" autocomplete="off" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th>Plaats </th>
                        <td><input type="text" id="plaats" name="plaats" class=" readonly" value="" autocomplete="off" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th>E-mail adres </th>
                        <td><input type="text" name="email" id="email" class="" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit">Aanmelden</button></td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
    </div>
</div>
</body>