<?php

function getAllDb($db) {

    $sql = "SELECT * FROM mag";
    $result = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['Number']] = $row;
        }     
    return $result;        
}


function deleteRecord($db,$id) {

    $sql = "DELETE FROM mag WHERE Number = $id";

    $stmt = $db->prepare($sql);

    $stmt->execute();
};

// function updateRecord($db,$id,$name,$subject,$pages,$price,$publisher,$year) {

//     $sql = "UPDATE mag SET name ='$name',Subject='$subject',Number_of_pages='$pages',Price='$price',Publisher='$publisher',Year_of_issue='$year' WHERE Number = $id";

//     $stmt = $db->prepare($sql);

//     $stmt->execute();
// };

?>
