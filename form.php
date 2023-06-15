<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="container bg-primary mt-5 shadow-lg">
  <div class="row">
       
    <div class="col bg-light p-5">
    <form action="ajouer.php" class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">

  <div class="col-md-4">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" required name="nom">
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="Prenom" class="form-label">prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="matricul" class="form-label">Matricul</label>
    <input type="text" class="form-control" id="Matricul" name="matricul" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="Adresse" name="adresse" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="tel" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="tel" required name="tel">
    <div class="valid-feedback">
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" required name="email">
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="lieunaissance" class="form-label">Lieu de naissance</label>
    <input type="text" class="form-control" id="lieunaissance" name="lieunaissance" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="nationalite" class="form-label">Nationalite</label>
    <input type="text" class="form-control" id="Nationalite" name="nationalite" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="cp" class="form-label">Passepord ou cin</label>
    <input type="text" class="form-control" id="cp" required name="cp">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="datenaissance" class="form-label">Dete de naissance</label>
    <input type="date" class="form-control" id="cp" required name="datenaissance">
    <div class="valid-feedback">
    </div>
  </div>

 

  <div class="col-md-4">
    <label for="filiere" class="form-label">Filiere</label>
    <select class="form-select" id="Filiere" required name="filiere">
      <option selected disabled value="">MI</option>
      <option>DI</option>
    </select>
    
  </div>
  <div class="col-md-4">
    <label for="niveau" class="form-label">Niveau</label>
    <select class="form-select" id="Niveau" required name="niveau">
      <option selected disabled value="">Niveau d'etude</option>
      <option>TS1</option>
      <option>TS2</option>
      <option>MI1</option>
      <option>MI2</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-4">
    <label for="anne" class="form-label">Annee scolaire</label>
    <select class="form-select" id="annee" required name="anne">
      <option selected disabled value="">Annee scolaire</option>
      <option>2022 / 2023</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-md-4">
    <label for="Prenom" class="form-label">photo</label>
    <input type="file" class="form-control" id="photo" name="photo" required>
    <div class="valid-feedback">
    </div>
  </div>

 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>   
</div>
  </div>
</div>
</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>