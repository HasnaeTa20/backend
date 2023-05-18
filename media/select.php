<?php
$list =arry();
$result=$con->query("SELECT *FROM user");
if($result){
    while($row=$result->fetch_assoc()){
        $list[]=$row;
    }
    echo json_encode($list);
}
?>