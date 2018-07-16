<?php
//////////////////////////////
// COPYRIGHT YEAR SHORTCODE //
//////////////////////////////
function copyrightYear(){
return date('Y');
}
add_shortcode('copyYear', 'copyrightYear');