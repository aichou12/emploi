<!-- resources/views/info/index.blade.php -->

@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Genre</th>
            <th>Date de Naissance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($infos as $info)
            <tr>
                <td>{{ $info->nom }}</td>
                <td>{{ $info->prenom }}</td>
                <td>{{ $info->genre }}</td>
                <td>{{ $info->datenaiss }}</td>
                <td>
                    <a href="{{ route('info.edit', $info->id) }}">Modifier</a>
                    <form action="{{ route('info.destroy', $info->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
