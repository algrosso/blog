<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function eliminar_book($id){
	echo "Voy a eliminar el libro ".$id;
    }

    public function editar_book($id){
	echo "Voy a editar el libro ".$id;
    }

}
