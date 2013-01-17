<?php

// STRING FUNCS
function link_maybe($text,$url) {
  if ($url) {
    return "<a href='".$url."'>".$text."</a>";
  } else {
    return $text;
  }
}

// DB FUNCTIONS
function defaultdb() {
  try {
    return new PDO("sqlite:db/courses.db");
  }
  catch(PDOException $e) {
    die($e->getMessage());
  }
}

function selectall($db,$sql) {
  $ok = $db->query($sql);
  if (! $ok) { die("Unable to execute query."); }
  return $ok->fetchAll();
}

// FUNCTION FOR RETRIEVING CLASSES
function get_classes($db) {
  $query = "SELECT id,nav,name,link FROM courses WHERE inactive IS NULL";
  $res = selectall($db,$query);
  // populate classes array
  $classes = array();
  // use name as nav if nav not available
  foreach ($res as $r) {
    if (! $r["nav"]) {
      $r["nav"]=$r["name"];
    }
    if (! $r["link"]) {
      $r["link"]="class.php?class=".$r["id"];
    }
    $classes[$r["id"]] = array("id"=>$r["id"],"nav"=>$r["nav"],"name"=>$r["name"],"link"=>$r["link"]);
  }
  return $classes;
}


// FUNCTION FOR GETTING LESSON ENTRIES
$duequery = <<<EOT
SELECT * FROM
  (SELECT
   date('now','+1 day') as "candidate"
   UNION SELECT date('now','+2 day')
   UNION SELECT date('now','+3 day')
   UNION SELECT date('now','+4 day')
   UNION SELECT date('now','+5 day')
   UNION SELECT date('now','+6 day')
   UNION SELECT date('now','+7 day')
   UNION SELECT date('now','+8 day')
   UNION SELECT date('now','+9 day')
   UNION SELECT date('now','+10 day')
   UNION SELECT date('now','+11 day')
   EXCEPT SELECT date FROM holidays)
WHERE
  strftime("%w",candidate)!=0
  AND strftime("%w",candidate)!=6
LIMIT 1;
EOT;
function get_lesson_entries($db,$cid) {
  global $duequery;
  // update the due dates for anything which has an auto due set
  $result = selectall($db,$duequery);
  if ($result) {
    $duedate = $result[0][0];
  }
  if (! $duedate) { $duedate = ""; }

  $sql = "UPDATE lessons SET due='".$duedate."' WHERE due=1";
  $result = selectall($db,$sql);
  
  // select all the entries with a due date
  $sql = "SELECT standards,standards_link,topic,topic_link,homework,homework_link,due,due_link FROM lessons WHERE due IS NOT null AND course_id=$cid";
  $entries_raw = selectall($db,$sql);

  // format the entries for display
  $all_entries = new ArrayObject();
  if ($entries_raw) {
    foreach ($entries_raw as $e) {
      //we divide the count by 4 because selectall returns two
      // entries per field: one indexed with the position (1, 2, etc),
      // one indexed with the name (topic, topic_link, etc)
      for ($i=0;$i<(count($e)/4);$i++){
        $entries[$i] = link_maybe($e[2*$i],$e[2*$i+1]);
      }
      $all_entries->append($entries);
      unset($entries);
    }
  }

  if (count($all_entries)>0) {
    return $all_entries;
  } else {
    return null;
  }
}


// FUNCTION FOR GETTING ANNOUNCEMENTS
function get_announcements($db,$cid) {
  $query = "SELECT announcement,announcement_link FROM announcements WHERE course_id=$cid AND date() BETWEEN date AND expires ORDER BY date";  // unsafe to include cid like that?
  $ann_raw = selectall($db,$query);
  $ann_all = new ArrayObject();
  if ($ann_raw) {
    foreach ($ann_raw as $a) {
      $ann_all->append(link_maybe($a["announcement"],$a["announcement_link"]));
    }
  }
  return $ann_all;
}

