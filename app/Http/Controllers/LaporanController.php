<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kegiatan;
use App\Http\Requests;

class LaporanController extends Controller
{
    public function excel()
    {
        $biodata = User::get();

        \Excel::create('Biodata',function($excel) use ($biodata)
        {
            $excel->sheet('Biodata',function($sheet) use ($biodata)
            {
                $row=1;
                $sheet->row($row,array(
                    'No','Nama','No HP','Tanggal Lahir','E-Mail','Tanggal Masuk'));
                $no=1;
                foreach ($biodata as $t) {
                    $sheet->row(++$row,array(
                        $no,
                        $t->name,
                        $t->no_hp,
                        $t->tgl_lahir,
                        $t->email,
                        $t->created_at));
                    $no++;
                }

            });
        })->export('xls');

        return view('biodata/index');
    }

   
}
