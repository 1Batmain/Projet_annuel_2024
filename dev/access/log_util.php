<?php
// log_util.php
require_once('database.php');

function ajouterLog($user_id, $action, $page) {
    global $pdo;  // Assurez-vous que $pdo est accessible ici
    $log_sql = "INSERT INTO logs (user_id, action, page_visited) VALUES (:user_id, :action, :page_visited)";
    $log_stmt = $pdo->prepare($log_sql);
    $log_stmt->execute([
        ':user_id' => $user_id,
        ':action' => $action,
        ':page_visited' => $page
    ]);
}
?>
