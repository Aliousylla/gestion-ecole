<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="../public//css/style2.css">
</head>
<body>


<div class="container bg-primary mt-5 shadow-lg">
  <div class="row">
       
    <div class="col bg-light p-5">
    <form action="store.php" class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">

  <div class="col-md-4">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" required name="nom">
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="Prenom" class="form-label">prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="matricule" class="form-label">Matricul</label>
    <input type="text" class="form-control" id="matricule" name="matricule" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="telephone" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="telephone" required name="telephone">
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
    <label for="date_naissance" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
    <input type="text" class="form-control" id="lieu_naissance" required name="lieu_naissance">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="nationalite" class="form-label">Nationalite</label>
    <input type="text" class="form-control" id="nationalite" name="nationalite" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="passeport_cin" class="form-label">Passepord ou cin</label>
    <input type="text" class="form-control" id="passeport_cin" required name="passeport_cin">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="niveau" class="form-label">Passepord ou cin</label>
    <input type="text" class="form-control" id="niveau" required name="niveau">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="filiere" class="form-label">Filiere</label>
    <input type="text" class="form-control" id="filiere" required name="filiere">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="promo" class="form-label">Promo</label>
    <input type="text" class="form-control" id="promo" required name="promo">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="Prenom" class="form-label">photo</label>
    <input type="file" class="form-control" id="photo" name="photo" required>
    <div class="valid-feedback">
    </div>
  </div>

 <h1>contact urgence</h1>

  <div class="col-md-4">
    <label for="parente" class="form-label">parente</label>
    <select class="form-select" id="parente" required name="parente">
      <option selected disabled value="">Lien de parente</option>
      <option>pere</option>
      <option>mere</option>
      <option>oncle</option>
      <option>autre membre de la famille</option>
    </select>
  </div>

  
  <div class="col-md-4">
    <label for="nom_parent" class="form-label">nom_parent</label>
    <input type="text" class="form-control" id="nom_parent" required name="nom_parent">
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="prenom_parent" class="form-label">prenom_parent</label>
    <input type="text" class="form-control" id="prenom_parent" name="prenom_parent" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="adresse_parent" class="form-label">adresse_parent</label>
    <input type="text" class="form-control" id="adresse_parent" name="adresse_parent" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="telephone_parent" class="form-label">telephone_parent</label>
    <input type="text" class="form-control" id="telephone_parent" required name="telephone_parent">
    <div class="valid-feedback">
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="email_parent" class="form-label">email_parent</label>
    <input type="text" class="form-control" id="email_parent" required name="email_parent">
    <div class="valid-feedback">
    </div>
  </div>
  

 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Ajouter</button>
  </div>
</form>   
</div>
  </div>
</div>
</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>