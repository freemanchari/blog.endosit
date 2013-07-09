<div class="widget sideads">
<h3 class="widget-title">Sponsors</h3>
<div class="widgetinner">
<ul>
<?
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<li>
    <? 
	if ($wpc_short_ad1) { ?>
    
    	<a href="<? echo stripslashes($wpc_short_link1); ?>"><img src="<? echo stripslashes($wpc_short_ad1); ?>" alt="ad1" /></a>
        
    <?
	} else { ?>
    
    	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/shortaddefault.gif" alt="ad1" /></a>
        
    <? } ?>
</li>
<li>
	 <? 
	if ($wpc_short_ad2) { ?>
    
    	<a href="<? echo stripslashes($wpc_short_link2); ?>"><img src="<? echo stripslashes($wpc_short_ad2); ?>" alt="ad2" /></a>
        
    <?
	} else { ?>
    
    	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/shortaddefault.gif" alt="ad2" /></a>
        
    <? } ?>
</li>
<li>	
	 <? 
	if ($wpc_short_ad3) { ?>
    
    	<a href="<? echo stripslashes($wpc_short_link3); ?>"><img src="<? echo stripslashes($wpc_short_ad3); ?>" alt="ad3" /></a>
        
    <?
	} else { ?>
    
    	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/shortaddefault.gif" alt="ad3" /></a>
        
    <? } ?>
</li>
<li>
	 <? 
	if ($wpc_short_ad4) { ?>
    
    	<a href="<? echo stripslashes($wpc_short_link4); ?>"><img src="<? echo stripslashes($wpc_short_ad4); ?>" alt="ad4" /></a>
        
    <?
	} else { ?>
    
    	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/shortaddefault.gif" alt="ad4" /></a>
        
    <? } ?>
</li>
	</ul>
	</div>
	</div>
<div class="clearleft"></div>