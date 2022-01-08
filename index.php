<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-HP intro</title>
    <link rel="stylesheet" href="./src/styles/index.css">
</head>
<body>
    <header>
        <img id="logotype" src="src/assets/img/hp-logo.png">
    </header>
    <section id="Hogwarts_houses_list">
        <ul>
            <?php 
                $imghh = array('Gryffindor'=>'house-01', 'Hufflepuff'=>'house-02', 'Ravenclaw'=>'house-03', 'Slytherin'=>'house-04');

                    foreach ($imghh as $key => $hhimg) {
                        echo "<li class='h_houses'><img class='hhimage' src='src/assets/img/hogwarts-houses/$hhimg.png'>$key<br>";
                    }
            ?>
        </ul>
    </section>
    <section id="new_user_form">
        <form action = "index.php" method = "POST">
            <p>What's your name?</p>
            <input class="inp_info" name="name" type="text" placeholder="Your Name" require>
            <p>What's your Hogwarts House?</p>
            <input class="inp_info_2" name="house" type="radio" value="Gryffindor" require>
            <label  for="choose_house">Gryffindor</label>
            <input class="inp_info_2" name="house" type="radio" value="Hufflepuff" require>
            <label  for="choose_house">Hufflepuff</label>
            <input class="inp_info_2" name="house" type="radio" value="Ravenclaw" require>
            <label  for="choose_house">Ravenclaw</label>
            <input class="inp_info_2" name="house" type="radio" value="Slytherin" require>
            <label  for="choose_house">Slytherin</label>
            <p>Do you have any pets?</p>
            <select  class="inp_info_3" name="pet" id="select_pets" require>
                <option value="Owl">Owl</option>
                <option value="Rat">Rat</option>
                <option value="Cat">Cat</option>
                <option value="Spider">Spider</option>
            </select>
            <input name="submit_form" class="inp_btn" type="submit" value="Submit">
        </form>
    </section>
    <section id="users_information">
        
            <?php 
                if (!isset($_POST["submit_form"])) {
                    $newUser = array("Name" => '', "House" => '', "Pet" => '');
                }
                if (isset($_POST["submit_form"])) {
                    $newUser = array("Name" => $_POST['name'], "House" => $_POST['house'], "Pet" => $_POST['pet']);
                }
            ?>

         <p class="title_table">Your information</p>
        <table id="user_data">
            <tr>
                <?php 
                     foreach ($newUser as $keyElement => $valueElement) {            
                        echo "<th>".$keyElement."</th>";
                     }
                ?>         
            </tr>  
            <tr>
                <?php 
                    foreach ($newUser as $keyElement => $valueElement) {
                        echo "<th>".$valueElement."</th>";
                    }
                ?>
            </tr>
        </table>
    </section>
    <section id="HP_movie_list">

        <?php 
            class hpMovie {
                public $movieImage;
                public $movieTitle;
                public $movieYear;
                public $movieDirector;

                public function __construct($movieImage, $movieTitle, $movieYear, $movieDirector)
                {
                    $this->movieImage = $movieImage;
                    $this->movieTitle = $movieTitle;
                    $this->movieYear = $movieYear;
                    $this->movieDirector = $movieDirector;
                }
                public function movieImage()
                {
                  return $this->movieImage;
                }
                public function movieTitle()
                {
                  return $this->movieTitle;
                }
                public function movieYear()
                {
                  return $this->movieYear;
                }
                public function movieDirector()
                {
                  return $this->movieDirector;
                }
            }

            $objMovie01 = new hpMovie ("./src/assets/img/movies/hp-01.jpg", "Harry Potter and the Philosopher's Stone", '2001', "Chris Columbus");
            $objMovie02 = new hpMovie ("./src/assets/img/movies/hp-02.jpg", "Harry Potter and the Chamber of Secrets", '2002', "Chris Columbus");
            $objMovie03 = new hpMovie ("./src/assets/img/movies/hp-03.jpg", "Harry Potter and the Prisoner of Azkaban", '2004', "Alfonso Cuarón");
            $objMovie04 = new hpMovie ("./src/assets/img/movies/hp-04.jpg", "Harry Potter and the Goblet of Fire", '2005', "Mike Newell");
            $objMovie05 = new hpMovie ("./src/assets/img/movies/hp-05.jpg", "Harry Potter and the Order of the Phoenix", '2007', "David Yates");
            $objMovie06 = new hpMovie ("./src/assets/img/movies/hp-06.jpg", "Harry Potter and the Half-Blood Prince", '2009', "David Yates");
            $objMovie07 = new hpMovie ("./src/assets/img/movies/hp-07.jpg", "Harry Potter and the Deathly Hallows Part 1", '2010', "David Yates");
            $objMovie08 = new hpMovie ("./src/assets/img/movies/hp-08.jpg", "Harry Potter and the Deathly Hallows Part 2", '2011', "David Yates");

            $moviesArray= [];
            array_push($moviesArray, ($objMovie01),($objMovie02),($objMovie03),($objMovie04),($objMovie05),($objMovie06),($objMovie07),($objMovie08));
         
            foreach($moviesArray as $elements){
            ?>
                <div id="card_movies" class="card_container">
                    <img class="card_image" src=<?php echo $elements->movieImage();?> alt=<?php echo $elements->movieTitle();?>>
                    <h1 class="card_title"><?php echo $elements->movieTitle(); ?></h1>
                    <div class="card_year">
                        <p class="card_director"><?php echo $elements->movieDirector(); ?></p>
                        <p class="card_year"><?php echo $elements->movieYear(); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
    </section>
    <footer>
        <p>Copyrigth &copy;</p>
    </footer>
</body>
</html>
