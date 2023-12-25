<?php
$messages_query = mysqli_query($mysqli, "SELECT * FROM reviews WHERE is_view = 0");
$messages = mysqli_fetch_all($messages_query, MYSQLI_ASSOC);

//mysqli_query($mysqli, "UPDATE reviews SET is_view = 1 WHERE is_view = 0");

$title = 'Новые сообщения';
include '../../admin/layouts/pages-head.php';
?>
        <h1>Новые сообщения</h1>
        <?php include '../../admin/layouts/message-form.php';?>
    </div>
</body>
</html>
