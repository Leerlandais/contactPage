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
    $sql = "SELECT `cp_visitor_id` AS id,
                   `cp_visitor_code` AS code,
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
        $_SESSION["count"] = true;
        return true;     
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function mergeVisitorCounters(PDO $db) : bool | string {
    $sql = "UPDATE `cp_visitors` 
            SET    `cp_visitor_current` 
            =      `cp_visitor_new`";
    try{
        $query = $db->query($sql);
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function addNewVisitor(PDO $db, string $code, string $name, string $mail, string $lang) {
    $sql = "INSERT INTO `cp_visitors`
                        (`cp_visitor_code`,
                         `cp_visitor_name`,
                         `cp_visitor_email`,
                         `cp_visitor_lang`) 
            VALUES      (?,?,?,?)";
    $stmt = $db->prepare($sql);

    try {
        $stmt->bindValue(1,$code);
        $stmt->bindValue(2,$name);
        $stmt->bindValue(3,$mail);
        $stmt->bindValue(4,$lang);
    
        $stmt->execute();
        if ($stmt->rowCount() === 0) return false;
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }

}

function deleteVisitorFromList(PDO $db, int $id) : bool | string {
    $sql = "DELETE FROM `cp_visitors`
            WHERE `cp_visitor_id` = ?";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        if($stmt->rowCount() === 0) return false;
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deleteMessageFromList(PDO $db, int $id) : bool | string {
    $sql = "DELETE FROM `cp_messages`
            WHERE `cp_messages_id` = ?";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        if($stmt->rowCount() === 0) return false;
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}