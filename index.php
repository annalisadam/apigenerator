<?php

require_once('model/Portfolio.class.php');
require_once('model/FakePortfolio.class.php');

/**
 * Here I'm creating a new Portfolio object and then
 * calling the "fakeIt" function of that particular Portfolio instance.
 * 
 */
$portfolio1 = new FakePortfolio();

//print the resulting Portfolio object, I'm wraping the result in a <pre>
//tag because the <pre> tag respects the identation on HMTL
echo '<pre>';
print_r($portfolio1);
echo '</pre>';