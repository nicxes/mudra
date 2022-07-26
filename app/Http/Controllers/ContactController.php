<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}
