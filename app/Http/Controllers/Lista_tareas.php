<?php

namespace App\Http\Controllers;
use App\Models\tareas;
use App\Models\tareas_completadas;

use Illuminate\Http\Request;

class Lista_tareas extends Controller
{
    public function principal(){
        return view('home');
    }

    public function guardar_tarea(Request $request){

        $tarea=new tareas();
       
        $tarea->titulo=$request->titulo;
        $tarea->descripcion=$request->descripcion;
        $tarea->save();

       return redirect()->route('tareas.ver');
          
    }


    public function ver_tareas(){
        $tareas=tareas::all();

        return view('ver_tareas', compact('tareas'));

    }

    public function eliminar_tarea($id){
        $tarea=tareas::findOrFail($id);
        $tarea->delete(); 

        return redirect()->route('tareas.ver')->with('success', 'Tarea eliminada exitosamente.');
        /*
        if ($tarea) {
           // Eliminar la tarea
            return redirect()->route('tareas.ver')->with('success', 'Tarea eliminada exitosamente.');
        } else {
            return redirect()->route('tareas.ver')->with('error', 'No se encontró la tarea.');
        }*/

    }


    public function tareas_completadas(){
        $tareas=tareas_completadas::all();
        return view('tareas_completadas', compact('tareas'));
        
    }

    public function eliminar_tarea_completada($id){
        $tarea=tareas_completadas::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tareas_completadas');

    }
}
