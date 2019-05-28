<table class="table table-bordered table-striped">
    <thread>
        <th> ID </th>
        <th> Prix </th>
        <th> Titre </th>
        <th> Genre </th>
    </thread>
    @foreach($lesMangas as $Manga)
        <tr>
            <td> {{ $Manga->getIdManga() }}</td>
            <td> {{ $Manga->getPrix() }}</td>
            <td> {{ $Manga->getTitre()}}</td>
            <td> {{ $Manga->getGenre()}}</td>
            @foreach($lesGenres as $Genre)
                @if($Genre->getIdGenre()==$Manga->getGenre())
                    <td> {{ $Genre->getLibelleGenre() }}</td>
                @endif
                @endforeach
        </tr>
    @endforeach


</table>