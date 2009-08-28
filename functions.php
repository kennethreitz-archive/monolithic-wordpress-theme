<?php 

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'coreylib.php'); 

function fortune($len=120)
{
	$fortune = str_replace("\n", "", shell_exec("/usr/bin/fortune"));
	if (strlen($fortune) > $len) {
		return "Believe those who seek truth. Doubt those who find it.";
	}
	else {
		return $fortune;
	}
}

function favicon($url) {
	return sprintf("<a href='http://%s'><img src='http://www.google.com/s2/favicons?domain=%s'/></a>", $url, $url);
}

function getSidebar()
{
	$posts = 
	$sidebar='
	<div class="container-aside quiet">
		<h4 style="margin-bottom: .5em;" class="loud">Want another bite? Subscribe!</h4>
		<p><a href="http://feeds.feedburner.com/kennethreitz" target="_none">RSS</a>, <a href="http://feedburner.google.com/fb/a/mailverify?uri=kennethreitz&amp;loc=en_US" target="_none">Email</a>, <a href="http://friendfeed.com/kennethreitz" target="_none">FriendFeed</a>, <a href="http://twitter.com/kennethreitz" target="_none">Twitter</a>, <a href="http://www.facebook.com/pages/KennethReitzcom/144095770952?ref=ts" target="_none">Facebook</a>.<br/> If you see something that makes you shake with excitment or surge with rage, leave a comment and <a href="javascript:var%20e=document.createElement(\'script\');e.setAttribute(\'language\',\'javascript\');e.setAttribute(\'src\',\'http://bit.ly/bookmarklet/load.js\');document.body.appendChild(e);void(0);">send a link</a> to others!</p>
		
		<hr/>
		<h4 class="loud">About @KennethReitz</h4>
		<p>
		<strong>&hearts;?</strong> 
		Open Minds. Open Software. Open Design.<br/>
		<strong>Location?</strong> Winchester, Virginia. <br/>
		<strong>Field?</strong> Web Application Development <br/>
		<strong>What??</strong> I make websites.<br/>
		<strong>Language? </strong> Python. <em>Everything</em> else.<br/>
		<strong>Tools?</strong> MacBook + iPhone + Moleskine = 42.<br/>
		<strong>Anything Else?</strong> Life is wonderful.</p>
		<hr/>
		<h4>Latest Posts</h4>';
echo $sidebar;
echo wp_get_archives('format=custom&after=… &type=postbypost&limit=15&show_post_count=false');
echo '<hr/>';
echo '<p class="extra-quiet">';
echo fortune(3000);
echo '<p>';
echo '</div></div>';
}


function latestPosts() {
	
	
}
{
	# code...
}