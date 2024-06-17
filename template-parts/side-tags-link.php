<?php
$tags = get_tags();
$max_count = 0;
$min_count = 999;
$counts = array();
$font_size = array();
$invisible_tags = [434,435];
if(!empty($tags)) {
	foreach($tags as $tag) {
		if($tag->count > $max_count) {
			$max_count = $tag->count;
		}
		if($tag->count < $min_count) {
			$min_count = $tag->count;
		}
		if(array_search($tag->count, $counts) === false) {
			$counts[] = $tag->count;
		}
	}
	sort($counts);
	$a = (1.25 / count($counts));

	foreach($counts as $_k => $_v) {
		$font_size[$_v] = 0.625 + ($a * $_k);
	}
}
?>
<div class="tagcloud">
	<?php
	$tcnt = 0;
	if(!empty($tags)) {
		foreach($tags as $tag) {
			if($tag->count > 1 && !in_array($tag->term_id, (array)$invisivle_tags,true))  {
				$tcnt++;
				echo ' <a href="/blog/#tg:' . $tag->slug . '" class="-js-tag-cloud tag-cloud-link tag-link-' . $tag->term_id . ' tag-link-position-' . $tcnt . '" style="font-size: ' . $font_size[$tag->count] . 'em;" aria-label="' . $tag->name . '" data-target="' . $tag->slug . '">' . $tag->name . '</a>';
			}
		}
	}
	?>
</div>
