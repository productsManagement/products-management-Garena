<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserListExport extends \Maatwebsite\Excel\Files\NewExcelFile {

    public function getFilename()
    {
        return 'hihi';
    }
}