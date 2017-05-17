<html>
    <head></head>
    <body>
        <table>
            <form method="post" action="action_etu.php">
                <tr>
                    <td>
                        <label>Numéro de carte d'étudiant</label>
                    </td>
                    <td>
                        <input type="text" name="numero"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nom</label>
                    </td>
                    <td>
                        <input type="text" name="nom"/>
                    </td>
                <tr>
                    <td>
                        <label>Prénom</label>
                    </td>
                    <td>
                        <input type="text" name="prenom"/>
                    </td>
                <tr>
                    <td>
                        <label>Admission</label>
                    </td>
                    <td>
                        <select name='admission'>
                            <option>TC</option>
                            <option>BR</option>
                        </select><br>
                    </td>
                <tr>
                    <td>
                        <label>Filière</label>
                    </td>
                    <td>
                        <select name='filiere'>
                            <option>?</option>
                            <option>MPL</option>
                            <option>MSI</option>
                            <option>MRI</option>
                            <option>LIB</option>
                        </select>
                    </td>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit"/>
                    </td>
                    <td>
                        <input type="reset"/>
                    </td>
                </tr>
            </form>
    </body>
    
    
    
    
    
    
</html>