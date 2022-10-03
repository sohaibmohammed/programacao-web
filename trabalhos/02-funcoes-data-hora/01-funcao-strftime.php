<?php

/*
    Função strftime():
    Formata uma hora/data de acordo com as configurações locais
    
    ATENÇÃO: esta função é obsoleta, e usá-la emite um aviso de obsolescência. Essa função será removidas no PHP 9.0.
    
    https://php.watch/versions/8.1/strftime-gmstrftime-deprecated
*/


echo '<h1>Função strftime()</h1>';

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
echo ucfirst(utf8_encode(strftime("%d de %B de %Y", strtotime("2022-09-26"))));
// Setembro de 2016



/*
    Objeto IntlDateFormatter
    É instanciado uma vez com base nas informações de localidade do usuário

    -> Adicione ao arquivo php.ini a linha:
       extension=php_intl.dll
*/

echo '<h2>Objeto IntlDateFormatter</h2>';

$lang = "pt_BR"; // en_US

// SHORT, MEDIUM, LONG, FULL
// RELATIVE_SHORT, RELATIVE_MEDIUM, RELATIVE_LONG, RELATIVE_FULL

$today = new IntlDateFormatter($lang, IntlDateFormatter::FULL, IntlDateFormatter::NONE);

echo $today->format(time());
