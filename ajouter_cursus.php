<html>
    <head>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        
        <form method="get" action="ajouter_cursus_action.php" >
            <div class="container" >
                <div class="col-lg-8 col-lg-offset-2">
                
                <div class="form-group">
                <label>Numéro Etudiant</label>
                <input type="text" class="form-control" name="numEtu"/>
                </div>
                <div class="form-group">
                <label>Numéro de semestre UTT</label>
                <input type="text" class="form-control" name="numSem"/>
                </div>
                <div class="form-group">
                <label>Nom du semestre</label>
                <input type="text" class="form-control" name="nomSem"/>
                </div>
                <div class="form-group">
                <label>Nom de l'UE</label>
                <input type="text" name="nomUE"/>
                </div>
                <div class="form-group">
                <label>Catégorie de l'UE</label>
                <select name="typeUE">
                    <option>CS</option>
                    <option>TM</option>
                    <option>EC</option>
                    <option>ME</option>
                    <option>CT</option>
                    <option>HP</option>
                    <option>ST</option>
                    <option>NPML</option>
                </select>
                </div>
                <div class="form-group">
                <label>Affectation</label>
                <input type='radio' name="affect" value="TC">TC
                <input type='radio' name="affect" value="TCBR">TCBR
                <input type='radio' name="affect" value="FCBR">FCBR
                <input type='radio' name="affect" value="FCBR">BR
                <input type='radio' name="affect" value="FCBR">UTT
                </div>
                <div class="form-group">
                <label>Semestre effectué à l'UTT</label>
                <input type='radio' name="semUTT" value="oui">Oui
                <input type='radio' name="semUTT" value="non">Non
                </div>
                <div class="form-group">
                <label>UE correspond au profil</label>
                <input type='radio' name="profil" value="oui">Oui
                <input type='radio' name="profil" value="non">Non
                </div>
                <div class="form-group">
                <label>Résultat obtenu à l'UE</label>
                <select name="resultat">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                    <option>FX</option>
                    <option>ABS</option>
                    <option>ADM</option>
                    <option>RES</option>
                </select>
                
                </div>
                
                <div class="form-group">
                <label>Crédits obtenus</label>
                <input type="text"  name="credit"/>
                </div>
                <input type="submit">
               
                </div>
            </div>
            

            </form>
        
        
        
    </body>
    
    
</html>
