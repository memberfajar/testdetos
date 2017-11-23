<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    protected $request;
    protected $hasilKali = 0;


    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function viewPersistance(){
    	return view('soal2');
    }

    public function cekDigit($input){

    	$digit = strlen($input);
    	$hasilKali = $input;

    	if ($digit != 1) {
    		$split = str_split($input);
    		$hasilKali = array_product($split);
    		$digitHasilKali = strlen($hasilKali);

    		if ($digitHasilKali == 1) {
    			return $hasil = $hasilKali;
    		} else {
    			return $this->cekDigit($hasilKali);
    		}

    	}else{
    		return $hasil = $input;
    	}
    	
    }

    public function persistance(){
    	$input = $this->request->persistance;
    	return $this->cekDigit($input);
    }


    public function viewChocolate(){
    	return view('soal3');
    }

    public function breakChocolate(){
    	$n = $this->request->n;
    	$m = $this->request->m;

    	$break = ($n * $m)-1;
    	return $break;
    }
}
