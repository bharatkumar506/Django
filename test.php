<?php
$datetime->setTimezone(new DateTimeZone('America/New_York'));
print $datetime->format('Y-m-d H:i:s (e)');
?>