@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Liste des candidats</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Niveau d'etude</th>
                        <th>Age</th>
                        <th>Sexe</th>
                    </thead>
                    <tbody>
                        @foreach ($candidats as $candidat )
                        <tr>
                            <td>{{$candidat->id}}</td>
                            <td>{{$candidat->nom}}</td>
                            <td>{{$candidat->prenom}}</td>
                            <td>{{$candidat->mail}}</td>
                            <td>{{$candidat->niveau_etude}}</td>
                            <td>{{$candidat->age}}</td>
                            <td>{{$candidat->sexe}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
