<?php
//!Pour voir si le code fonctionne, faire | php "nom du documents" |

//S'avoir le nombre de caraptére ----------
//le var_dump permet de donner des détails comme le nombre de lettre ou si c un int
$variable = readline('écriver n\'importe quoi :');
var_dump($variable);

//Censurer Comme sur Youtube ----------
$insultes = ['merde', 'connard', 'con'];
$phrase = readline('Entrez une phrase :');
foreach($insultes as $insulte){
    $pattern = '/\b' . preg_quote($insulte, '/') . '\b/i';
    $replace = str_repeat("*", strlen($insulte));
    $phrase = preg_replace($pattern, $replace, $phrase);
}
echo $phrase;



?>