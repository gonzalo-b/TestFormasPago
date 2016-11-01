<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class FormaDePago extends Model
{
     use Sortable;

     protected $table = 'formas_de_pago';

     protected $guarded = ['id'];

     public $sortable = ['detalle',
         'tipofpago',
         'diferido',
         'impcheque',
         'cbu'];
}
