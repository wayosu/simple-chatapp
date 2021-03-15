<?php
while($row = $sql->fetch_assoc()) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = $conn->query($sql2);
    $row2 = $query2->fetch_assoc();
    if (mysqli_num_rows($query2) > 0) {
        $result = $row2['msg'];
    } else {
        $result = "No message available";
    }

    // trimming message if word are more than 28
    (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
    // adding you: text before msg if login id send msg
    ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";

    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                        <img src="php/images/'. $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                            <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
}