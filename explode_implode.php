<?php    

function arrayToString($array){
    $last = array_slice($array, -1);
    $first = join(', ', array_slice($array, 0, -1));
    $both = array_filter(array_merge(array($first), $last), 'strlen');
    return join(' and ', $both);

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);
$famousFakePhysicists = arrayToString($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are " . $famousFakePhysicists . "." . PHP_EOL;

?>
