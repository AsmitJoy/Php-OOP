<?php 
include 'header.php';
include 'functions.php';
include "namespace.php";
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
            <hr><hr><h3>Working with Method and Object [Calculator]</h3><hr><hr>
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

        <!-- Access Modifires -->
            <hr><hr><h3> Access Modifires </h3><hr><hr>
            <?php
                echo"
                    public    = using this access modifire we can call poperty or method anywhere of the Class,Object and Subclass. <br>
                    private   = using this access modifire we can call poperty or method only from  the Class. <br>
                    protected = using this access modifire we can call poperty or method only from the Class,Subclass not Method.
                    ";
            ?>
        <!-- Polymorphism -->
            <hr><hr><h3>Polymorphism </h3><hr><hr>
            <?php

                echo"When we start to extend classes, and add
                 functionality to them which wasn't there previously, 
                 and even override existing methods (functions), 
                 this is callde Polymorphism;
                 .<br>The basis of  is Inheritance and override Method.";
                
                 class Customar_Shovon //We can use "final" keyword from preventing extending and ovverridding of a Class
                 {
                    
                 }
 
                 class Admin_joy extends Customar_Shovon //Admin is subclass
                 {
                     
                 }

                 $admin = new Admin_joy;
                 if ($admin instanceof Customar_Shovon) {
                     echo"<br>Inherited";
                 }
              
            ?>
        <!-- Interface -->
            <hr><hr><h3>Interface</h3><hr><hr>
            <?php

                interface School{
                    public function my_school();
                }
                interface College{
                    public function my_college();
                }
                interface Varsity{
                    public function my_varsity();
                }

                class Teacher implements School, College, Varsity{

                    public function __construct(){
                        $this->my_school();
                        $this->my_college();
                        $this->my_varsity();
                    }
                    
                    public function my_school(){
                        echo"I am a school Teacher<br>";   
                    }

                    public function my_college(){
                        echo"I am a college Teacher<br>";   
                    }

                    public function my_varsity(){
                        echo"I am a varsity Teacher";   
                    }
                }
                 
                $teacher = new Teacher;
            ?>

        <!-- Abstract_class -->
            <hr><hr><h3>Abstract_class</h3><hr><hr>
            <?php

                echo"We can not create directly an object to an abstract class. For this we have to create sub class.In a abstract class we can only create abstract method name.<br>";
                
                abstract class x_students{

                    public $name;
                    public $age;
                    public function details(){
                        echo $this->name." is ".$this->age." years old";
                    }

                    abstract public function school();
                }

                class Boy extends x_students{

                    public function describe(){
                        return parent::details().". And i am a school.<br> ";
                    }

                    public function school(){
                        return"I like to watch a full football Match";
                    }

                }

                $s = new Boy;
                $s->name = "Asmit";
                $s->age = "17";
                echo $s->describe();
                echo $s->school();

            ?>

        <!-- Magic Method -->
            <hr><hr><h3>Magic Method</h3><hr><hr>
            <?php

                class Student_cse{
                    public $name;

                    public function describe(){
                        echo"i am a student.<br>";
                    }

                    public function __get($sp){
                        echo"$sp dosen't exist<br>";
                    }
                    public function __set($sp,$value){
                        echo"We set $sp->$value<br>";
                    }

                    public function __call($sp,$value){
                        echo"There is no".$sp. " method and Arguments:".implode(', ',$value);
                    }
                }
                $st = new Student_cse();
                $st->describe();
                $st->Joy;
                $st->age=22;
                $st->notExistMethod('2','4','8');

            ?>
        <!-- Class and Method existence -->
            <hr><hr><h3>Class and Method existence</h3><hr><hr>
            <?php
                
                if (class_exists("Calculator")) {
                    echo"Class Found<br>";
                }else{
                    echo "Class not found<br>";
                }
                $cal = new Calculator;
                if (method_exists($cal,'A_Shovon')) {
                    echo"Method Exist";
                }else{
                    echo"Method not Exist";
                }

            ?>
        <!-- Autoloading Classes -->
            <hr><hr><h3>Autoloading Classes</h3><hr><hr>
            <?php

                echo"Check Tutorial-16";

            ?>
        <!-- Method-chaining -->
         <hr><hr><h3>Method-chaining</h3><hr><hr>
            <?php

                $cal = new Calculation_2;
                echo "Result is: ".$cal->getValue(2,3)->getResult();


            ?>
        <!-- Type Hinting -->
         <hr><hr><h3>Type Hinting</h3><hr><hr>
            <?php
               class ball{
                   public function multi(array $x){
                        foreach($x as $value){
                            echo $value[0];
                            echo ":";
                            echo $value[1]*$value[2]."<br>";
                        }
                   }
               }
               $ucl_ball = new ball;
               $num = array(
                   array("Number One ",10,20),
                   array("Number Two ",20,20)
               );
               $ucl_ball->multi($num);
            ?>
        <!-- Object Iteration -->
         <hr><hr><h3>Object Iteration</h3><hr><hr>
            <?php
               class Good_person{
                   public $Name  = "Asmit Das";
                   public $Age   = "17";
                   public $Skill = "Football";

                   private $email      = "aj17@gmail.com";
                   protected $password = "1234";

                   public function interatorInner(){
                       
                    echo"Inside Class";
                    foreach ($this as $key => $value) {
                        echo"<pre>";
                        echo"$key = $value";
                        echo"</pre>";
                        }
                   }
               }
               $person = new Good_person;
               foreach ($person as $key => $value) {
                echo"<pre>";
                echo"$key = $value";
                echo"</pre>";
                }
               $person->interatorInner();

               
            ?>
        <!-- Using Traits -->
         <hr><hr><h3>Using Traits</h3><hr><hr>
            <?php
                trait Java{
                   public function Javacoder(){
                        return"I love java<br>";
                   }
                }
                trait Php{
                public function Phpcoder(){
                     return"I love php<br>";
                    }
                }
                trait Java_Php{
                    use Java,Php;
                }
                Class One{
                    use java;
                }
                Class two{
                    use Php;
                }
                Class Three{
                    use Java_Php;
                }
                $c1 = new One;
                echo $c1->Javacoder();
                $c2 = new Two;
                echo $c2->Phpcoder();
                $c2 = new Three;
                echo $c2->Javacoder();
                echo $c2->Phpcoder();
            
            ?>
        <!-- _Class_ and get_class -->
         <hr><hr><h3>_Class_ and get_class</h3><hr><hr>
            <?php
                abstract class Python{
                   public function Framework()
                   {
                    echo "Base Class Constant and class name->".__CLASS__."<br>";
                    echo "Base Class Function and class name->".get_class($this)."<br>";

                   }
               }
               class Python_child extends Python{
                   public function cms()
                   {
                    echo "Child Class Constant and class name->".__CLASS__."<br>";
                    echo "Child Class Function and class name->".get_class($this)."<br>";
                   }
               }
               $new = new Python_child;
               $new->Framework();
               echo"<hr>";
               $new->cms();

            ?>
        <!-- Late Static Building -->
         <hr><hr><h3>Late Static Building</h3><hr><hr>
            <?php
               echo"<i>Watch Ttorial</i>";
            ?>
        <!-- Object Cloning and Magic __clone -->
         <hr><hr><h3>Object Cloning and Magic __clone</h3><hr><hr>
            <?php
                class Language{
                    Private $category;
                    Private $framework;

                    public function setCat($a){
                        $this->catagory = $a;
                    }
                    public function getCat(){
                        return $this->catagory;
                    }
                    public function setFrame($b){
                        $this->framework = $b;
                    }
                    public function getFrame(){
                        return $this->framework ;
                    }
                    public function __clone(){
                        $lang = new Language();
                        $lang->setFrame($this->framework);
                        return $lang;
                    }

                }
                $java = new Language;
                $java->setCat("OOP");
                $java->setFrame("Spring");

                $php = clone $java;
                $php->setCat("Joy"); 

                echo $php->getCat()."<br>";
                echo $php->getFrame()."<br>";
                
                echo $java->getCat()."<br>";
                echo $java->getFrame()."<br>";

            ?>
        <!-- ArrayObject -->
         <hr><hr><h3>ArrayObject</h3><hr><hr>
            <?php

                for($i=0; $i<10; $i++){ }
                $arr = array("Html","Css","Php","Java");
                $coding = new ArrayObject($arr);
                $coding->append("Dart");

                $iterator = $coding->getIterator();
                while ($iterator ->valid()) {
                    echo $iterator->current()."<br>";
                    $iterator->next();
                }

            ?>
        <!-- Standard Php Library -->
         <hr><hr><h3>Standard Php Library</h3><hr><hr>
            <?php
                $arr = array("Html","Css","Php","Java");
                $ai = new ArrayIterator($arr);
                echo $ai->current()."<br>";
                $ci = new CachingIterator($ai);

                foreach ($ci as $value) {
                    echo $value;
                    if($ci->hasNext()) {
                        echo", ";
                    }
                }
               
            ?>
        <!-- Object Serialization -->
         <hr><hr><h3>Object Serialization </h3><hr><hr>
            <?php
               Class Programming{
                   public    $html;
                   public    $css;
                   private   $php;
                   protected $java;

                   function __construct(){
                       $this->html = "I know Html";
                       $this->css  = "I know Css";
                       $this->php  = "I am Php Coder";
                       $this->Java = "I am java programmer";
                   }
                }
                $pro = new Programming();
                $ser = serialize($pro);
                /*
                file_put_contents("proramming.txt",$ser);
                echo $ser;
               */
              $getcon = file_get_contents("proramming.txt");
              $unser = unserialize($getcon);
              echo"<pre>";
              print_r($unser);
              echo"</pre>";

            ?>
        <!-- Namespaces -->
         <hr><hr><h3>Namespaces</h3><hr><hr>
            <?php
            
            use joy\coding as ru;
            new ru();
            echo Html;
            echo joy\CSS;

            ?>
        <!-- Strategy Design Pattern -->
         <hr><hr><h3>Strategy Design Pattern</h3><hr><hr>
            <?php
               echo"Watch Tutorial";
            ?>

        <!-- Factory Design Pattern -->
         <hr><hr><h3>Factory Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial";
            ?>
        <!-- Abstract Factory Design Pattern -->
         <hr><hr><h3>Abstract Factory Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial"; 
            ?>
        <!-- Singleton Design Pattern -->
         <hr><hr><h3>  </h3><hr><hr>
            <?php
               class Lopa{
                   private  static $i;
                   public function __construct(){
                       if (!self::$i) {
                        self::$i = $this;
                        echo"Created New One.<br>";
                        return self::$i;
                       }else{
                            echo"Old One Instance<br>";
                            return self::$i;
                       }
                   }
               }
               new Lopa;
               new Lopa;
               new Lopa;
               new Lopa;

            ?>
        <!-- Iterator Design Pattern -->
         <hr><hr><h3>Iterator Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial[Php-OOP-Part33]"; 
            ?>
        <!-- Observer Design Pattern -->
         <hr><hr><h3>Observer Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial[Php-OOP-Part34]"; 

            ?>
        <!-- Decorator Design Pattern -->
         <hr><hr><h3>Decorator Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial[Php-OOP-Part35]"; 
            ?>
        <!-- Facade Design Pattern -->
         <hr><hr><h3>Facade Design Pattern</h3><hr><hr>
            <?php
                echo"Watch Tutorial[Php-OOP-Part36]"; 
               
            ?>
        <!-- MySQL Connect Way -->
         <hr><hr><h3>MySQL Connect Way</h3><hr><hr>
            <?php
                $db = new mysqli("localhost","root","","userdata");
                if (mysqli_connect_errno()) {
                    echo"connection fail";
                }else{
                    echo"sucessfully connected";
                    
                }

                //$sql = "UPDATE records SET email ='Lopanu@gmail.com' WHERE id='1' ";
                $sql = "SELECT * FROM records";
                $result = $db->query($sql);
                while ($data = $result->fetch_object()) {
                    echo"<pre>";
                    echo $data->name;
                    echo"</pre>";
                    echo"<pre>";
                    echo $data->email;
                    echo"</pre>";


                }


            ?>
        <!-- Interface -->
         <hr><hr><h3>Interface</h3><hr><hr>
            <?php
               
            ?>
        <!-- Interface -->
         <hr><hr><h3>Interface</h3><hr><hr>
            <?php
               
            ?>
        </div>
    </div>
</body>

<?php include'footer.php';?>