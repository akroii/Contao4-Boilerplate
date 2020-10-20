<?php

global $objPage;
echo substr($objPage->alias, strrpos($objPage->alias, '/') + 1);