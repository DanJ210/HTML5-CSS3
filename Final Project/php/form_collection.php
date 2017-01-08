<?php 
/*Creating what I need to store into the database*/
class Customer {
    private $firstName;
    private $lastName;
    private $street;
    private $city;

    function __construct($fName, $lName, $street, $city) {
        $this->fistName = $fName;
    }
}

$firstName = $_POST['fname'];
echo $firstName;
?>

<?php 
$dsn = 'mysql:dbname=campbart';
$host = 'localhost';
$userName = 'campbart_daniel';
$password = "2acq628210";

$mysqli = mysqli_connect($host,$userName,$password);
/* Borrowed code that I liked, let's me know if connection
is successful or not. */


$mysqli = mysqli_connect($host,$userName,$password);
if(!mysqli_connect_errno())
{
    /*** if we are successful ***/
    echo 'Connected Successfully'."</br>";

    /*** close connection ***/
    //$mysqli->close();
}
else
{
    /*** if we are unable to connect ***/
    echo 'Unable to connect'."</br>";
    exit();
}

?>