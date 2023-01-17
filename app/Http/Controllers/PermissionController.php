<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class PermissionController extends Controller
{
    public function __construct() {
        Session::put('perPage', 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = Session::get('perPage') ? Session::get('perPage') : 10;
        $permissions = Permission::orderBy('id', 'ASC')->paginate($perPage);
        return view('gestione.permessi.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('gestione.permessi.newpermission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Permission::validateOnCreation($request->all())->validate();
        $permesso = Permission::create([
            'name' => $request->input('name'),
            'guard_name'=> "web",
            'description'=> $request->input('description'),
        ]);
        Artisan::call('cache:clear');
        return view('gestione.permessi.editpermission', ['permesso'=>$permesso]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permesso = Permission::find($id);
        return view('gestione.permessi.editpermission', ['permesso'=>$permesso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Permission::validateOnUpdate($request->all())->validate();
        $permesso = Permission::find($id);
        $permesso->name = $request->input('name');
        $permesso->guard_name = "web";
        $permesso->description = $request->input('description');

        $res = $permesso->save();
        Artisan::call('cache:clear');
        if ($res) session()->flash('messaggio','Salvato!');
        return view('gestione.permessi.editpermission', ['permesso'=>$permesso]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permesso = Permission::find($id);
        $res = $permesso->forceDelete();
        return $res;
    }

    public function users2Permission($id)
    {
        $actualPermission = Permission::find($id);
        $all_users = User::get();
        //cerco gli utenti aventi il ruolo selezionato ($actualRole)
        $all_users_with_actualPermission = User::permission($actualPermission->name)->get();
        $paginate_users_with_actualPermission = $all_users_with_actualPermission->paginate(Session::get('perPage'),null,null,'uYes'); //pagino la collection (vd. AppServiceProvider)
        //adesso colleziono gli utenti che non hanno $actualRole (non mi rileva gli utenti senza alcun ruolo):
        $all_users_without_actualPermission = $all_users->diff($all_users_with_actualPermission)->sort()->paginate(Session::get('perPage'),null,null,'uNo');
        return view('gestione.permessi.user2permission', ['permesso'=>$actualPermission, 'usersWithoutActualPermission' => $all_users_without_actualPermission, 'usersWithActualPermission' => $paginate_users_with_actualPermission]);
    }

    public function setUser2Permission($rid, $uid) // assegna l'utente al permesso
    {
        $user = User::find($uid);
        $permission2assign = Permission::find($rid)->name;
        $res = $user->givePermissionTo($permission2assign);
        return $res;
    }

    public function delUserFromPermission($rid, $uid)  // rimuove l'utente dal permesso
    {
        $user = User::find($uid);
        $permission2revoke = Permission::find($rid)->name;
        $res = $user->revokePermissionTo($permission2revoke);
        return $res;
    }

}
