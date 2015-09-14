<?php
const RATES_OF_I_TAX=10;
const RATES_OF_H_INS= 1.5;const RATES_OF_S_INS= 7;
function calc ($salary){
  $deductiona= $salary*(RATES_OF_I_TAX/ 100);
  $deductionb= $salary*(RATES_OF_H_INS/100);
        
  $deductionc = $salary  * (RATES_OF_S_INS/ 100);
  $tmp=$salary -$deductiona-$deductionb-$deductionc;
  return $tmp;
  }
