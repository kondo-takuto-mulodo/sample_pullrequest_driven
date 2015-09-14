<?php
const RATE_INCOME_TAX=10;
const RATE_HEALTH_INSURANCE= 1.5;
const RATE_SOCIAL_INSURANCE= 7;

function CalcNetSalary ($grossSalary){

    $deductiona= $grossSalary * (RATE_INCOME_TAX / 100);
    $deductionb= $grossSalary * (RATE_HEALTH_INSURANCE / 100);
    $deductionc = $grossSalary  * (RATE_SOCIAL_INSURANCE / 100);

    $tmp=$salary -$deductiona-$deductionb-$deductionc;

    return $tmp;
}
