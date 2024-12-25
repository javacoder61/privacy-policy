 <?php
$uri = "mysql://avnadmin:AVNS_z3JFM2zwSiYjCLfzjiA@mysql-db101-meals.d.aivencloud.com:28690/defaultdb?ssl-mode=REQUIRED";
$fields = parse_url($uri);

$items = array();
 $url=$fields["host"];
 $user= $fields["user"];
 $pass=$fields["pass"];
 $dbname="defaultdb";
$value= 0;
if(isset( $_POST['val'])){

  $value= $_POST['val'];

}
 $num=0;

 $connect=mysqli_connect($url,$user,$pass,$dbname);

$result="SELECT name,ing,note FROM defaultdb where id=$value";
$query="INSERT INTO `defaultdb`.`meals` ( `name`, `ing`, `note`) VALUES ( 'abc', 'abc', 'abc')";

 $sql=mysqli_query($connect,$query);


 while($row=mysqli_fetch_assoc($sql) ){
     /* add a new item */
     $num++;
     $items[$value] = array(

      'name' => $row['name'],
      'ing' => $row['ing'],
      'note' => $row['note']


  );

}

$json_response = json_encode($items);
echo $json_response;

?>
