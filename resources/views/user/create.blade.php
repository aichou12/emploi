<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Enregistrement</title>
</head>
<body>
    <h1>Enregistrer un Utilisateur</h1>

    <!-- Affichage des messages de succès -->
    @if (session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="last_name">Nom :</label>
            <input type="text" name="last_name" value="{{ old('last_name') }}" required><br>
            @error('last_name') <span style="color: red;">{{ $message }}</span><br> @enderror
        </div>

        <div>
            <label for="first_name">Prénom :</label>
            <input type="text" name="first_name" value="{{ old('first_name') }}" required><br>
            @error('first_name') <span style="color: red;">{{ $message }}</span><br> @enderror
        </div>

        <div>
            <label for="gender">Genre :</label>
            <select name="gender" required>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Homme</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Femme</option>
            </select><br>
            @error('gender') <span style="color: red;">{{ $message }}</span><br> @enderror
        </div>

        <div>
            <label for="birthplace">Lieu de naissance :</label>
            <input type="text" name="birthplace" value="{{ old('birthplace') }}" required><br>
            @error('birthplace') <span style="color: red;">{{ $message }}</span><br> @enderror
        </div>

        <!-- Les autres champs ici -->

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
