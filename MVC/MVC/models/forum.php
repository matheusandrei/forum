<?php


function forumSelect() {
    require_once(CONNEX_DIR);
    $sql = "SELECT * FROM forum ";
    $result = mysqli_query( $connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

?>