<?php
/**
* Файл поиска публикаций по заданной дате
* 
* @author Igor Ognichenko
* @copyright Copyright (c)2007-2010 by Kasseler CMS
* @link http://www.kasseler-cms.net/
* @filesource modules/files/calendar.php
* @version 2.0
*/
if (!defined('SEARCH_MODULE')) die("Hacking attempt!");

global $main, $search_key, $date;

if(preg_match('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $date)) $result = $main->db->sql_query("SELECT * FROM ".FILES." WHERE status='1' AND date LIKE '{$_GET['id']}%'");
else $result = $main->db->sql_query("SELECT * FROM ".FILES." WHERE status='1' AND date LIKE '{$_GET['id']}%'");
if($main->db->sql_numrows($result)>0){
    $insert = "INSERT INTO ".SEARCH." VALUES \n";
    while($row = $main->db->sql_fetchrow($result)) $insert .= "(NULL, '{$search_key}', '".addslashes($row['title'])."', '{$row['author']}', '".addslashes($row['description'])."', '{$row['date']}', 'files', '{$row['id']}', '{$row['files_id']}', '".time()."', ''),";
    $main->db->sql_query(mb_substr($insert, 0, mb_strlen($insert)-1));
}
?>