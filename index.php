<?php 
include 'header.php';
include 'functions.php';
?>

    <div class="maincode" >

        <!-- Php Class, Property, Method and Object -->
            <hr><hr><h3>Php Class, Propery, Method and Object</h3><hr><hr>
            <?php

                class Person
                {
                    public $name; //Property
                    public $age; //Property

                    public function PersonName(){ //Method
                        echo " Person Name is: ".$this->name."<br>";
                    }
                    public function PersonAge($value){ //Method
                        echo " Person Age is:".$this->age=$value;
                    }
                }

                $Persone_one = new Person; //Object
                $Persone_one->name = "Asmit Das Joy";
                $Persone_one->PersonName();
                $Persone_one->PersonAge("17");

            ?>
            <!-- End -->


        <!-- Working with Method and Object -->
            <hr><hr><h3>Working with Method and Object</h3><hr><hr>
            <form method="post">
                <table>
                    <tr>
                        <td>Enter the first Number</td>
                        <td><input type="number" name="number_1" ></td>

                    </tr>
                    <tr>
                        <td>Enter the seceond Number</td>
                        <td><input type="number" name="number_2" ></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="padding:3px" type="submit" value="calculation" name="calculation"></td>

                    </tr>
                </table>
            </form>
            <?php
                if (isset($_POST['calculation'])) {
                    $num_one = $_POST['number_1'];
                    $num_two = $_POST['number_2'];

                    if (empty($num_one) or empty($num_two)) {
                        echo"<span style='color:#EE5443'>Field must not be empty</span>";
                    }else{

                        $cal = new Calculator;
                        $cal-> add($num_one,$num_two);
                        $cal-> sub($num_one,$num_two);
                        $cal-> multi($num_one,$num_two);
                        $cal-> div($num_one,$num_two);
                    }

                }//end
            ?>

        <!-- Php Constructor -->
            <hr><hr><h3>Php Constructor</h3><hr><hr>
            <?php
                class Footballer
                {
                    public $name; //Property
                    public $age; //Property

                    public function __construct($nam,$ag){
                        $this->name = $nam;
                        $this->age = $ag;
                    }
                
                    public function PersonDetails(){ //Method
                        echo "Player Name is : ".$this->name."<br>Player age is : {$this->age}";
                    }

                }

                $Persone_one = new Footballer("Marcelo","18"); //Object
                $Persone_one->PersonDetails();
                

            ?>


        <!-- Working with Method and Object -->
            <hr><hr><h3>Working with Method and Object</h3><hr><hr>
            <?php
            
            ?>            





        </div>
    </div>
</body>

<?php include'footer.php';?>