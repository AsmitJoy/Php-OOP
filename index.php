<?php include'header.php';?>

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








        </div>
    </div>
</body>

<?php include'footer.php';?>