<h1> hello</h1>
<?php
if (env('APP_ENV') == 'production') {
    echo 'call api live';
} else {
    echo 'call api sandbox';
}
?>