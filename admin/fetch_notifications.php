<?php
    require('connection.inc.php');
    require('functions.inc.php');
    $query = "SELECT * FROM notifications WHERE status= 'unread' ORDER BY notifi_id DESC";
    $result = mysqli_query($con, $query);

    $notifications = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $notifications[] = array(
                'icon' => 'fa-info',
                'message' => $row['message']
            );
        }
    }
    //pr($notifications);

    header('Content-Type: application/json');
    echo json_encode(array(
        'count' => count($notifications),
        'notifications' => $notifications
    ));
?>
