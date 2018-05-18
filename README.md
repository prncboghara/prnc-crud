# prnc-crud
Learing laravel package install
<h1> How To Install simple Package in laravel</h1>
<ol>
<li>Fire command on your terminal "composer require prnc/crud"</li>
<liThis Package Is Store in Your vendor directory</li>
<li>Than put this code in your composer psr-4 in autoload section "prnc\\crud\\":"vendor/prnc/crud/src"</li>
<li>Than Fire This Command on Your Terminal composer dump-autoload</li>
<li>Than put this code in your config/App.php file "prnc\crud\CrudeServiceProvider::class,"</li>
<li>Than Fire Migrate Command For Migration</li>
<li>Than Start Laravel server and url type "crud/form"</li>
<li>Than You Make Simple Insert Update </li>
Thank You
