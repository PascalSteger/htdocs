<?php
if (@preg_match('/\p{L}/u', 'a') == 1) {
echo "PCRE unicode support is turned on.\n";
} else {
echo "PCRE unicode support is turned off.\n";
}
?>
