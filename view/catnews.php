<?php
ob_start();
?>
<h1>Uudised (kategooriad)</h1>
<br>
<div class="newsContainer">
<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>
</div>