<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UserController extends Controller
{
    /**
     * Tela inicial
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function homeShow()
    {
        $users = User::paginate(5);
        return view("show", ["users" => $users]);
    }

    public function homeCreate()
    {
        return view("create");
    }

    /**
     * Método para cadastrar usuários
     * @param Request $request
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function create(Request $request)
    {
        $name = $request["name"];
        $email = $request["email"];
        $birthDate = $request["birthDate"];
        $status = $request["status"] ? true : false;

        User::create([
            "name" => $name,
            "email" => $email,
            "birthdate" => $birthDate,
            "status" => $status
        ]);

        return redirect()->route("show.home");
    }

    /**
     * @param mixed $id
     * @return RedirectResponse
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function delete($id)
    {
        $user = User::where("id", $id)->first();
        if ($user) {
            $user->delete();
        }

        return redirect()->route("show.home");
    }

    /**
     * @param mixed $id
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function edit($id)
    {
        $user = User::where("id", $id)->first();
        return view("edit", [
            "user" => $user
        ]);
    }

    /**
     * @param Request $request
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function update(Request $request)
    {
        $id = $request['id'];
        $name = $request["name"];
        $email = $request["email"];
        $birthDate = $request["birthDate"];
        $status = $request["status"] ? true : false;

        dd($status);
        $input = [
            'name' => $name,
            'email' => $email,
            'birthdate' => $birthDate,
            'status' => $status
        ];

        $user = User::find($id);
        $user->fill($input);
        $user->save();

        $users = User::all();
        return view("show", ["users" => $users]);
    }

}
