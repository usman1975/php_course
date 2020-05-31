<?php

const TEST_CONSTANTA = 'asd';

function showSomething()
{
    return TEST_CONSTANTA;
}

//Задание #2

define("ALL_FIGURES", 80);
define("FELT_PEN", 23);
define("PENSIL", 40);
define("PEINT", ALL_FIGURES - (FELT_PEN + PENSIL));
