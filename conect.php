<?php
$server ="localhost";
$username ="root";
$passwd ="";
$database ="subject";
$conn = mysqli_connect($server,$username,$passwd,$database);
//checking the data base connection....
if(!$conn){
    echo "<h1> Database connection .....</h1>";
    sleep(10);
    echo "<p> connection failed!....</p>" .mysqli_connect_error();
}
else{
    while(1){
    $subjectid=11224222;//(int)readline("enter subjectid");
    $subjectname="ccsss";//(string)readline("enter subject name");
    $subjectcode="222dd";//(string)readline("enter subject code");
    $professor="sunil";//(string)readline("enter prfessor");
    $query="insert into subje values('$subjectid','$subjectname','$subjectcode','$professor')";
    if (mysqli_query($conn,$query))
        {
            echo "your data is enter....."."<br>";
        }
    else
    {
        echo "error".mysqli_error($conn);
    }
    echo "your enter another field....."."<br>";
    $a='n';//(string)readline("y/n");
    if($a=="n")
        {
            break;
        }
    }
}
echo "we want retiew the data";
$retrvew='y';//(string)readline("y/n");
if($retrvew=="y"){
    $sql="select * from subje";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($data=mysqli_fetch_assoc($result)){
            echo "subjectid".$data["subjectid"]."<br>";
            echo "subjectname".$data["subjectname"]."<br>";
            echo "subjectcode".$data["subjectcode"]."<br>";
            echo "professor".$data["professor"]."<br>";
        }
    }
}
mysqli_close($conn);
?>