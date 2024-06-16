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