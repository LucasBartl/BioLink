<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Link;

use App\Http\Requests\StorelinkRequest;
use App\Http\Requests\UpdatelinkRequest;

class LinkController extends Controller
{
    /**
     * Responsavel pela criação do link
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelinkRequest $request)
    {
        /**
         * Passando para a variavel $user os dados do usuário logado em auth. 
         *@var User $user   
         **/
        $user = auth()->user();

        $user->links()
            ->create($request->validated());


        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    /* Obs:
        Colocando nos paramentros (Link $link), já informamos que se trata de uma varivel do tipo do model
        O que nos evita ter que realizar isso :
        $link = Link::query()->findOrFail($link);
    */
    public function edit(Link $link)
    {
        /* @var User user */
        $user = auth()->user();


        return view('links.edit', ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelinkRequest $request, link $link)
    {
        /*Utilizando fill ele vai atualizar com tudo que existe dentro de $request->validated()*/
        $link->fill($request->validated())->save();

        return to_route('dashboard')
            ->with('message', 'alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(link $link)
    {
        $link->delete();
        return to_route('dashboard')->with('message', 'deletado com sucesso !');
    }

    public function up(Link $link)
    {
        $link->moveUp();
        return back();
    }
    public function down(Link $link)
    {
        $link->moveDown();

        return back();
    }
}
