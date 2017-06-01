<html>
    <head>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <ul class="nav nav-pills col-lg-8 col-lg-offset-2">
            <li role="presentation"><a href="index.php">Accueil</a></li>
  <li role="presentation" class="active"><a href="etu.php">Etudiant</a></li>
  <li role="presentation"><a href="cursus.php">Cursus</a></li>
  <li role="presentation"><a href="reglement.php">Réglement</a></li>
        </ul>
        <h1>Ajouter un étudiant</h1>
            <div class="container" >
                <div class="col-lg-8 col-lg-offset-2">
            <form method="post" action="#">
                
                        <div class="form-group">
                        <label>Numéro de carte d'étudiant</label>
                        <input type="text" name="numero"/>
                        </div>
                        
                        <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom"/>
                        </div>
                        
                        <div class="form-group">
                        <label>Prénom</label>
                  
                        <input type="text" name="prenom"/>
                        </div>
                  
                        <div class="form-group">
                        <label>Admission</label>
                  
                        <select name='admission'>
                            <option>TC</option>
                            <option>BR</option>
                        </select>
                        </div>
                        
                        <div class="form-group">
                        <label>Filière</label>
                   
                        <select name='filiere'>
                            <option>?</option>
                            <option>MPL</option>
                            <option>MSI</option>
                            <option>MRI</option>
                            <option>LIB</option>
                        </select>
                        </div>
                        
                         <div class="form-group">
                        <input type="submit"/>
                         </div>
                         <div class="form-group">
                        <input type="reset"/>
                         </div>
                  
            </form>
       </div>
    </body>
    
    
    
    
    
    
</html>