<table border="1"> <!-- Tablica sa obrubom (border=1) -->
    <form action="" method=""> <!-- Početak forme -->
        <tr>
            <td><label for="ime">Ime:</label></td> <!-- Prva ćelija s oznakom za polje Ime -->
            <td><input type="text" name="ime" id="ime"></td> <!-- Druga ćelija s tekstualnim poljem za unos imena -->
        </tr>
        <tr>
            <td><label for="prezime">Prezime</label></td> <!-- Prva ćelija za Prezime -->
            <td><input type="text" name="prezime" id="prezime"></td> <!-- Druga ćelija za unos prezimena -->
        </tr>
        <tr>
            <td><label for="email">Email:</label></td> <!-- Prva ćelija za Email -->
            <td><input type="email" name="email" id="email"></td> <!-- Druga ćelija s email input poljem -->
        </tr>
        <tr>
            <td><label for="lozinka">Lozinka</label></td> <!-- Prva ćelija za Lozinku -->
            <td><input type="password" name="lozinka" id="lozinka"></td> <!-- Druga ćelija za unos lozinke -->
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Pošalji"></td> <!-- Dugme za slanje forme, koje se proteže preko dvije ćelije -->
        </tr>
    </form> <!-- Kraj forme -->
</table>