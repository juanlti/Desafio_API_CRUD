<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatoRequest;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;


class UserController extends Controller
{


    public function index()
    {
        //mostrar los datos de la bd
        $users = User::orderBy('updated_at', 'desc')->get();


        return view('index',compact('users'));



    }


    public function generateData()
    {
        $request = Request::create('api/apiGenerarNombres', 'GET');
        $response = Route::dispatch($request);
        $dataFakeAll = json_decode($response->getContent(), true);
        $dataFakeAllCollection = collect($dataFakeAll);
        foreach ($dataFakeAllCollection as $registro) {

            User::create([
                'name' => $registro['name'],
                'lastname' => $registro['lastname'],
                'age' => $registro['age'],

            ]);
        }
        return redirect()->route('index');
    }



    public function show(User $user):View{

        return view('show',compact('user'));
    }


    public function destroy(User $user):RedirectResponse{

        $user->delete();

        return redirect()->route('index');
    }
    public function edit(User $user):View{

        //instancia a modificar
        //envio los datos a una vista de edicion.blade
        return  view('edit',compact('user'));


    }

    public function update(DatoRequest $userR,User $user):RedirectResponse{
        // utilizo la funcion de update de eloquent para asignar los nuevos atributos,
        // previamente verificando con las politicas de aceptacion
        //
        $user->update($userR->all());

        return redirect()->route('index');

    }


public function destroyAll(){
        User::truncate();
    return redirect()->route('index');
}


}






