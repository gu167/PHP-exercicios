<?php
// Desenvolva um algoritmo que recebe um data no formato dd/mm/yyyy e retorne se é uma data valida. Ex: 30/09/2022 = válida
// atentar ao ano bissexto


function isDateValid(int $day, string $month, int $year)
{
    if(strlen($month) !== 2) {
        return "Data inválida, mes deve conter 2 carecteres";
    }

    if(!($day >= 1 && $day <= 31)) {
        return "Data inválida, dia deve estar entre 1 e 31";
    }

    if($year <= 1) {
        return "Data inválida, ano tem q ser maior que 1";
    }

    $months = [
        ['total_days' => 31, 'name' => 'Janeiro', 'num' => '01'],
        ['total_days' => 28, 'name' => 'Fevereiro', 'num' => '02'],
        ['total_days' => 31, 'name' => 'Mario', 'num' => '03'],
        ['total_days' => 30, 'name' => 'April', 'num' => '04'],
        ['total_days' => 31, 'name' => 'Maio', 'num' => '05'],
        ['total_days' => 30, 'name' => 'Junho', 'num' => '06'],
        ['total_days' => 31, 'name' => 'Julho', 'num' => '07'],
        ['total_days' => 30, 'name' => 'Agosto', 'num' => '08'],
        ['total_days' => 31, 'name' => 'Setembro', 'num' => '09'],
        ['total_days' => 30, 'name' => 'Outubro', 'num' => '10'],
        ['total_days' => 30, 'name' => 'Novembro', 'num' => '11'],
        ['total_days' => 31, 'name' => 'Dezembro', 'num' => '12'],
    ];

    $isBissexto = $year % 4 === 0;

    $currentMonth = [];

    foreach ($months as $currMonth) {
        if($currMonth['num'] === $month) {
            $currentMonth = $currMonth;
        }
    }

    if($isBissexto && $currentMonth['name'] === 'Fevereiro') {
        $currentMonth['total_days'] = 29;
    }

    if ($day > $currentMonth['total_days']) {
        return "Data inválida";
    }

    return "Data Válida: $day/$month/$year";
}

echo isDateValid(29, '02', 2020);


