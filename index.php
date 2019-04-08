<?php

	function getSource(&$source,$url) {
		$source = file_get_contents($url);
		$source =  trim(preg_replace('/[\s]+/m','',$source));
		$source = preg_replace('/(&amp;sid=[a-zA-Z0-9]+)/m','',$source);
	}
	
	function getAuthorHeaders($source,&$matches) {
		
		$re = '/<pclass="author"><ahref="\.\/viewtopic\.php\?p=[0-9]+#p[0-9]+"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">[a-zA-Zū\'ō]+<\/a><\/strong>/m';
		
		preg_match_all($re, $source, $matches, PREG_SET_ORDER, 0);
		
	}
	
	function extractAuthor($m,&$author) {
		$buff = $m;
		$buff = preg_replace('/<pclass="author"><ahref="\.\/viewtopic\.php\?p=[0-9]+#p[0-9]+"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">/m','',$buff);
		$buff = preg_replace('/<\/a><\/strong>/m','',$buff);
		
		$author = '';
		for($i = 0; $i < strlen($buff); $i++) {
			if(preg_match('/^[A-Z]$/m',$buff{$i})) $author = $author.' ';
			$author = $author.$buff{$i};
		}
		
		$author = trim($author);
		
		
	}
	
	function extractLink($m,&$link) {
		$link = $m;
		$link = preg_replace('/<pclass="author"><ahref="\./m','',$link);
		$link = preg_replace('/"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">[a-zA-Zū\'ō]+<\/a><\/strong>/m','',$link);
		$link = 'http://shinobi-war.xaa.pl'.$link;
	}
	
	function extractInfos(&$info,$matches) {
		foreach ($matches as $m) {
			extractAuthor($m[0],$author);
			extractLink($m[0],$link);
			$info[] = array(
				'author' => $author,
				'link' => $link
			);
		}
	}
	
	function extractNextPageURL($m,&$url) {
		$url = $m;
		$url = preg_replace('/^<ahref="\./m','',$url);
		$url = preg_replace('/"class="right-boxright">Następnastrona<\/a>/m','',$url);
		$url = 'http://shinobi-war.xaa.pl'.$url;	
	}
	
	function getNextPageURL(&$url,$source) {
		
		$buff = $source;
		
		$buff = preg_replace('/amp;/m','',$buff);
		
		$re = '/<ahref="\.\/viewtopic\.php\?f=[0-9]+&t=[0-9]+&start=[0-9]+"class="right-boxright">Następnastrona<\/a>/m';

		preg_match_all($re, $buff, $matches, PREG_SET_ORDER, 0);
		
		if(count($matches) > 0) {
			extractNextPageURL($matches[0][0],$url);
		} else {
			$url = '';
		}
	}
	
	function extractAll(&$info,$url) {
		
		do {
			getSource($source,$url);
	
			getAuthorHeaders($source,$matches);
	
			extractInfos($info,$matches);
			
			getNextPageURL($url,$source);
			
		} while($url != '');	
	}
	
	function isNickIn($nicksArr,$nick) {
		$b = FALSE;
		
		foreach($nicksArr as $na) {
			if($nick == $na) {
				$b = TRUE;
				break;
			}
		}
		
		return $b;
	}
	
	$from = isset($_POST['from']) ? $_POST['from'] : '';
	
	$to = isset($_POST['to']) ? $_POST['to'] : '';
	
	$nicks = isset($_POST['nicks']) ? $_POST['nicks'] : '';
	
	$showInfo = array();
	
	if($from != '' && $to != '' && $nicks != '') {
		
		$url = $from;
		extractAll($info,$url);
		
		$b = FALSE;
		
		$nicksArr = explode(',',$nicks);
		
		foreach($info as $i) {
			
			if($from == $i['link']) {
				$b = TRUE;
				if(isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
				$buff = $i['link'];
			}
			
			if($to == $i['link']) {
				if($buff != $i['link'] && isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
				$b = FALSE;
			}
			
			if($b && $to != $i['link']) {
				if($buff != $i['link'] && isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
			}
		}
	}
	
	require '_private_/libs/Security/Checker.class.php';
	
	$checker = new Checker();
	
	$checker->execQuery();
	
	include '_private_/view.php';
	
?>