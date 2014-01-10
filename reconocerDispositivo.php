<?php
if( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'iPhone' ) ) {
   echo 'iPhone';
}

elseif( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'Android' ) ) {
   echo 'Android';
}

elseif( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'BlackBerry' ) ) {
   echo 'BlackBerry';
}

elseif( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'Windows Phone' ) ) {
    echo 'Windows Phone';
}

elseif( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'iPad' ) ) {
    echo 'Ipad';
}
else{
    echo 'Laptop';
}
?>