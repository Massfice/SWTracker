<?php
	
	class Tracker implements Validation {
		
		private $source;
		private $matches;
		
		private $from;
		private $to;
		private $nicksArr;
		
		private $info;
		private $error;
		
		//Wzorzec
		private const regParts = array(
			0 => '/',
			1 => '<pclass="author"><ahref="\.',
			2 => '\/viewtopic\.php\?p=[0-9]+#p[0-9]+',
			3 => '"><imgsrc="\.\/styles\/WoWWarlords\/imageset\/icon_post_target(_unread)?\.gif"width="11"height="9"alt="(Post|Nieprzeczytanypost)"title="(Post|Nieprzeczytanypost)"\/><\/a>przez<strong><ahref="\.\/memberlist\.php\?mode=viewprofile&amp;u=[0-9]+"style="color:#[[:xdigit:]]+;"class="username-coloured">',
			4 => '[a-zA-Zū\'ō]+',
			5 => '<\/a><\/strong>',
			6 => '/m');
		//--------
		
		private $mq;
		
		//Konstruktor
		public function __construct($from,$to,$nicks) {
			
			$this->from = $from;
			$this->to = $to;
			$this->nicksArr = explode(',',$nicks);
			
			$this->info = array();
			$this->error = array(self::vError);
			
			include MQ;
			
		}
		//--------
		
		//Pobieranie źródła strony
		private function getSource() {
			
			$this->source = $this->getSourceOnce($this->from);
			
		}
		
		private function getSourceOnce($url) {
			$source = file_get_contents($url);
			$source =  trim(preg_replace('/[\s]+/m','',$source));
			$source = preg_replace('/(&amp;sid=[a-zA-Z0-9]+)/m','',$source);
			
			return $source;
			
		}
		
		//--------
		
		//Wyciąganie nagłówka z autorem ze źródła strony
		private function getAuthorHeaders() {
		
			$re = self::regParts[0].self::regParts[1].self::regParts[2].self::regParts[3].self::regParts[4].self::regParts[5].self::regParts[6];
			preg_match_all($re, $this->source, $this->matches, PREG_SET_ORDER, 0);
		
		}
		//--------
		
		//Wyciąganie autorów i linków
		private function extractAuthor($m,&$author) {
			$buff = $m;
			
			$buff = preg_replace(self::regParts[0].self::regParts[1].self::regParts[2].self::regParts[3].self::regParts[6],'',$buff);
			$buff = preg_replace(self::regParts[0].self::regParts[5].self::regParts[6],'',$buff);
		
			$author = '';
			for($i = 0; $i < strlen($buff); $i++) {
				if(preg_match('/^[A-Z]$/m',$buff{$i})) $author = $author.' ';
				$author = $author.$buff{$i};
			}
		
			$author = trim($author);
		
		
		}
		
		private function extractLink($m,&$link) {
			$link = $m;
			$link = preg_replace(self::regParts[0].self::regParts[1].self::regParts[6],'',$link);
			$link = preg_replace(self::regParts[0].self::regParts[3].self::regParts[4].self::regParts[5].self::regParts[6],'',$link);
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
		private function getNextPageURL($source,&$url) {
		
			$buff = $source;
		
			$buff = preg_replace('/amp;/m','',$buff);
		
			$re = '/<ahref="\.\/viewtopic\.php\?f=[0-9]+&t=[0-9]+&start=[0-9]+"class="right-boxright">Następnastrona<\/a>/m';

			preg_match_all($re, $buff, $matches, PREG_SET_ORDER, 0);
		
			if(count($matches) > 0) {
				$this->extractNextPageURL($matches[0][0],$url);
			} else {
				$url = '';
			}
		}
		
		private function extractNextPageURL($m,&$url) {
			$url = $m;
			$url = preg_replace('/^<ahref="\./m','',$url);
			$url = preg_replace('/"class="right-boxright">Następnastrona<\/a>/m','',$url);
			$url = 'http://shinobi-war.xaa.pl'.$url;	
		}
		//--------
		
		//Selektywność wyboru
		private function isNickIn($nick) {
			$b = FALSE;
		
			foreach($this->nicksArr as $na) {
				if($nick == $na) {
					$b = TRUE;
					break;
				}
			}
		
			return $b;
		}
		
		private function selectValid() {
			
			$b = FALSE;
			
			$buff = '';
			
			$buffInfo = array();
			
			foreach($this->info as $i) {
			
				if($this->from == $i['link']) {
					$b = TRUE;
					if($this->isNickIn($i['author'])) $buffInfo[] = $i;
					$buff = $i['link'];
				}
			
				if($this->to == $i['link']) {
					if($buff != $i['link'] && $this->isNickIn($i['author'])) $buffInfo[] = $i;
					$b = FALSE;
				}
			
				if($b && $this->to != $i['link']) {
					if($buff != $i['link'] && $this->isNickIn($i['author'])) $buffInfo[] = $i;
				}
			}
			
			$this->info = $buffInfo;
		}
		//--------
		
		//Walidacja danych
		private function shortLink(&$url) {
			$url = str_replace('http://shinobi-war.xaa.pl','',$url);
			$url = str_replace('.','\.',$url);
			$url = str_replace('?','\?',$url);
			$url = str_replace('/','\/',$url);
		}
		
		private function checkPostOrder() {
			
			$from = $this->from;
			$to = $this->to;
			
			$url = $from;
			
			$this->shortLink($from);
			$this->shortLink($to);
			
			$re1 = self::regParts[0].self::regParts[1];
			$re2 = self::regParts[3].self::regParts[4].self::regParts[5].self::regParts[6];
			
			$cf = FALSE;
			$ct = FALSE;
			do {
				
				$source = $this->getSourceOnce($url);
				
				preg_match($re1.$from.$re2,$source,$f,PREG_OFFSET_CAPTURE);
				preg_match($re1.$to.$re2,$source,$t,PREG_OFFSET_CAPTURE);
				
				
				if(count($f) != 0 && count($t) != 0) {
					if($f[0][1] <= $t[0][1]) {
						$cf = TRUE;
						$ct = TRUE;
					}						
				}
				else if(count($f) != 0) {
					$cf = TRUE;
				} else if($cf && count($t) != 0) {
					$ct = TRUE;
				}
				$this->getNextPageURL($source,$url);
			
			} while($url != '');
				
			return ($cf && $ct);	
		}
		
		private function checkNonEmpty() {
			return ($this->from != '') && ($this->to != '');
		}
		
		private function checkLinkMatchPattern($url) {
			$re = '/^http:\/\/shinobi-war\.xaa\.pl\/viewtopic\.php\?p=[0-9]+#p[0-9]+$/m';
			
			return preg_match($re, $url, $matches, PREG_OFFSET_CAPTURE, 0);
		}
		
		
		
		public function validate() {
			
			$b = FALSE;
			
			$this->error = array();
			
			if($this->checkNonEmpty()) {
				
				$x = TRUE;
				
				if(!$this->checkLinkMatchPattern($this->from)) {
					$this->error[] = 'Nieprawidlowy link w polu [OD]';
					$x = FALSE;
				}
				
				if(!$this->checkLinkMatchPattern($this->to)) {
					$this->error[] = 'Nieprawidlowy link w polu [DO]';
					$x = FALSE;
				}
				
				if($x) {
					
					if($this->checkPostOrder()) {
						$b = TRUE;
					} else {
						$this->error[] = 'Zla kolejnosc linkow lub linki znajduja sie w dwoch roznych tematach';
					}
					
				}
				
			} else {
				$this->error[] = 'Wypelnij wszystkie pola';
			}
			
			return $b;
		}
		//--------
		
		//Wyciąganie wszystkiego
		public function extractAll() {
			
			if(empty($this->error)) {
				
				$url = $this->from;
				
				do {
					$this->getSource();
				
					$this->getAuthorHeaders();
	
					$this->extractInfos();
			
					$this->getNextPageURL($this->source,$this->from);
			
				} while($this->from != '');
				
				$this->from = $url;
			
				$this->selectValid();
			}
		}
		//--------
		
		//Zwracanie informacji
		public function getInfo(&$info) {
			$info = $this->info;
		}
		
		public function getErr(&$error) {
			$error = $this->error;
		}
		//--------
		
	}

?>