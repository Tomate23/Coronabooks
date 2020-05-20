<?php
try {
    include 'conexion2.php';
    // Here is where we manage the vote request    
    if (isset($_SESSION['Usuario'])){
        $your_rattings_sql = "SELECT rating FROM ratings where id_libro=".$row['idLibro']." and id_cliente=".$_SESSION['Usuario']['idUser'].";";
        $your_rattings_result = mysqli_query($con2,$your_rattings_sql);
        
        $your_rating = mysqli_fetch_array($your_rattings_result);

        
        if(isset($_REQUEST["vote"])){
            $vote = $_REQUEST["vote"];
            $id_libro = $_REQUEST["id_libro"];
            $iduser = $_REQUEST["idUser"];

            // if the current book is the one the user is voting, we proceed to the inster or update
            if($id_libro == $row['idLibro']){
                // if there is already a vote, we update it, if not, we insert a new vote
                if(isset($your_rating)){
                    $update_rattings_sql = "UPDATE ratings SET rating=".$vote." where id_libro=".$row['idLibro']." and id_cliente=".$_SESSION['Usuario']['idUser'].";";
                    mysqli_query($con2,$update_rattings_sql);
                }
                else {
                    $insert_rattings_sql = "INSERT INTO ratings (id_cliente, id_libro, rating) VALUES (".$_SESSION['Usuario']['idUser'].",".$row['idLibro'].",".$vote.";";
                    mysqli_query($con2,$insert_rattings_sql);
                }

                // if we updated or inserted, we need to fetch it again from the database
                $your_rattings_result = mysqli_query($con2,$your_rattings_sql);        
                $your_rating = mysqli_fetch_array($your_rattings_result);
            }
        }
    }
    



    $general_rattings_sql = "SELECT AVG(rating) as rating FROM ratings where id_libro=".$row['idLibro']." group by id_libro;";
    $general_rattings_result = mysqli_query($con2,$general_rattings_sql);
    
    $general_rating = mysqli_fetch_array($general_rattings_result);
    if(mysqli_num_rows($general_rattings_result) == 0){
        ?>
            <h2>Still no ratings for this book</h2>
        <?php
    }
    else{
        ?>
            <h2>Users star Rating</h2>
        <?php
        for ($i=0; $i < 5; $i++) { 
            ?>
                <span class="fa fa-star <?php
                if($general_rating["rating"] > $i) {
                    echo "checked";
                }
                ?>"></span>
            <?php
        }
    }

    ?>
        <h2>Your star Rating</h2>
    <?php
    for ($i=0; $i < 5; $i++) { 
        unset($url);
        if (isset($_SESSION['Usuario'])){
            $url=$_SERVER["SCRIPT_NAME"]."?vote=".($i+1)."&id_libro=".$row['idLibro']."&idUser=".$_SESSION['Usuario']['idUser'];
        }
        else{
            $url="./redirec/login.php";
        }            
        ?>
            <a href=<?php echo $url?>><span class="fa fa-star <?php
            if(isset($your_rating) && $your_rating["rating"] > $i) {
                echo "checked";
            }
            ?>"></span></a>
        <?php
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>