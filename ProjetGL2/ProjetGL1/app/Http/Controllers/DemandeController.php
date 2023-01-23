<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf; //MODIF
use Auth;
use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Note; 


class DemandeController extends Controller
{
    public static function store1()
    {
        $Appogé = request("Appogé");
        $Nom = request("Nom");
        $Prenom = request("Prenom");
        $msg1 = 'Veuillez verifier vos données';
        $msg2 = 'Demande envoyée';
        if (etudiant::where('Appogé',$Appogé)->where('Prenom', $Prenom)->where('Nom', $Nom)->exists()){
                    $demande = new Demande();
                    $demande->Appogé = request("Appogé");
                    $demande->Prenom = request("Prenom");
                    $demande->Nom = request("Nom");
                    $demande->Email = request("Email");
                    $demande->CNE = request("CNE");
                    $demande->Type = "Attestation de scolarité";
                    $demande->save();
                    return redirect('/espace_demande')->with(['msg2'=>$msg2]);
                }
                else{
            return redirect("/espace_demande")->with(['msg1'=>$msg1]); ////////////////
                }
            }
        
    public static function store2()
    {
        $Appogé = request("Appogé");
        $Nom = request("Nom");
        $Prenom = request("Prenom");
        $msg1 = 'Veuillez verifier vos données';
        $msg2 = 'Demande envoyée';
        if (etudiant::where('Appogé',$Appogé)->where('Nom', $Nom)->where('Prenom', $Prenom)->exists()){
                    $demande = new Demande();
                    $demande->Appogé = request("Appogé");
                    $demande->Prenom = request("Prenom");
                    $demande->Nom = request("Nom");
                    $demande->Email = request("Email");
                    $demande->CNE = request("CNE");
                    $demande->Semestre = request("Semestre") ;
                    $demande->Type = "Relevé de notes";
                    $demande->save();
                    return redirect('/espace_demande')->with(['msg2'=>$msg2]);
                }
                else{
            return redirect("/espace_demande")->with(['msg1'=>$msg1]);///////////////////////
                }
    }
    public static function store3(Request $request) //convention de stage
    {
        $Appogé = request("Appogé");
        $Nom = request("Nom");
        $Prenom = request("Prenom");
        $msg1 = 'Veuillez verifier vos données';
        $msg2 = 'Demande envoyée';
        if (etudiant::where('Appogé',$Appogé)->where('Nom', $Nom)->where('Prenom', $Prenom)->exists()){
                    $demande = new Demande();
                    $demande->Appogé = request("Appogé");
                    $demande->Prenom = request("Prenom");
                    $demande->Nom = request("Nom");
                    $demande->Email = request("Email");
                    $demande->CNE = request("CNE");
                    $demande->nomEntreprise =request("N_entreprise");
                    $demande->representant =request("R_entreprise");
                    $demande->adressMail =request("A_email");
                    $demande->tele =request("tele");
                    $demande->adresseReel =request("A_reel");
                    $demande->periode =request("P_stage");
                    $demande->encadrantEntreprise =request("E_entreprise");
                    $demande->encadrantEcole =request("E_ecole");
                    $demande->themeDeStage =request("T_stage");
                    $demande->Type = "Convention de stage";

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('Image'), $filename);
                $demande->image = $filename;
            }
                    $demande->save();
                    return redirect('/espace_demande')->with(['msg2'=>$msg2]);
                }
                else{
                    return redirect("/espace_demande")->with(['msg1'=>$msg1]);
                }
    }
    public static function store4()
    { //TO BE VERIFIED
        $Appogé = request("Appogé");
        $Nom = request("Nom");
        $Prenom = request("Prenom");

        $msg1 = 'Veuillez verifier vos données';
        $msg2 = 'Demande envoyée';
        if (etudiant::where('Appogé',$Appogé)->where('Nom', $Nom)->where('Prenom', $Prenom)->exists()){
                    $demande = new Demande();
                    $demande->Appogé = request("Appogé");
                    $demande->Prenom = request("Prenom");
                    $demande->Nom = request("Nom");
                    $demande->Email = request("Email");
                    $demande->CNE = request("CNE");
                    $demande->Type = "Attestation de reussite";
                    $demande->save();
                    return redirect('/espace_demande')->with(['msg2'=>$msg2]);
                }
                else{
                    return redirect("/espace_demande")->with(['msg1'=>$msg1]);
                }
    }

    public function index1(){
            $demandes = Demande::all();
            return view('admin.releve_note')->with([
            'demandes' => $demandes
        ]);
    }
    public function index2(){
        $demandes = Demande::all();
        return view('admin.attestation_scolarite')->with([
        'demandes' => $demandes
    ]);
    }
    public function index3(){
        $demandes = Demande::all();
        return view('admin.attestation_reussite')->with([
        'demandes' => $demandes
    ]);
    }
    public function index4(){
        $demandes = Demande::all();
        return view('admin.convention_stage')->with([
        'demandes' => $demandes
    ]);
    }
    public function show($id)
    {
        $demande = Demande::where('id',$id)->first();
        $appog = $demande->Appogé;
        $etudiant = Etudiant::where('Appogé',$appog)->first();
        $notes = Note::where('Appogé',$appog)->first();
        return view('admin.show')->with([
            'demande' => $demande,
            'etudiant' => $etudiant,
            'notes' => $notes 
        ]);
    }

    public function refuse(Request $request, $id)
    {
        $demande = Demande::where('id',$id)->first();
        $appog = $demande->Appogé;
        $etudiant = Etudiant::where('Appogé',$appog)->first();
        $motif = request("motif") ; 
        $data['motif'] = $motif;
        $etat = "t";
        $validation = 'n' ; 
        Demande:: 
            where('id',$id)
            ->update(['Motif' => $motif, 
            'Etat'=>$etat , 
            'Validation'=>$validation
        ]);
        $data['email'] = $demande->Email;
        $data["title"] = "Demande Refusé: ";
        Mail::send('admin.testno', $data, function ($message) use ($data) {
            $message->to($data["email"])
                ->subject($data["title"].$data['motif']);
        });
        return view('admin.show')->with([
            'demande' => $demande,
            'etudiant' => $etudiant]);
    }
    public function valide(Request $Request,$id){
        $demande = Demande::where('id', $id)->first();
        $appog = $demande->Appogé;
        $etudiant = Etudiant::where('Appogé',$appog)->first();
        $note = Note::where('Appogé',$appog)->first();
        $etat = "t";
        $validation = 'y';
        //modif
        $filename = date('YmdHi') . 'demande.pdf';
        if ($demande->filename === null) { //////MODIF//////IF FILENAME IS NOT ALREADY SET
            Demande::
                where('id', $id)
                ->update([
                    'Etat' => $etat,
                    'Validation' => $validation,
                    'filename' => $filename
                ]);
        }
        else{                           /////////////MODIF//IF ITS SET
            Demande::
                where('id', $id)
                ->update([
                    'Etat' => $etat,
                    'Validation' => $validation
                ]);
        }
        //modification end
        if ($demande->Type === 'Attestation de reussite') {
            $pdf = PDF::loadView('Document.réussite_download', compact('demande', 'id'))->setOptions(['defaultFont' => 'sans-serif'])
                                ->save(public_path("documents/".$demande['filename'])); ///MODIF
            return view("Document.réussite")->with([
                'demande' => $demande,
                'etudiant' => $etudiant
            ]);
        }
        elseif($demande->Type === 'Convention de stage') {
            $pdf=PDF::loadView('Document.convention_download',compact('demande','id','etudiant'))->setOptions(['defaultFont' => 'sans-serif'])
                ->save(public_path("documents/".$demande['filename'])); ///////Modif
            return view("Document.convention_view")->with([
                'demande' => $demande,
                'etudiant'=>$etudiant ]);
        } else {
            $pdf = PDF::loadView('Document.releve_download', compact('demande', 'id', 'note'))->setOptions(['defaultFont' => 'sans-serif'])
            ->save(public_path("documents/".$demande['filename']));  ////MODIF
            return view("Document.releve_view")->with([
                'demande' => $demande,
                'etudiant' => $etudiant,
                'note' => $note
            ]);
        }
    }

    //historique :
    //voirl'historique de la demande
    public static function index5()
    {
        $data = Demande::all();
        return view('admin.historique', ['demandes' => $data]);
    }
    public static function showdetail()
    {
        $data = Demande::all();
        return view('admin.view_detail', ['demandes' => $data]);
    }

    //voir détails de  la demande 

    public function search(Request $request){
        $output="";
        $demandes=Demande::where('Nom','Like','%'.$request->
        search.'%')->orWhere('Type','Like','%'.$request->
        search.'%')->orWhere('Appogé','Like','%'.$request->
        search.'%')->orWhere('Prenom','Like','%'.$request->
        search.'%')->orWhere('CNE','Like','%'.$request->
        search.'%')->get();
        foreach($demandes as $demande)
        {
            $date1=date_create($demande['created_at']);
            $date2=date_create(date('y-m-d'));
            $diff=date_diff($date1,$date2);
            if($demande->Validation == 'y')
            $valide = "<span class='label bg-green c-white btn-shape'>Validé</span>";
            else 
            $valide ="<span class='label bg-red c-white btn-shape'>Refusée</span>";
            $output.=
            '<tr>
                <td>'.$demande->Type.'</td>
                <td>'.
                $diff->format("Il y a %a Jours").
                '</td>
                <td>'.$demande->Nom." ".$demande->Prenom.'</td>
                <td>'.
                    $valide.
                '</td> 
                <td>'.'<a href="view_detail/'.$demande->id .'" class="label bg-blue c-white btn-shape w-fit">'.'<i class="fas fa-eye"></i></a></td>
            </tr>';
        }
        return response($output);
    }
     //voir détails de  la demande
        public function viewDetails($id){
        $data = Demande::find($id);

        $appog = $data->Appogé;
        $etudiant = Etudiant::where('Appogé',$appog)->first();
        return view('admin.view_detail',compact('data','id','etudiant'));

    }
}
