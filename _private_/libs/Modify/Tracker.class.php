<?php
	
	class Tracker implements DataBaseConnection,Validation {
		
		private $source;
		private $matches;
		private $url;
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
		function __construct($url) {
			
			$this->url = $url;
			
			$this->mq = new mysqli(
				DataBaseConnection::dbHost,
				DataBaseConnection::dbUser,
				DataBaseConnection::dbPasswd,
				DataBaseConnection::dbName);
			
		}
		//--------
		
		//Pobieranie źródła strony
		private function getSource() {
			
			$this->source = $this->getSourceOnce($this->url);
			
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
		private function isNickIn($nicksArr,$nick) {
			$b = FALSE;
		
			foreach($nicksArr as $na) {
				if($nick == $na) {
					$b = TRUE;
					break;
				}
			}
		
			return $b;
		}
		
		private function selectValid($from,$to,$nicks) {
			
			$b = FALSE;
			
			$nicksArr = explode(',',$nicks);
			
			$buff = '';
			
			$buffInfo = array();
			
			foreach($this->info as $i) {
			
				if($from == $i['link']) {
					$b = TRUE;
					if($this->isNickIn($nicksArr,$i['author'])) $buffInfo[] = $i;
					$buff = $i['link'];
				}
			
				if($to == $i['link']) {
					if($buff != $i['link'] && $this->isNickIn($nicksArr,$i['author'])) $buffInfo[] = $i;
					$b = FALSE;
				}
			
				if($b && $to != $i['link']) {
					if($buff != $i['link'] && $this->isNickIn($nicksArr,$i['author'])) $buffInfo[] = $i;
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
		
		private function checkPostOrder($from,$to) {
			
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
		
		private function checkNonEmpty($from,$to) {
			return ($from != '') && ($to != '');
		}
		
		private function checkLinkMatchPattern($url) {
			$re = '/^http:\/\/shinobi-war\.xaa\.pl\/viewtopic\.php\?p=[0-9]+#p[0-9]+$/m';
			
			return preg_match($re, $url, $matches, PREG_OFFSET_CAPTURE, 0);
		}
		
		
		
		public function validate($params) {
			
			$b = FALSE;
			
			$from = $params[0];
			$to = $params[1];
			
			if($this->checkNonEmpty($from,$to)) {
				
				$x = TRUE;
				
				if(!$this->checkLinkMatchPattern($from)) {
					$this->error[] = 'Nieprawidlowy link w polu [OD]';
					$x = FALSE;
				}
				
				if(!$this->checkLinkMatchPattern($to)) {
					$this->error[] = 'Nieprawidlowy link w polu [DO]';
					$x = FALSE;
				}
				
				if($x) {
					
					if($this->checkPostOrder($from,$to)) {
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
		public function extractAll($from,$to,$nicks) {
			if($this->validate(array($from,$to))) {
							
				do {
				
					$this->getSource();
				
					$this->getAuthorHeaders();
	
					$this->extractInfos();
			
					$this->getNextPageURL($this->source,$this->url);
			
				} while($this->url != '');
			
				$this->selectValid($from,$to,$nicks);
			}
		}
		//--------
		
		//Zwracanie informacji
		public function getInfo(&$info,&$error) {
			$info = $this->info;
			$error = $this->error;
		}
		//--------
		
		//Zapisywanie informacji do bazy danych
		public function execute() {
			
		}
		//--------
		
	}

?>