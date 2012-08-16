<form action="/" method="get">
    <fieldset>
<!--         <label for="search">Search in <?php //echo home_url( '/' ); ?></label> -->
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
    </fieldset>
</form>
		<span class="fb"><a href="https://www.facebook.com/pages/Georgetown-University-Asian-Studies/253291057490" title="Find us on Facebook."></a></span>
		<span class="tw"><a href="http://twitter.com/asianstudiesgu" title="Follow us on Twitter."></a></span>
		<span class="fr"><a href="http://flickr.com/" title="View our photos on Flickr."></a></span>
		<span class="vm"><a href="http://vimeo.com/" title="Watch our videos."></a></span>
		<span class="rs"><a href="<?php bloginfo( 'rss2_url' );?>" title="subscribe" ></a></span>
		<span class="iu"><a href="http://itunes.apple.com/us/itunes-u/asian-studies-program-east/id430923786" title="Subscribe to us on iTunes U."></a></span>
		<div class="clearfix"></div>