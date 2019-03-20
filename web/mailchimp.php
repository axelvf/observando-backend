<?php

$mailchimp_campaign='http://us14.campaign-archive2.com/home/?u=d914367325f70121f44ffcafb&id=1d2d0d3d76';
$posts_limit='10';

#error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

include_once('dom_parser.php');
$html = file_get_html($mailchimp_campaign);
$i = 1;
foreach ($html->find('li') as $element) {
    $text = explode("-", $element->plaintext);
    $date = trim(str_replace('-', '', $text[0]));
    $title = $text[1];
    foreach ($element->find('a') as $a) {
        $link = $a->href;
    }
    $data[] = array("date" => "$date", "title" => "$title", "link" => "$link");
    if (++$i > $posts_limit)
        break;
}
echo json_encode($data);
?>
