<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Destination;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', Destination::class);
        $listdestinations = DB::table('destinations')->get();;
        
        return view('destinations.index', ['listDestinations' => $listdestinations]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Destination::class);
        return view('destinations.create');// la vue est dans resource/views c'est le chemin
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\DestinationStore $request)
    {
        
        //insert url image in DB
        
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        
        $image1 = $request->file('image1');
        $extension1 = $image1->getClientOriginalExtension();
        Storage::disk('public')->put($image1->getFilename().'.'.$extension1,  File::get($image1));
        
        $image2 = $request->file('image2');
        $extension2 = $image2->getClientOriginalExtension();
        Storage::disk('public')->put($image2->getFilename().'.'.$extension2,  File::get($image2));
    
        $destination = new Destination($request->all()); //optimiser pour recuperer ts les input ds formulaire
        $destination->mime = $image->getClientMimeType();
        $destination->original_filename = $image->getClientOriginalName();
        $destination->filename = $image->getFilename().'.'.$extension;
        
        $destination->mime_un = $image1->getClientMimeType();
        $destination->original_filename_un = $image1->getClientOriginalName();
        $destination->filename_un = $image1->getFilename().'.'.$extension1;
        
        $destination->mime_deux = $image2->getClientMimeType();
        $destination->original_filename_deux = $image2->getClientOriginalName();
        $destination->filename_deux = $image2->getFilename().'.'.$extension2;
    
        $destination->user_id = $request->user()->id;//associer 1 article a 1 auteur
        //dd($destination);
        $destination->save();//je dis a laravel de sauvegarder 
        //$destination = $request->destinations()->create($request->all());
        return redirect('/destinations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Destination $destination)
    {
         return view('destinations.show', [
            'destination'=> $destination]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)//affichage formulaire
    {
        $this->authorize('create', Destination::class, User::class);
        return view('destinations.edit', [
            'destination' => $destination ,//Article::find($id)//envoi le id du user et recuperer ts les élements et le mets dans la variable
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\DestinationStore $request, Destination $destination) //
    {
        $this->authorize('create', Destination::class);
        if($request->file('image') !== null){
            //stockage image in fichier public
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
            
             /*ajout lien img dans bdd*/        
            $destination->mime = $image->getClientMimeType();
            $destination->original_filename = $image->getClientOriginalName();
            $destination->filename = $image->getFilename().'.'.$extension;
            /* end ajout lien img dans bdd*/
        }
        if($request->file('image1') !== null){
            $image1 = $request->file('image1');
            $extension1 = $image1->getClientOriginalExtension();
            Storage::disk('public')->put($image1->getFilename().'.'.$extension1,  File::get($image1));
            $destination->mime_un = $image1->getClientMimeType();
            $destination->original_filename_un = $image1->getClientOriginalName();
            $destination->filename_un = $image1->getFilename().'.'.$extension1;
        
        }
        if($request->file('image2') !== null){
            $image2 = $request->file('image2');
            $extension2 = $image2->getClientOriginalExtension();
            Storage::disk('public')->put($image2->getFilename().'.'.$extension2,  File::get($image2));
            $destination->mime_deux = $image2->getClientMimeType();
            $destination->original_filename_deux = $image2->getClientOriginalName();
            $destination->filename_deux = $image2->getFilename().'.'.$extension2;
        }            
        
        $destination->user_id = $request->user()->id;
        $destination->update($request->all());//je dis a laravel de modifier */
        //$destination = $request->destinations()->create($request->all());
        
        //$destination->update($request->all());//modifie ts les valeur à remplacer
        //session()->flash('status', 'Article modifié avec succès');
        return redirect('/destinations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete($destination);
        return redirect('/destinations');
    }
}
