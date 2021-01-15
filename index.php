<?php

class Movies{
    public $title;
    public $nationality;
    public $year;
    public $movie_director;
    public $earnings;

    function __construct($director) {
    $this-> movie_director = $director;
  }

   public function earnings($money){
       if($money > 1000000000){
           return $this -> earnings = 'high';
       }
       else{
           return $this -> earnings = 'low';
       }
   }
}


echo Movies::class;

$tenet = new Movies('Christopher Nolan');
$tenet -> title = print_var_name($tenet);
$tenet -> nationality = 'US';
$tenet -> year = 2020;
$tenet -> earnings(362900000);

var_dump ($tenet);

$avatar = new Movies('James Cameron');
$avatar -> title = print_var_name($avatar);
$avatar -> nationality = 'US';
$avatar -> year = 2009;
$avatar -> earnings(2790000000);

var_dump ($avatar);

$nomevar = 'biscotto';

//prendo il nome della variabile
function print_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return ucfirst($var_name);
        }
    }

    return false;
}

 ?>
