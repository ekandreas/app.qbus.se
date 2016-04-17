<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\User;

class ManageProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatable = [
            'fields' => [
                [
                    'label' => 'ID',
                    'name' => 'id',
                ],
                [
                    'label' => 'Namn',
                    'name' => 'name',
                ],
                [
                    'label' => 'E-postadress',
                    'name' => 'email',
                ],
                [
                    'label' => 'Skapad',
                    'name' => 'created_at',
                ],
                [
                    'label' => 'Uppdaterad',
                    'name' => 'updated_at',
                ],
            ]           
        ];

        return view('pages.manage-process.index', compact('datatable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function dataTables() {
        return Datatables::of(User::query())->make(true);
    }

    /**
     * Process editorDataTables ajax request.
     */
    public function editorData() {
        //return Datatables::of(User::query())->make(true);
    }

}
