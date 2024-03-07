<?php 
    class Movie{
        public $regista;
        public $titolo;
        public $anno;
        public $lingua;
        public $valutazione;

        function __construct($_regista, $_titolo, $_anno, $_lingua, $_valutazione)
        {
            $this->regista = $_regista;
            $this->titolo = $_titolo;
            $this->anno = $_anno;
            $this->lingua = $_lingua;
            $this->valutazione = $_valutazione;
        }
    
        public function setLingua($language){
            return $this->lingua = $language; 
        }

        public function getLingua(){
            return $this->lingua;
        }
    }

    $JurassicPark = new Movie('Steven Spielberg', 'Jurassic Park', 1993, 'Inglese', 5);
    $JurassicPark2 = new Movie('Steven Spielberg', 'Jurassic Park - Il mondo perduto', 1997, 'Inglese', 5);

    //var_dump($JurassicPark, $JurassicPark2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    <?php echo '<h1>Jurassic Park</h1>' . '<strong>Regista :</strong>' . ' ' . $JurassicPark->regista . ' ' . '<strong>Anno : </strong>' . ' ' . $JurassicPark->anno . ' ' . '<strong>Lingua : </strong>' . ' ' . $JurassicPark->lingua . ' ' . '<strong>Valutazione : </strong>' . ' ' . $JurassicPark->valutazione ?>
    <?php echo '<h1>Jurassic Park - Il mondo perduto</h1>' . '<strong>Regista :</strong>' . ' ' . $JurassicPark2->regista . ' ' . '<strong>Anno : </strong>' . ' ' . $JurassicPark2->anno . ' ' . '<strong>Lingua : </strong>' . ' ' . $JurassicPark2->lingua . ' ' . '<strong>Valutazione : </strong>' . ' ' . $JurassicPark2->valutazione ?>
</body>
</html>