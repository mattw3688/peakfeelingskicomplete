<div class="page-wrapper" id="resort_info-page">
<?php
get_header();

echo 'helloooooo';
$name = get_field('resort_name');
$logisticsimage = get_field('resort_logistics_info');
$logisticspicture = $logisticsimage['sizes']['large'];
$skisimage = get_field('resort_logistics_info');
$skipicture = $skisimage['sizes']['large'];
$topimages = get_field('top_gallery');
$bottomimages= get_field('bottom_gallery');


    echo $name;

get_footer()


?>

</div>
