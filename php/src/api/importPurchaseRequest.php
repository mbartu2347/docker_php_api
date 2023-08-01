<?php

# try {
#     // Verbindung herstellen
#     $connectionString = "Driver={ODBC Driver 17 for SQL Server};Server={192.168.9.19};Database={SBODemoSCM};Uid={sa};Pwd={devadm};";
#     $pdo = new PDO("odbc:" . $connectionString);
# 
#     $sql = "SELECT TOP 10 tabna, syuni, sylev FROM beas_scm_sys_pre";
# 
#     // Den SELECT-Befehl ausführen und das Ergebnis abrufen
#     $result = $pdo->query($sql);
# 
#     echo "Import PurchaseRequest";
#     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
#         // Hier kannst du die Daten aus der Tabelle weiterverarbeiten oder anzeigen
#         // Zum Beispiel:
#         echo "tabna: " . $row['tabna'] . ", syuni: " . $row['syuni'] . ", sylev: " . $row['sylev'] . "<br>";
#     }
#     // Die PDO-Verbindung schließen
#     $conn = null;
# 
#     // Hier kannst du deine Datenbankabfragen und -operationen ausführen
# 
# } catch (PDOException $e) {
#     echo "Verbindungsfehler: " . $e->getMessage();
# }

header('Content-Type: application/json');
echo json_encode(['success' => true, 'message' => 'importPurchaseRequest']);
?>