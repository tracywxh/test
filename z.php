<?php

$str = " Re:RE:rE：Re：答复:您好";
//echo ltriiiistr);exit;
$s = preg_replace('/^(答复(:|：)|re(：|:))+/i', '', ltrim($str)); 

echo $s;
