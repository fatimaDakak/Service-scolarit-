<html>
<head>
    <title>espace demande</title>
    <!-- @include('admin.css') -->
    <link rel="stylesheet" href="etudiant/assets/css/espace.css" type="text/css" />
    <link rel="stylesheet" href="etudiant/assets/css/style1.css">
</head>

<body>
    <table id="table">
        <tr>
            <td colspan="2">
                <div class="header">Espace demandes</div>
            </td>
            <td colspan="2" style="text-align:right;">
            </td>
        </tr>
        <tr>
            <td colspan="4">
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="etudiant/assets/img/medal.png" style="width: 50%;" />
                    <p>Attestation de scolarité</p>
                    <button class="btn btn4" id="button1">Effectuer</button>
                    <br/><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="etudiant/assets/img/graduation-hat.png" style="width: 50%;" />
                <p>Attestation de réussite</p>
                <button class="btn btn4" id="button2">Effectuer</button>
                <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="etudiant/assets/img/internship.png" style="width: 50%;" />
                <p>Convention de stage</p>
                <button class="btn btn4" id="button4">Effectuer</button>
                <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="etudiant/assets/img/exam.png" style="width: 50%;" />
                <p>Relevé des notes</p>
                <button class="btn btn4" id="button3">Effectuer</button>
                <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>    
    </table>
    <div class="popup">
        <div>
            <div class="wrapper">
                        <h2>Attestation de scolarité</h2>
                        @if (session('msg1'))
                        <h1>VUELLEZ CONSULTER VOS DONNEES</h1> 
                        @endif
                        @if (session('msg2'))
                        <h1>Demande envoyée</h1> 
                        @endif
                        <img src="{{url('adminDash/images/close.png')}}" class="close" alt="">
                        <form action="/a_scolarite" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="userDet">
                                <div class="input-box">
                                    <input type="text" placeholder="Nom" name="Nom" required>
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Prénom" name="Prenom" required>
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Code Apogée" name="Appogé" required>
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="CNE" name="CNE" required>
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Email" name="Email" required>
                                </div>
                            </div>  
                            <div class="input-box button">
                                <input type="Submit" name="submit" value="Enregistrer">
                            </div>
                            <div class="text">
                                <h3>Revenir a l'espace de demande <a href="{{url('espace_demande')}}">Espace demande</a></h3>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup1">
        <div>
            <div class="wrapper">
                        <h2>Attestation de Reussite</h2>
                        @if (session('msg1'))
                        <h1>VUELLEZ CONSULTER VOS DONNEES</h1> 
                        @endif
                        @if (session('msg2'))
                        <h1>Demande envoyée</h1> 
                        @endif
                        <img src="{{url('adminDash/images/close.png')}}" class="close1" alt="">
                <form action="/a_reussite" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="userDet">
                        <div class="input-box">
                            <input type="text" placeholder="Nom" name="Nom" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Prénom" name="Prenom" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Code Apogée" name="Appogé" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="CNE" name="CNE" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Email" name="Email" required>
                        </div>    
                    </div>                       
                    <div class="input-box button">
                        <input type="Submit" name="submit" value="Enregistrer">
                    </div>
                    <div class="text">
                        <h3>Revenir a l'espace de demande <a href="{{url('espace_demande')}}">Espace demande</a></h3>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup2">
        <div>
            <div class="wrapper">
                <h2>Relevé des notes</h2>
                @if (session('msg1'))
                <h1>VUELLEZ CONSULTER VOS DONNEES</h1> 
                @endif
                @if (session('msg2'))
                <h1>Demande envoyée</h1> 
                @endif
                <img src="{{url('adminDash/images/close.png')}}" class="close2" alt="">
                <form action="/r_note" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="userDet">
                        <div class="input-box">
                            <input type="text" placeholder="Nom" name="Nom" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Prénom" name="Prenom" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Code Apogée" name="Appogé" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="CNE" name="CNE" required>
                        </div>
                        <div class="input-box">
                            <input type="mail" placeholder="Email" name="Email" required>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Pour quel Semestre " name="Semestre" required>
                        </div>
                    </div>   
                    <div class="input-box button">
                        <input type="Submit" name="submit" value="Enregistrer">
                    </div>
                    <div class="text">
                        <h3>Revenir a l'espace de demande<a href="{{url('espace_demande')}}">Espace demande</a></h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="popup3">
        <div>
        <div class="wrapper">
            <h2>Convention de stage </h2>
            @if (session('msg1'))
            <h1>VUELLEZ CONSULTER VOS DONNEES</h1> 
            @endif
            @if (session('msg2'))
            <h1>Demande envoyée</h1> 
            @endif
            <img src="{{url('adminDash/images/close.png')}}" class="close3" alt="">
            <form action="/c_stage" method="post" enctype="multipart/form-data">
            @csrf
                <div class="userDet">
                    <div class="input-box">
                        <input type="text" placeholder="Nom" name="Nom" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Prénom" name="Prenom" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Code Apogée" name="Appogé" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="CNE" name="CNE" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Votre email" name="Email" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Nom d'entreprise" name="N_entreprise" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Representant d'entreprise" name="R_entreprise" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Adresse email d'entreprise" name="A_email" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Tele d'entreprise" name="tele" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Adresse reel d'entreprise" name="A_reel" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Periode de stage" name="P_stage" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Encadrant d'entreprise" name="E_entreprise" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Encadrant d'ecole" name="E_ecole" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Theme de stage" name="T_stage" required>
                    </div>                    
                    <div class="input-box">
                        <h4>Reçu d'assurance</h4>
                        <input type="file"  name="image" accept="image/jpg,image/jpeg,image/png,image/pdf">
                    </div> 
                </div>  
                <div class="input-box button">
                    <input type="Submit" name="submit" value="Enregistrer">
                </div>
                <div class="text">
                    <h3>Revenir a l'espace de demande <a href="{{url('espace_demande')}}">Espace demande</a></h3>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>

    <script>
        //start attestation de scolarite
        document.getElementById("button1").addEventListener("click",function(){
            document.querySelector(".popup").style.display = "flex";
        })
        document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display = "none";
        })

        //start attestation de reussite 
        document.getElementById("button2").addEventListener("click",function(){
            document.querySelector(".popup1").style.display = "flex";
        })
        document.querySelector(".close1").addEventListener("click",function(){
            document.querySelector(".popup1").style.display = "none";
        })

        //start releve de de note demande
        document.getElementById("button3").addEventListener("click",function(){
            document.querySelector(".popup2").style.display = "flex";
        })
        document.querySelector(".close2").addEventListener("click",function(){
            document.querySelector(".popup2").style.display = "none";
        })

        //Convention de stage demande 
        document.getElementById("button4").addEventListener("click",function(){
            document.querySelector(".popup3").style.display = "flex";
        })
        document.querySelector(".close3").addEventListener("click",function(){
            document.querySelector(".popup3").style.display = "none";
        })
    </script>  

</body>
</html>