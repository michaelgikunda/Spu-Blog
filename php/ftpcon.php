<?php
    // Connect to FTP server
$ftp_server = "ftpupload.net";
$ftp_user = "epiz_33762465";
$ftp_pass = "pmLfTRd02ZsQ";
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
?>