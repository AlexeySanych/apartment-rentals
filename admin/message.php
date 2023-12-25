<?php
$messages_query = mysqli_query($mysqli, "SELECT * FROM reviews");
$messages = mysqli_fetch_all($messages_query, MYSQLI_ASSOC);

$title = 'Сообщения';
include '../../admin/layouts/pages-head.php';
?>
    <h1>Сообщения</h1>
    <?php include '../../admin/layouts/message-form.php';?>
</div>
</body>
</html>