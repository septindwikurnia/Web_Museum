<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pj_museum;
use Storage;

class penanggungjwbcontroller extends Controller
{ 
        public function pj() {
            $halaman = 'Human Resources ';
            $pj_museum_list = Pj_museum::all();
            return view('penanggungjawab.index', compact('halaman', 'pj_museum_list'));
        }
        public function create() {
            $halaman = 'Create Human Resources';
            return view('penanggungjawab.create', compact('halaman'));
        }
        public function store(Request $request) {
            if( $request->hasFile('image_pj')){
                $pj_museum = Pj_museum::create($request->all());
    
                $file = $request->file('image_pj');
                $tujuan_upload = 'images_pj';
                $nama_file = $request->id."_".$file->getClientOriginalName();
    
                $file->move($tujuan_upload,$nama_file);
    
                $pj_museum->image_pj = $nama_file;
                $pj_museum->save();
            } else {
                Pj_museum::create($request->all());
            }
            return redirect('penanggungjawab');
        }
        public function delete($id) {
            $pj_museum = Pj_museum::findOrFail($id);
            $pj_museum->delete();
            return redirect ('penanggungjawab');
        }
        public function editpj($id) {
            $halaman = 'Edit Human Resources';
            $pj_museum = Pj_museum::findOrFail($id);
            return view('penanggungjawab.editpj', compact('halaman','pj_museum'));
        }

        public function updatepj($id, Request $request) {
            $halaman = 'penanggungjawab';
            $pj_museum = Pj_museum::findOrFail($id);
            $pj_museum->id = $request->id;
            $pj_museum->nama_pj = $request->nama_pj;
            $pj_museum->gender = $request->gender;
            if($request->hasFile('image_pj')){
                $request->file('image_pj')->move('images_pj/',$request->file('image_pj')->getClientOriginalName());
            $pj_museum->image_pj = $request->file('image_pj')->getClientOriginalName();
            }
            $pj_museum->jabatan = $request->jabatan;

        
            $pj_museum->save();
            return redirect('penanggungjawab');
        }
    }
?>