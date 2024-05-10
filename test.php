<?php

require 'crest.php';

$result = crest::call('crm.deal.add');
print_r($result);
