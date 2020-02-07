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


        <!-- Php Destructor -->
            <hr><hr><h3>Php Destructor</h3><hr><hr>
            <?php
             class Footballer_1
             {
                 public $id;
             
                 public function SetId($id){
                     $this->id = $id;
                 }

                 public function __destruct(){
                    if (!empty($this->id)) {
                        echo "Saving Player";
                    }
                 }
             }

             $Persone_one = new Footballer_1("Marcelo","18"); //Object
             $Persone_one->SetId(7);
             unset($Persone_one);
            ?>            
    
        <!-- Working with __construct() and __destruct() -->
            <hr><hr><h3>Working with __construct() and __destruct()</h3><hr><hr>
            <?php
                class UserData{
                    public $user;
                    public $userid;
                    
                    public function __construct($user_name,$user_id){
                        $this->user = $user_name;
                        $this->userid = $user_id;

                        echo "User Name is : ".$this->user."<br>User Id is : {$this->userid}";

                    }
                    public function __destruct(){
                        unset($this->user);
                        unset($this->userid);

                    }
                }

                $US1_name = "Messi";
                $US1_id   = "11";
                $US1      = new UserData($US1_name,$US1_id); 
            ?>

        <!-- Class Constant -->
            <hr><hr><h3>Class Constant</h3><hr><hr>
            <?php
                class Game{

                    const Name = "Far Cry 10";

                    public function gamer(){
                        echo"Ful Name is: ".Game::Name;
                    }

               }
               $game_one = new Game;
               $game_one->gamer();
            ?>
        <!-- Static Poperty and Static Method -->
            <hr><hr><h3>Static Poperty and Static Method</h3><hr><hr>
            <?php
               class Stat{
                   public static $age = 35;

                   public static function display(){
                       echo"Age is: ".self::$age;//"::"->this called scope resoulation operator
                   }

               }

               Stat::display();//Static Method can call  without create class object

            ?>

        <!-- Inheritance -->
            <hr><hr><h3>Inheritance</h3><hr><hr>
            <?php
                class Userdeatils //We can use "final" keyword from preventing extending and ovverridding of a Class
                {
                    public $name; //Property
                    public $age; //Property

                    public function __construct($nam,$ag){
                        $this->name = $nam;
                        $this->age = $ag;
                    }
                
                    public function PersonDetails(){ //We can use "final" keyword from preventing extending and ovverridding of a Method
                        echo "Player Name is : ".$this->name."<br>Player age is : {$this->age}<br>";
                    }

                }

                class Admin extends Userdeatils //Admin is subclass
                {
                    public $level;
                    public function PersonDetails(){ //Method
                        echo "Player Name is : ".$this->name."<br>Player age is : {$this->age}<br>Player level is:{$this->level}<br>";//subclass method will overwrite main class method if they are same
                    }
                }
                

                $person_name = "Lukaku" ;
                $person_age  = "08" ;

                $Persone_one = new Userdeatils($person_name,$person_age); //Object
                $Persone_one->PersonDetails();

                $admin_1 = new Admin($person_name,$person_age);//object of subclass
                $admin_1 ->level = "Adminastator";
                $admin_1->PersonDetails();

            ?>

        <!-- Working with __construct() and __destruct() -->
            <hr><hr><h3>Working with __construct() and __destruct()</h3><hr><hr>
            <?php
               
            ?>
        <!-- Working with __construct() and __destruct() -->
            <hr><hr><h3>Working with __construct() and __destruct()</h3><hr><hr>
            <?php
               
            ?>
        <!-- Working with __construct() and __destruct() -->
            <hr><hr><h3>Working with __construct() and __destruct()</h3><hr><hr>
            <?php
               
            ?>

        </div>
    </div>
</body>

<?php include'footer.php';?>