<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')-> insert(array('rol'=>'Administrador'));
         DB::table('roles')-> insert(array('rol'=>'Editor'));
          DB::table('roles')-> insert(array('rol'=>'Cliente'));
    }
}
