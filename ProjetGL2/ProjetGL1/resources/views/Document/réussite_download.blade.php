<html>
    <head>
        <style>
            img {
                max-width : 200px ; 
            }
        img.displayed {
            display: block;
            margin-left: auto;
          margin-right: auto ;
            width :200px;
            height : 150px;}
        </style>
        @include('admin.css')
    </head>
    <body>
        <p><img src="{{url('/adminDash/images/ecole.png')}}" alt="" /></p>
        <p>&nbsp;</p>
        <p style="text-align: center;">UNIVERSITE ABDELMALEK ESSAADI</p>
        <p style="text-align: center;">Ecole Nationale des Sciences Appliquees Tetouan</p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;</p>
        <h2 style="text-align: center;">ATTESTATION DE REUSSITE AU DIPLOME</h2>
        <p>&nbsp;</p>
        <h4>Le Directeur de l'&eacute;cole nationale des sciences appliqu&eacute;es de T&eacute;touan atteste que:</h4>
        <p>&nbsp;</p>
        <h1 style="text-align: center;">le diplome ing&eacute;nieur d'&eacute;tat</h1>
        <h4 style="text-align: center;">a &eacute;t&eacute; decerne a:</h4>
        <h1 style="text-align: center;">{{$demande->Nom}}<br>{{$demande->Prenom}}<br /><br /></h1>
        <h4 style="text-align: center;">au titre de l'annee universitaire 2022/2023&nbsp;</h4>
        <h4 style="text-align: center;">Fait a&nbsp;<strong>T</strong>&eacute;touan, @php echo now()->format('Y-m-d') @endphp</h4>
        <h4 style="text-align: center;">Le Directeur</h4>
        <h4 style="text-align: center;">N&deg; etudiant: {{$demande->Appogé}}</h4>
        <h4 style="text-align: center;"><em>Avis&nbsp;</em>important: II ne peut etre delivre qu'un seul exemplaire de cette attestation. Aucun duplicata ne sera fourni.</h4>
        
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Le Chef du Service Scolar Ihssan El Koujjani</p>
        <p><img class="displayed" src="{{url('public/adminDash/images/signaturo.jpg')}}" alt="" /></p>
        <p>&nbsp;</p>
        
        <p style="text-align: center;">Ecole Nationale des Sciences Appliqu&eacute;es de T&eacute;touan. BP 2222M'hannech 11-T&eacute;touan</p>
        <p style="text-align: center;">Tel 0539 68 80 27; Fax. 0539 99 46 24 www.ensatz.une.ma</p>
        <p>&nbsp;</p>
    </body>
</html>
