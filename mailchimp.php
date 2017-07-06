<?
#error_reporting(E_ALL);
include_once('dom_parser.php');
$html = file_get_html('http://us14.campaign-archive2.com/home/?u=d914367325f70121f44ffcafb&id=1d2d0d3d76');
echo '{"newsletter":[';
$i = 0;
foreach ($html->find('li') as $element) {
    $text = $element->find('text');
    $date = trim(str_replace('-', '', $text[0]));
    $title = $text[1];
    foreach ($element->find('a') as $a) {
        $link = $a->href;
    }
    echo '{ "date":"'.$date.'", "title":"'.$title.'", "link":"'.$link.'" }';
    if (++$i > 9)
        break;
    echo ',';
}
echo ']}';
?>