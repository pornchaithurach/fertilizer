<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\DataTables\UsersDataTablesEditor;


class OraganisationsController extends Controller
{
    public function index(OraganisationsDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

    public function store(OraganisationsDataTablesEditor $editor)
    {
        return $editor->process(request());
    }

    public function province(OraganisationsDataTablesEditor $editor)
    {

        return $editor->process(request());
    }
}
