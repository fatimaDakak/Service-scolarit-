<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function redirect(){
        return view('admin.home');
    }
    
    public function view_demandes(){
        return view('admin.view_demandes'); 
    }
    public function releve_note(){
        return view('admin.releve_note');
    }
    public function attestation_scolarite(){
        return view('admin.attestation_scolarite');
    }
    public function convention_stage(){
        return view('admin.convention_stage');
    }
    public function attestation_reussite(){
        return view('admin.attestation_reussite');
    }
    public function historique(){
        return view('admin.historique');
    }
    //etudiant :
    public function espace_demande() {
        return view('etudiant.espace_demande');
    }
    public function r_note() {
        return view('etudiant.r_note');
    }
    public function a_scolarite() {
        return view('etudiant.a_scolarite');
    }
    public function a_reussite() {
        return view('etudiant.a_reussite');
    }
    public function c_stage() {
        return view('etudiant.c_stage');
    }
}
