<?php

function sendVisitorMessage(PDO $db, int $id, string $nom, string $email, string $message) : bool | string {

    $sql = "INSERT INTO `cp_messages`
                        (`cp_messages_origin`,
                         `cp_messages_sender`,
                         `cp_messages_mail`,
                         `cp_messages_mess`) 
            VALUES      (:id,
                         :nom,
                         :email,
                         :mess)";
    $stmt = $db->prepare($sql);

    try{
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":mess", $message);

        $stmt->execute();
        if($stmt->rowCount() === 0) return false;
        return true;
    }catch(Exception) {
        $errorMessage = "Something went wrong adding the message";
        return $errorMessage;
    }
}

function getVisitorMessages(PDO $db) : array | bool | string {
    $sql = "SELECT *,
                    cp_messages_sender AS sentBy,
                    cp_messages_mess AS mess,
                    cp_messages_date AS thedate
            FROM cp_messages";

try{
        $query = $db->query($sql);
        if ($query->rowCount() === 0) return false;
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception) {
        $e = "Can't get messages";
        return $e;
    }
}

function getOneMessageByID(PDO $db, int $id) : array | string {
    $sql = "SELECT  cp_messages_sender AS sentBy,
                    cp_messages_mess AS mess,
                    cp_messages_date AS thedate
            FROM cp_messages
            WHERE cp_messages_id = ?";
    $stmt = $db->prepare($sql);

    try{
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}
