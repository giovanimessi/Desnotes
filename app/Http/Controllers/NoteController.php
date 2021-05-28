<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
       private $array = [
           'error' => '', 'result' =>[]

       ];

    public function all(Request $request){

        $note = Note::all();

        foreach($note as $item){

            $this->array['result'][] = [

                'id' => $item->id,
                'title' =>$item->title

            ];

        }
         return $this->array;
    }


    public function dados1($id){
        $note = Note::find($id);
        // $nout = Note::where('id' , $id)->first();

        if($note){
            $this->array['result'][] = $note;
              
        
        }else{
            $this->array['error'] = "Id não encontrada  ";
        }
        
        return $this->array;

    }
    public function adicionar(Request $request){

        $title = $request->input('title');
        $body = $request->input('body');


        if($title && $body){

            $note = new Note();
            $note ->title = $title; 
            $note ->body = $body;
            $note->save();

           
            $this->array['result'] = [

                'id' => $note->id,
                'title' => $title,
                'body' => $body

            ];


        }else{
            $this->array['error'] = 'Campos vazios';

        }

        
        return $this->array;
    }
    public function edit(Request $request,$id){
       $title = $request->input('title');
       $body = $request->input('body');

       if($id && $title && $body){

        $note = Note::find($id);

        
        if($note){
            $note ->title = $title; 
            $note ->body = $body;
            $note->save();

             
            $this->array['result'] = [

                'id' =>$id,
                'title' => $title,
                'body' => $body

            ];


        }else{
            $this->array['error'] = 'ID inexistente ';
        }

       }else{
        $this->array['error'] = 'Campos nao enviados';
       }
       
        return $this->array;
    }
 public function delete($id){

    $note = Note::find($id);

    if($note){


       $note->delete();

    }else{
        $this->array['error'] = 'Nao existe';
    }
    return $this->array;

 }
}

