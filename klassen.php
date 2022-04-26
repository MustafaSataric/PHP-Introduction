<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
include "Menu.html";
class User{
    var $ID;
    var $name;
    function printme (){
        echo "Er ist der " . $this->ID . ",und sein Name lautet " .
         $this->name . "<br><br><br>";
    }
}
$mustafa = New User;
$mustafa->ID=1;
$mustafa->name="Mustafa";
$mustafa->printme();


#Das ganze jetzt in üBERSICHTLICH UND LEICHT UND ANSCHAULICHER

class Users{
    var $id2;
    var $name2;

    function __construct($setid2,$setname2){
        $this->id2=$setid2;
        $this->name2=$setname2;
    }
    
 function printme2 (){
        echo "Er ist der " . $this->id2 . ",und sein Name lautet " 
        . $this->name2 . "<br><br><br>";
    }


}
$mustafa = New Users( 2 , "Ali");
$mustafa-> printme2();


#Verebung code von Konstruktoren übernehmen und in Klassen hinzufügem

class SuperUsers EXTENDS Users{
function Abo (){
    echo"<hr>";
    echo "Teuer Teuer  ";
}
}
class InfidielUsers EXTENDS Users{
    function TestAbo (){
    echo "Kostenlos  ";
    }
    }

$mustafa = New SuperUsers( 3 , "Momo");
$mustafa->Abo();
$mustafa->printme2();
$momo = New InfidielUsers( 2 , "Mustafa");
$momo->TestAbo();
$momo->printme2();


#falls man in einer "class" vor einer funktion protected&public setzt dann
#kann man die funktionen nur in der klasse benutzen
#Funktionen Überschreiben

class Userh{
    var $idh;
    var $nameh;

    function __construct($setidh,$setnameh){
        $this->idh=$setidh;
        $this->nameh=$setnameh;
    }
    
 function printmeh (){
        echo "Er ist der " . $this->idh . ",und sein Name lautet " 
        . $this->nameh . "<br><br><br>";
    }
}
class SuperUser EXTENDS Userh{
    function Abo (){
        echo"<hr>";
        echo "Teuer Teuer  ";
    }
    }

    function printmeh (){
        echo "Er ist der " . $this->idh . ",und sein Name lautet " 
        . $this->nameh ."Funktion geändert". "<br><br><br>";
    }

    class InfidielUser EXTENDS Userh{
        function TestAbo (){
        echo "Kostenlos  ";
        }
        }

$mustafa = New Userh( 2 , "Ali");
$ali = New Userh( 3 , "mustafa");
$users=array($ali,$mustafa);
for($i=0;$i<2;$i++){
    $users[$i]->printmeh();
}


#Interfaces code denn man in klassen implementiert

interface MeinInterface
{
    public function methode1($parameter1, $parameter2);
    public function methode2($parameter3, $parameter4);
}
class Beispiel implements MeinInterface
{
    public function methode1($parameter1, $parameter2)
    {
        echo "Ich bin methode1()";
    }
 
    public function methode2($parameter3, $parameter4)
    {
        echo "Ich bin methode2()";
    }
}
$mustafa = New Beispiel;
$mustafa->methode2(3,4);
#Abstrakte Klasse kann man nur in klasse implementieren und nicht als objekt aufrufen

abstract class Printable
{
        var $variable=10;
        abstract function printme();
        function berechne ()
        {
            return 1;
        }
}

abstract class del {
        var $variable=10;
        public function berechne(){
                return 2;
        }
}

class Datenbank extends Printable
{
    function printme () 
        {
            echo"emptY";
        }
}

class Uber extends Printable{
    private $id;
    var $nam;

    function __construct($setid,$setnam){
        $this->id=$setid;
        $this->nam=$setnam;
        $this->printme();
    }

    function printme (){
        echo $this->id . "genau" .$this->nam;
    }
    function setId($newId){
    if($newId>0 && $newId<1000){
        $this->ID=$newId;
    }
    function getId(){
        return $this->ID;
    }
    }

}

$mcs= new Uber(5,"AliAhmet");
$mcs->printme();

?>
 


</html>