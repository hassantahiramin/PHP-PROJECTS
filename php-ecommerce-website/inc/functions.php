<?php

function db_error($err)
{
    if (SHOW_ERR) {
        return $err;
    } else {
        return 'Database error has occured. Please try again later';
    }
}

function clean_link($str)
{
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
    return $clean;
}

function filterSearchKeys($query){
    $query = trim(preg_replace("/(\s+)+/", " ", $query));
    $words = array();
    $list = array("in","it","a","the","of","or","I","you","he","me","us","they","she","to","but","that","this","those","then");
    $c = 0;
    foreach(explode(" ", $query) as $key){
        if (in_array($key, $list)){
            continue;
        }
        $words[] = $key;
        if ($c >= 15){
            break;
        }
        $c++;
    }
    return $words;
}

function limitChars($query, $limit = 100){
    return substr($query, 0,$limit);
}

function gen_id($len)
{
    $id = md5(uniqid(microtime(), 1)) . getmypid();
    return $id = substr($id, 0, $len);
}

function send_mail($to, $subject, $msg, $type, $emailfrom, $name = null)
{
    $namefrm = ($name == null) ? ($emailfrom) : ($name);

    if ($type == 1) {
        $type = "html";
    } else {
        $type = "plain";
    }
    $headers = '';
    $headers .= 'From: ' . $namefrm . ' <' . $emailfrom . '>' . "\r\n";
    $headers .= "Reply-To: " . $emailfrom . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/$type; charset=UTF-8\r\n";

    if (mail($to, $subject, $msg, $headers)) {
        return true;
    } else {
        return false;
    }
}

function create_folder($folder = null)
{
    if (!is_null($folder)) {
        if (!is_dir($folder)) {
            $old_musk = umask(0);
            mkdir($folder , 0755);
            umask($old_musk);
        }
    }
}

function update_views($conn, $col = 'views',$tbl = PRODUCTS_TBL,$id = 'prodid')
{
    try {
        $qry = "UPDATE " . $tbl . "
        SET " . $col . "=" . $col . "+1
        WHERE $id=:id";
        $q   = $conn->prepare($qry);
        $q->bindParam(':id', $_GET['p']);
        $q->execute();
    } catch (PDOException $pe) {
        echo db_error($pe->getMessage());
        exit;
    }
}

function insert($table, $fields)
{
    foreach ($fields as $k => $v) {
        $key[] = "{$k}";
        $value[] = "{$v}";
    }
    $keys   = join(", ", $key);
    $values = join(", ", $value);

    return "INSERT INTO {$table} ({$keys}) VALUES({$values})";
}

function update($table, $fields, $criteria, $pdo = false)
{

    foreach ($fields as $k => $value) {
        if ($value == 'now()' || $pdo) {
            $updates[] = "{$k}={$value}";
        } else {
            $updates[] = "{$k}='{$value}'";
        }

    }
    $update = join(", ", $updates);

    foreach ($criteria as $col => $value) {
        $wheres[] = "{$col}='{$value}'";
    }
    $where = join(" AND ", $wheres);

    $string= "UPDATE {$table} SET {$update} WHERE {$where}";
    return $string;
}

function basket_where($w = 'AND')
{
    $paras[] = "session_id='" . session_id() . "'";
    if (isset($_SESSION["customer_id"])) {
        $paras[] = "customer_id='" . $_SESSION["customer_id"] . "'";
    }
    if (isset($_COOKIE["cookie_id"])) {
        $paras[] = "cookie_id='" . $_COOKIE["cookie_id"] . "'";
    }
    $where = join(" OR ", $paras);
    return " $w (" . $where . ")";
}

function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

?>
