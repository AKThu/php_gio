<?php

/* require / require_once / include / include_once */

// 'include' invoke WARNINIG if it can't be resolved
// 'require' invoke ERROR if it can't be resolved

// 'require' and 'include' will include each time when it is called
// 'require_once' and 'include_once' will include only if it's not included already


require 'file1.php';
require_once 'file1.php';

require_once 'file2.php';
require 'file2.php';
