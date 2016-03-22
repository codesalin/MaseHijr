<?php require_once 'masehijr.php'; ?>
<style>
.masehijr-g{background-image:url('sore.png');background-size:400px 100px;width:400px;height:100px;background-repeat:no-repeat;border-radius:5px}
.masehijr-p{text-align:center;vertical-align:middle;line-height:100px;font-size:30px;color:#fff}
</style>
<div class="masehijr-g">
<p class="masehijr-p">
<?php
$Year = date("Y");$Month = date("m");$Day = date("d");
MaseHijr($Year, $Month, $Day);
?>
</p></div>
