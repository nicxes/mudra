<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function export()
    {


        $fileName = 'contactos.csv';
        $contacts = Contact::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('ID', 'NOMBRE', 'EMAIL', 'TEL', 'DNI', 'FECHA DE REGISTRO');
        $callback = function() use($contacts, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($contacts as $contact) {
                $row['ID']  = $contact->id;
                $row['NOMBRE']    = $contact->fullname;
                $row['EMAIL']    = $contact->email;
                $row['TEL']  = $contact->tel;
                $row['DNI']  = $contact->dni;
                $row['FECHA DE REGISTRO']  = $contact->created_at;

                fputcsv($file, array($row['ID'], $row['NOMBRE'], $row['EMAIL'], $row['TEL'], $row['DNI'], $row['FECHA DE REGISTRO']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
