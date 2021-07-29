<?php

function sqlite_open($filename, $perm='', $err='') {
  $db = new SQLite3($filename);
  $error = $db->lastErrorMsg();
  if ($error != 'not an error') {
    $err = $error;
    die($err);
  }
  return $db;
}

function sqlite_query($db, $sql) {
  return $db->query($sql);
}

function sqlite_num_rows($r) {
  $numRows = 0;
  if (!$r) return 0;
  while ($rows = $r->fetchArray()) {
    ++$numRows;
  }
  return $numRows;
}

function sqlite_fetch_array($r) {
  if ($r) {
    return $r->fetchArray();
  } else {
    return false;
  }
}

function sqlite_close($db) {
  return $db->close();
} 

?>