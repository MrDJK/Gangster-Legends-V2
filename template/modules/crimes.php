<?php

    class crimesTemplate extends template {
    
        public $loginPage = false; // Ture means you can access this page without being logged in
        public $jailPage = false; // True means you can view this page in prison
        
        public $crimeHolder = '<div class="crime-holder">
            <p>{var1} ({var2}) <span class="commit"><a href="?page=crimes&action=commit&crime={var4}">Commit</a></span></p>
            <div class="crime-perc">
                <div class="perc" style="width:{var3}%;"></div>
            </div>
        </div>';
        
    }

?>