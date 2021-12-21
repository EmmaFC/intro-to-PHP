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
                $hogwartsHouses = array ("Gryffindor", "Hufflepuff", "Ravenclaw", "Slytherin");
                foreach($hogwartsHouses as $houses){
                    echo ("<li>".$houses);
                }
            ?>
        </ul>
    </section>
    <section id="new_user_form">
        <form action = "index.php" method = "POST">
            <p>What's your name?</p>
            <input name="choose_name" type="text" placeholder="Your Name">
            <p>What's your Hogwarts House?</p>
            <input name="choose_house" type="radio" value="Gryffindor">
            <label  for="choose_house">Gryffindor</label>
            <input name="choose_house" type="radio" value="Hufflepuff">
            <label  for="choose_house">Hufflepuff</label>
            <input name="choose_house" type="radio" value="Ravenclaw">
            <label  for="choose_house">Ravenclaw</label>
            <input name="choose_house" type="radio" value="Slytherin">
            <label  for="choose_house">Slytherin</label>
            <p>Do you have any pets?</p>
            <select name="choose_pets" id="select_pets">
                <option value="Owl">Owl</option>
                <option value="Rat">Rat</option>
                <option value="Cat">Cat</option>
                <option value="Spider">Spider</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </section>
    <section id="users_information">
        <?php
            $newUser = array ("Name" => $_POST['choose_name'], "House" => $_POST['choose_house'], "Pet" => $_POST['choose_pets']);
        ?>
        <table id="user_data">
            <tr>
                <?php 
                    foreach ($_POST as $keyElement => $valueElement) {
                        echo "<th>".$keyElement;
                    }  
                ?>         
            </tr>  
            <tr>----------------------------------------------------------------------------------------
                <?php 
                    foreach ($_POST as $keyElement => $valueElement) {
                        echo "<th>".$valueElement."</th>";    
                    }
                ?>
            </tr>
        </table>
    </section>
    <section id="HP_movie_list">
        <?php 
            class hpMovie {
                public $movieTitle;
                public $movieYear;
                public $movieDirector;

                public function __construct($movieTitle, $movieYear, $movieDirector)
                {
                  $this->movieTitle = $movieTitle;
                  $this->movieYear = $movieYear;
                  $this->movieDirector = $movieDirector;
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

            $objMovie01 = new hpMovie ("Harry Potter and the Philosopher's Stone", '2001', "Chris Columbus");
            $objMovie02 = new hpMovie ("Harry Potter and the Chamber of Secrets", '2002', "Chris Columbus");
            $objMovie03 = new hpMovie ("Harry Potter and the Prisoner of Azkaban", '2004', "Alfonso Cuarón");
            $objMovie04 = new hpMovie ("Harry Potter and the Goblet of Fire", '2005', "Mike Newell");
            $objMovie05 = new hpMovie ("Harry Potter and the Order of the Phoenix", '2007', "David Yates");
            $objMovie06 = new hpMovie ("Harry Potter and the Half-Blood Prince", '2009', "David Yates");
            $objMovie07 = new hpMovie ("Harry Potter and the Deathly Hallows Part 1", '2010', "David Yates");
            $objMovie08 = new hpMovie ("Harry Potter and the Deathly Hallows Part 2", '2011', "David Yates");
        ?>

        <div class="card_container">
            <img class="card_image" src="./src/assets/img/movies/hp-01.jpg" alt=<?php echo $objMovie01->movieTitle()?>>
            <p class="card_title"><?php echo $objMovie01->movieTitle(); ?></p>
            <div class="card_year">
                <p class="card_director"><?php echo $objMovie01->movieDirector(); ?></p>
                <p class="card_year"><?php echo $objMovie01->movieYear(); ?></p>
            </div>
        </div>

    </section>
    <footer>
        <p>Copyrigth &copy;</p>
    </footer>
</body>
</html>
