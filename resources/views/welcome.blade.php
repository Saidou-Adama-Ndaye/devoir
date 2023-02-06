<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire Ajout Etudiant</h1>
            </div>
            <br>
            <form style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="{{route('store.classe')}}">
                <div style="background-color: white; width:50%">
                @csrf
                <label for="">Prenom</label><br>
                <input type="text" required name="prenom" placeholder="prenom"><br><br>
                <label for="">Nom</label><br>
                <input type="text" required name="nom" placeholder="Nom"><br><br>
                <label for="">Semestre</label><br>
                <select name="semestres">
                    @foreach ($semestres as $semestre )
                        <option value="{{$semestre->id}}">{{$semestre->nom}}</option>
                    @endforeach                    
                </select><br><br>
                <label for="">Matiere</label><br>
                <select name="matieres">
                    @foreach ($matieres as $matiere )
                        <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
                    @endforeach                    
                </select><br><br>
                <label for="">Note</label><br>
                <input type="text" required name="note" placeholder="note"><br><br>
                <label for="">Examen</label><br>
                <input type="text" required name="examen" placeholder="examen"><br><br>

                <input type="submit" name="" value="Ajouter"><br>
            </div>

            </form>
            <br><br><br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('ajout.classe')}}">
            Liste de la classe</a>
        </center>
        
       
    </body>
</html>