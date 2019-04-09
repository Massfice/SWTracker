<?php

	require_once dirname(__DIR__, 1).'/Interfaces/DataBaseConnection.interface.php';
	
	class Tracker implements DataBaseConnection {
		
		private $source;
		private $matches;
		private $url;
		private $info;
		
		//Konstruktor
		function __construct($url) {
			
			$this->url = $url;
			
		}
		//--------
		
		//Pobieranie źródła strony
		function getSource() {
			$source = file_get_contents($this->url);
			$source =  trim(preg_replace('/[\s]+/m','',$source));
			$source = preg_replace('/(&amp;sid=[a-zA-Z0-9]+)/m','',$source);
			
			$this->source = $source;
			
		}
		//--------
		
		//Wyciąganie nagłówka z autorem ze źródła strony
		private function getAuthorHeaders() {
		
			$re = '/<pclass="author"><ahref="\.\/viewtopic\.php\?p=[0-9]+#p[0-9]+"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">[a-zA-Zū\'ō]+<\/a><\/strong>/m';
		
			preg_match_all($re, $this->source, $this->matches, PREG_SET_ORDER, 0);
		
		}
		//--------
		
		//Wyciąganie autorów i linków
		private function extractAuthor($m,&$author) {
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
		
		private function extractLink($m,&$link) {
			$link = $m;
			$link = preg_replace('/<pclass="author"><ahref="\./m','',$link);
			$link = preg_replace('/"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">[a-zA-Zū\'ō]+<\/a><\/strong>/m','',$link);
			$link = 'http://shinobi-war.xaa.pl'.$link;
		}
		//--------
		
		//Wyciąganie pełnej informacji
		private function extractInfos() {
			foreach ($this->matches as $m) {
				$this->extractAuthor($m[0],$author);
				$this->extractLink($m[0],$link);
				$this->info[] = array(
					'author' => $author,
					'link' => $link
				);
			}
		}
		//--------
		
		//Wyciąganie linka do następnej strony (jeśli istnieje)
		private function getNextPageURL() {
		
			$buff = $this->source;
		
			$buff = preg_replace('/amp;/m','',$buff);
		
			$re = '/<ahref="\.\/viewtopic\.php\?f=[0-9]+&t=[0-9]+&start=[0-9]+"class="right-boxright">Następnastrona<\/a>/m';

			preg_match_all($re, $buff, $matches, PREG_SET_ORDER, 0);
		
			if(count($matches) > 0) {
				$this->extractNextPageURL($matches[0][0]);
			} else {
				$this->url = '';
			}
		}
		
		private function extractNextPageURL($m) {
			$this->url = $m;
			$this->url = preg_replace('/^<ahref="\./m','',$url);
			$this->url = preg_replace('/"class="right-boxright">Następnastrona<\/a>/m','',$url);
			$this->url = 'http://shinobi-war.xaa.pl'.$url;	
		}
		//--------
		
		//Wyciąganie wszystkiego
		public function extractAll() {
		
			do {
				
				$this->getSource();
				
				$this->getAuthorHeaders();
	
				$this->extractInfos();
			
				$this->getNextPageURL();
			
			} while($this->url != '');	
		}
		//--------
		
		//Zwracanie informacji
		public function getInfo(&$info) {
			$info = $this->info;
		}
		//--------
		
		//Zapisywanie informacji do bazy danych
		public function execute() {
			
		}
		//--------
		
	}

?>