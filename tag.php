<?php
$search_tag = get_query_var('tag');
if(!empty($search_tag)) {
  header('Location: /blog/#tg:' . $search_tag);
} else {
  header('Location: /blog/');
}
