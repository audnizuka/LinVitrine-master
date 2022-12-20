$_POST['Fullname']
$_POST['Tel']
$_POST['Mail']
$_POST['Message']




if(&_POST){
    $Fullname="";
    $Tel="";
    $Mail="";
    $Message="";

    if(isset($_POST['Fullname'])){
        $Fullname= filter_var($_POST['Fullname'], FILTER_SANITIZE_STRING);
    
    }
}