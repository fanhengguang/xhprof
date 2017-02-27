<?php

xhprof_enable();

$xhprofData = xhprof_disable();

var_dump($xhprofData);
