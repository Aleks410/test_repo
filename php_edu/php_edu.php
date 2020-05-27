<? 
class Person{
  public $name;
  public $lastname;
  public $age;
  public $mother;
  public $father;
  public $grandmother_mm;
  public $grandfather_mm;
  public $grandmother_dd;
  public $grandfather_dd;
  
  function __construct($n,$l,$a,$m=null,$f=null,$gm_mm,$gf_mm,$gm_dd,$gf_dd){
    $this->name = $n;
    $this->lastname = $l;
    $this->age = $a;
    $this->mother = $m;
    $this->father = $f;
    $this->grandmother_mm = $gm_mm;
    $this->grandfather_mm = $gf_mm;
    $this->grandmother_dd = $gm_dd;
    $this->grandfather_dd = $gf_dd;
  }
  public function sayHi(){
    echo "Hi, my name is ".$this->name;
  }
  public function tellAboutYourParents(){
    $str = '';
    if ($this->mother == null and $this->father == null) $str = "Mother is null<br>Father is null<br>";
    else if ($this->mother == null) $str = "Mother  is null<br>My father: ".$this->father->name."<br>";
    else if ($this->father == null) $str = "Father is null<br>My mother: ".$this->mother->name."<br>";
    else
      $str = "
              Hi, my name is ".$this->name."<br>
              <br>
              Mom's grandmother: ".$this->grandmother_mm->name."<br>
              Grandfather from mom's side: ".$this->grandfather_mm->name."<br>
              Grandmother from dad: ".$this->grandmother_dd->name."<br>
              Dad's grandfather: ".$this->grandfather_dd->name."<br>
              My mother: ".$this->mother->name."<br>
              My father: ".$this->father->name."<br>
              <br>
              <br>
              ";
              
    return $str;
  }
}

$nazar = new Person("Nazar","Ivanov",70,$alex);
$agrafena = new Person("Agrafena","Ivanova",67,$alex);

$nikanor = new Person("Nikanor","Petrov",68,$mila);
$fekla = new Person("Fekla","Petrova",63,$mila);

$alex = new Person("Alex","Ivanov",36,$agrafena,$nazar);
$mila = new Person("Mila","Ivanova",34,$fekla,$nikanor);

$olga = new Person("Olga","Ivanova",7,$mila,$alex,$fekla,$nikanor,$agrafena,$nazar);
$igor = new Person("Igor","Ivanov",3,$mila,$alex,$fekla,$nikanor,$agrafena,$nazar);
$eva = new Person("Eva","Ivanova",1,$mila,$alex,$fekla,$nikanor,$agrafena,$nazar);


echo $igor->tellAboutYourParents();
echo $olga->tellAboutYourParents();
echo $eva->tellAboutYourParents();
?>
