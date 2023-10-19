<!-- create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies. -->



<?php

class Movie
{
    public $name;
    public $description;
    public $genre;

    public function __construct($name, $description, $genre)
    {
        $this->name = $name;
        $this->description = $description;
        $this->genre = $genre;
    }

    public function movieName()
    {
        return $this->name;
    }
    public function movieDesc()
    {
        return $this->description;
    }
    public function movieGenre()
    {
        return $this->genre;
    }
};



$inception = new Movie('Inception', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, delectus.', 'Thriller');
$shrek = new Movie('Shrek', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, tempora!', 'Psychological Horror');

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: #333;">

    <div>
        <div class="container py-4">
            <div class="row">
                <div class="col-6 d-flex justify-content-center ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center "><?php echo $inception->movieName() ?></h5>
                            <strong>Description</strong>
                            <p class="card-text"><?php echo $inception->movieDesc() ?></p>
                            <strong>Genre</strong>
                            <p><?php echo $inception->movieGenre() ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center "><?php echo $shrek->movieName() ?></h5>
                            <strong>Description</strong>
                            <p class="card-text"><?php echo $shrek->movieDesc() ?></p>
                            <strong>Genre</strong>
                            <p><?php echo $shrek->movieGenre() ?></p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>