<!-- resources/views/userprofile/create.blade.php -->




    <form action="{{ route('userprofile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="last_name">Nom :</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
        </div>

        <div class="form-group">
            <label for="first_name">Prénom :</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
        </div>

        <div class="form-group">
            <label for="gender">Sexe :</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Homme</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dob">Date de naissance :</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}" required>
        </div>

        <div class="form-group">
            <label for="birthplace">Lieu de naissance :</label>
            <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{ old('birthplace') }}" required>
        </div>

        <div class="form-group">
            <label for="residence">Pays de résidence :</label>
            <input type="text" class="form-control" id="residence" name="residence" value="{{ old('residence') }}" required>
        </div>

        <div class="form-group">
            <label for="marital_status">État civil :</label>
            <select class="form-control" id="marital_status" name="marital_status" required>
                <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>Célibataire</option>
                <option value="married" {{ old('marital_status') == 'married' ? 'selected' : '' }}>Marié(e)</option>
                <option value="divorced" {{ old('marital_status') == 'divorced' ? 'selected' : '' }}>Divorcé(e)</option>
                <option value="widowed" {{ old('marital_status') == 'widowed' ? 'selected' : '' }}>Veuf(ve)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="children_count">Nombre d'enfants :</label>
            <input type="number" class="form-control" id="children_count" name="children_count" value="{{ old('children_count') }}" required>
        </div>

        <div class="form-group">
            <label for="disability">Handicap :</label>
            <select class="form-control" id="disability" name="disability" required>
                <option value="no" {{ old('disability') == 'no' ? 'selected' : '' }}>Non</option>
                <option value="yes" {{ old('disability') == 'yes' ? 'selected' : '' }}>Oui</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cv">CV (fichier PDF, DOC) :</label>
            <input type="file" class="form-control" id="cv" name="cv">
        </div>

        <div class="form-group">
            <label for="cover_letter">Lettre de motivation (fichier PDF, DOC) :</label>
            <input type="file" class="form-control" id="cover_letter" name="cover_letter">
        </div>

        <div class="form-group">
            <label for="sector">Secteur :</label>
            <input type="text" class="form-control" id="sector" name="sector" value="{{ old('sector') }}" required>
        </div>

        <div class="form-group">
            <label for="job_id">ID du poste :</label>
            <input type="number" class="form-control" id="job_id" name="job_id" value="{{ old('job_id') }}" required>
        </div>

        <div class="form-group">
            <label for="experience_2">Années d'expérience :</label>
            <input type="number" class="form-control" id="experience_2" name="experience_2" value="{{ old('experience_2') }}" required>
        </div>

        <div class="form-group">
            <label for="degree">Diplôme :</label>
            <input type="text" class="form-control" id="degree" name="degree" value="{{ old('degree') }}" required>
        </div>

        <div class="form-group">
            <label for="institution">Institution :</label>
            <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution') }}" required>
        </div>

        <div class="form-group">
            <label for="degree_title">Intitulé du diplôme :</label>
            <input type="text" class="form-control" id="degree_title" name="degree_title" value="{{ old('degree_title') }}" required>
        </div>

        <div class="form-group">
            <label for="graduation_year">Année de graduation :</label>
            <input type="number" class="form-control" id="graduation_year" name="graduation_year" value="{{ old('graduation_year') }}" required>
        </div>

        <div class="form-group">
            <label for="specialty">Spécialité :</label>
            <input type="text" class="form-control" id="specialty" name="specialty" value="{{ old('specialty') }}" required>
        </div>

        <div class="form-group">
            <label for="other_degrees">Autres diplômes :</label>
            <input type="text" class="form-control" id="other_degrees" name="other_degrees" value="{{ old('other_degrees') }}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

