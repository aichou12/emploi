<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les Informations</title>
</head>
<body>

    <h1>Modifier les Informations</h1>

    <!-- Formulaire d'édition -->
    <form action="{{ route('info.update', $info->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  <!-- Utilisation de la méthode PUT pour l'update -->

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $info->nom) }}" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $info->prenom) }}" required>
        </div>

        <div>
            <label for="genre">Genre :</label>
            <select name="genre" id="genre" required>
                <option value="Homme" {{ old('genre', $info->genre) == 'Homme' ? 'selected' : '' }}>Homme</option>
                <option value="Femme" {{ old('genre', $info->genre) == 'Femme' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div>
            <label for="datenaiss">Date de Naissance :</label>
            <input type="date" id="datenaiss" name="datenaiss" value="{{ old('datenaiss', $info->datenaiss) }}" required>
        </div>

        <div>
            <label for="lieu">Lieu de Naissance :</label>
            <input type="text" id="lieu" name="lieu" value="{{ old('lieu', $info->lieu) }}" required>
        </div>

        <div>
            <label for="situation">Situation :</label>
            <input type="text" id="situation" name="situation" value="{{ old('situation', $info->situation) }}" required>
        </div>

        <div>
            <label for="nombrenfant">Nombre d'Enfants :</label>
            <input type="number" id="nombrenfant" name="nombrenfant" value="{{ old('nombrenfant', $info->nombrenfant) }}" required>
        </div>

        <!-- Nouveau champ 1: Expérience Professionnelle -->
        <div>
            <label for="exp_professionnelle">Expérience Professionnelle :</label>
            <input type="text" id="exp_professionnelle" name="exp_professionnelle" value="{{ old('exp_professionnelle', $info->exp_professionnelle) }}">
        </div>

        <!-- Nouveau champ 2: Nombre d'Années d'Expérience -->
        <div>
            <label for="nombrexp">Nombre d'Années d'Expérience :</label>
            <input type="text" id="nombrexp" name="nombrexp" value="{{ old('nombrexp', $info->nombrexp) }}">
        </div>

        <!-- Nouveau champ 3: Dernier Poste -->
        <div>
            <label for="dernierposte">Dernier Poste :</label>
            <input type="text" id="dernierposte" name="dernierposte" value="{{ old('dernierposte', $info->dernierposte) }}">
        </div>

        <!-- Nouveau champ 4: Dernière Entreprise -->
        <div>
            <label for="dernieremp">Dernière Entreprise :</label>
            <input type="text" id="dernieremp" name="dernieremp" value="{{ old('dernieremp', $info->dernieremp) }}">
        </div>

        <!-- Nouveau champ 5: CV -->
      <label for="cv">CV (URL ou chemin) :</label>
        
       

  
<input type="text" id="cv" name="cv" value="{{ old('cv', $info->cv) }}">
    


 


    

    
<div>
        
       

 
<label for="lettremoti">Lettre de Motivation (URL ou chemin) :</label>
        
   
<input type="text" id="lettremoti" name="lettremoti" value="{{ old('lettremoti', $info->lettremoti) }}">
    


 
</div>

    

 
<button type="submit">Mettre à jour</button>


        <button type="submit">Mettre à jour</button>
    </form>

</body>
</html>
