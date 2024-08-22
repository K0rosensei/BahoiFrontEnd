<?php

session_start();
$_SESSION = [];
session_destroy();
session_unset();

?>
<script>
    window.history.back();
</script>
<?php
exit;
?>