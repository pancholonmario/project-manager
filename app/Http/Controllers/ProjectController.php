<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    // traer todos los registros
    
    public function getAllProjects() {
        $projects = Project::all();
        return $projects;
    }

    public function getTenProjects() {

        //me traigo todos los últimos 10 registros de la table Project de la Base de Datos

        $projects = Project::query()
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();

        

        return $projects;
    }

    //insertar resgitros a la base de manera estatica:

    public function insertProject() {
        $project = new Project;
        $project->id_city = 1;
        $project->id_company = 1;
        $project->id_user = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
    
        return "Guardado";
    }

    //actualizar registros de la base de datos:
    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

    /** Si queremos actualizar desde un formulario quedará así:
    public function updateProject(Request $request, $id) {

    $project = Project::findOrFail($id);
    $project->city_id = $request->cityId;
    $project->company_id = $request->companyId;
    $project->user_id = $request->userId;
    $project->name = $request->name;
    $project->execution_date = $request->executionDate;
    $project->is_active = $request->isActive;
    $project->save();

    return "Actualizado";
}
     * 
   
     */

    //Actualizar el nombre de todos los proyectos inactivos en la tabla de projects
    // 0 quiere decir proyecto inactivo

    public function renameInactiveProjects(){

        $project = Project::where('is_active', 0)
                          ->update(['name'=> 'Proyecto Inactivo']);

        return "Los proyectos cambiaron de nombre a Inactivos";
    }

    //eliminar registros:
    //eliminaremos todos los proyectos cuyo project_id sea mayor a 9

    public function deleteProject() {
        $project = Project::where('id', '>', 9)->delete();
        return "Registros eliminados";
    }

    //eliminar los primeros 10 registros

    public function deleteTenProject(){

        $project = Project::where('id', '<=', 10)->delete();

        return "Se elimnaron los 10 primeros registros";
    }

    //Scope: nos agregará por debajo la condición de que sólo traerá registros cuyo valor en el campo is_active sea igual a 1

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}

