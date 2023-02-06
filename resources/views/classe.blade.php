<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/resources">
    </head>

    <body>
        <div class="container">
            <div class="card-footer">
                <h1 class="text-center">ZE NDIAYE</h1>
            </div>
        </div>
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Liste des etudiants</h1>
            </div>
            <br>
            <br>
            <br>
            <div style="background-color: #AED6F1; width:80%">
                <div style="background-color: white; width:60%">
            <table style="width: 100%" border=1>
                <tr style="background-color:#AED6F1; color:white; font-size:20px;padding:5px">
                    <td>PRENOM</td>
                    <td>NOM</td>
                    <td>MATIERE</td>
                    <td>NOTE</td>
                    <td>DEXAMEN</td>
                    <td>SEMESTRE</td>
                </tr>

                
            @if ($etudiants->count() > 0)
                        @foreach ($etudiants as $p) 
                            <tr>
                                <td>{{ $p->prenom }}</td>
                                <td>{{ $p->nom }}</td>
                               
                                @foreach ($p->matieres as $matiere ) 
                                 <td> {{ $matiere->nom }} </td>                            
                                <td> {{ $matiere->pivot->note}} </td>
                                <td> {{ $matiere->pivot->examen}} </td>
                                @endforeach
                                
                                @foreach ($p->semestres as $semestre )
                                    <td> {{$semestre->nom }} </td> 
                                @endforeach
                                
                               
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun etudiant  dans la base</span>
            @endif 
                
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('liste.welcome')}}">
            Ajouter un etudiant</a>
            <br><br><br>
        
            <span hidden>  {{$som = 0}}</span>
        
            @foreach ($etudiants as $p) 
              
            @foreach ($p->matieres as $matiere ) 
           <span hidden> {{$som += $matiere->pivot->note + $matiere->pivot->examen }} </span>
        

              @endforeach
              
            @endforeach
            <h1>La moyenne générale est de : {{$som /  $etudiants->count()}}</h1>
                </div>
        </div>

        </center>
    </body>