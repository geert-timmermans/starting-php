<?php
$web_development = array(
    'frontend' => array(
    ),
    'backend' => array(
    ),
);

echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Add xhtml</h4>';
$web_development['frontend'][] = 'xhtml';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Add Ruby on Rails</h4>';
$web_development['backend'][] = 'ruby on rails';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Add CSS</h4>';
$web_development['frontend'][] = 'css';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Add Flash</h4>';
$web_development['backend'][] = 'flash';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Add JavaScript</h4>';
$web_development['frontend'][] = 'javascript';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>Replace xhtml with html</h4>';
$web_development['frontend'][0] = 'html';
echo '<pre>',print_r($web_development, true),'</pre>';

echo '<h4>remove Flash</h4>';
unset($web_development['backend'][1]);
echo '<pre>',print_r($web_development, true),'</pre>';

?>