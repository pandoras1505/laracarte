@extends('layouts.master', ['title' => 'About'])

@section('content')
    <div class="col-sm-8 mx-auto">
        <h2>C'est quoi Laracarte?</h2><br>
            <p>Laracarte est un clone de <a href="https://laramap.com" target="_blank">Laramap.com</a> </p>
                <div class="row col-md-9">
                        <p class="alert alert-warning">
                        <strong><i><img src="../resources/icons/exclamation-triangle-fill.svg" alt="" width="32" height="32" title="Bootstrap"></i> This app has been built for learning purpose</strong>         
                        </p>
                        <p>Voici le lien du <a href="https://github.com/pandoras1505/laracarte" class="">code source du projet</a></p>
                </div>

        <hr>
        
        <h2>C'est quoi Laramap?</h2><br>
            <p>Laramap est un site inspiré de Laracarte</p>
            <p>Pour plus d'information cliquer <a href="#">ici</a></p>
        <hr>

        <h2>Quels sont les services et composant utilisé dans Laracarte</h2><br>
            <p>De manière basique, elle est crée avec Laravel et Bootstrap. Mais il existe une panoplie de services utilisé pour le mail et d'autres sections</p>
            <ul>
                <li>Laravel</li>
                <li>Bootstrap</li>
                <li>Amason S3</li>
                <li>Mandrill</li>
                <li>Google Maps</li>
                <li>Gravatar</li>
                <li>Antony Martin's Geolocalisation Package</li>
                <li>Michel Fortin's Marcdown Parser Package</li>
                <li>Heroku</li>
            </ul>
        <hr>
    </div>
@stop