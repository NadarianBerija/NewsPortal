<?php
ob_start();
?>
<h1>Koik uudised</h1>
<br>
<div class="newsContainer">
<?php
ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>
</div>