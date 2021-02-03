<?php
use Carbon\Carbon;


function calculateDate($items){
    foreach($items as $item){

        $actual = Carbon::now();
        $item->edad = Carbon::parse($item->fecha_nacimiento)->age.' años.';

    }
}