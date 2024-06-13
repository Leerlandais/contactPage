<?php

function getVisitorName(PDO $db, $code) : array | string { // why did this work when I had forgotten to specify that it was a PDO?
    $sql = "SELECT * 
            FROM `cp_visitors`
            WHERE `cp_visitor_code` = ?";

    $stmt = $db->prepare($sql);
    try{
        $stmt->execute([$code]);
        $result = $stmt->fetch();

        return $result;
        
        }catch(Exception){
        $errorMessage = "Couldn't add that";
        return $errorMessage;
        }
}

function getVisitorCount(PDO $db) {
    $sql = "SELECT `cp_visitor_code` AS code,
                   `cp_visitor_name` AS nom,
                   `cp_visitor_current` AS curr,
                   `cp_visitor_new` AS new
            FROM `cp_visitors`";
    try {
        $query = $db->query($sql);
        if ($query->rowCount() === 0) {
            $errorMessage = "There is no visitors yet";
            return $errorMessage; 
        }else {
            $result = $query->fetchAll();
            $query->closeCursor();
            return $result;
        }
        }catch(Exception $e) {
            return $e->getMessage();
}
}

function updateVisitorCountByID(PDO $db, $code) : bool | string {
    $sql = "UPDATE `cp_visitors`
            SET    `cp_visitor_new`
            = 	   `cp_visitor_new` + 1
            WHERE  `cp_visitor_code` = ?";
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute([$code]);
        return true;     
    }catch(Exception $e) {
        return $e->getMessage();
    }
}