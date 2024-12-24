
       <?php
if($_POST){ // kayıt ol butonuna tıklandığında : https://mkiziltay.epizy.com/suggestion/newmeal.php?name=**MEALNAME**&ing=**INGREDIENTS**&note=**NOTES**

    $mealName = $_POST["name"];
    $ingredients = $_POST["ing"];
    $notes = $_POST["note"];

    $pattern = '/[^a-z0-9]+/i';
    $ingredients = preg_replace('/[^a-z0-9]+/i',",",$ingredients);
    echo "<br>";
    echo $ingredients;

    
        
}
?>

