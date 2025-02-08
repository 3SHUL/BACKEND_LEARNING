<?php
/*
declare(strict_types=1);
    function sum(float $x,float $y){

     return $x + $y;
}
 $sum = sum(2,3);
echo $sum ;
echo "<br>";
var_dump($sum);

$x = (int)'5';
var_dump($x);

$heyMan = '1';
if ($heyMan) {
    echo 'success';
    echo '<br>';

}
else{
    echo 'false';
    echo '<br>';
}
var_dump(is_bool($heyMan));


$x = (int)'20_000';
var_dump(is_int($x));
echo "<br>";
echo $x;

$x= 0.23;
$y = 1-0.77;

var_dump($x, $y);
echo $x;
if ($x==$y){
    echo "yes";
}
else {
    echo "no";
}

echo log(-1);
$x= log(-1);
var_dump(is_nan($x));
var_dump($x);


$firstname = 'Nilangshu';
$lastname = 'Chatterjee';

$name = $firstname . ' ' . $lastname;
echo $name. "<br>";
$name[21]='e';
echo var_dump($name);

$x=1;
$y=2;

//HEREDOC

$text = <<<TEXT
MALABULUL $x
TOBTOBITOB $y
FOSSILS ER GAN SHON LYRICS BHUJHE
TEXT;
 echo nl2br($text);

 echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//NOWDOC

$text = <<<'TEXT'
HELL NAH BRUH $x
U SUCK BITCHASS $y
UR DEEPSHIT
TEXT;
echo "<br>";
echo nl2br($text) ;
echo "<br>";
echo "<br>";
echo "<br>";

$text = <<<TEXT
<div>
<p>                 KAMON ACHIS RE </p>
<P>                  POLA BHOLA BHETKI </P>

</div>
TEXT;
echo nl2br($text);

$x = 123;


echo $x ."<br>";
var_dump($x=== null);


$programming_languages = ['PHP','JAVASCRIPT','PYTHON'];

//$programming_languages[1] = 'html';

//echo $programming_languages[1]."<br>";

//var_dump(isset($programming_languages[3]));

echo '<pre>';
print_r($programming_languages);
echo '</pre>';

echo count($programming_languages);

//$programming_languages[] = 'C++';
array_push($programming_languages, 'JAVASCRIPT','PYTHON','HELL NAH BRUH','JACOB FATU');

echo '<pre>';
print_r($programming_languages);
echo '</pre>';

echo count($programming_languages);

$new_language= 'gone';
echo $programming_languages[$new_language]= '1.15';
//$programming_language = ['PHP','LION','PYTHON','KALI LINUX'];
*/
$programming_languages = [
    'PHP' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => true,
        'version' => [

            ['version' => 6.5, 'releaseDate' => 'February 2,2025'],
            ['version' => 6.2, 'releaseDate' => 'January 2,2025'],
            ]
        ],
    'PYTHON' => [
    'creator' => '',
    'extension' => '',
    'website' => '',
    'isOpenSource' => true,
    'version' => [

        ['version' => 6.5, 'releaseDate' => 'February 2,2025'],
        ['version' => 6.2, 'releaseDate' => 'January 2,2025'],
    ]
]

];

echo '<pre>';
print_r($programming_languages);
echo '<pre>';
















































