<?php

/**
 * @project pip-api.
 * @since 8/26/2016 5:55 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util;


use App\ConstantValues\IApplicationConstant;

class PIPCrypt
{
    private $HASH_MODE = 'sha256';

    public function encrypt($p_DataToEncrypt){
        $iv = mcrypt_create_iv(
            mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
            MCRYPT_DEV_URANDOM
        );

        $encrypted = base64_encode(
            $iv .
            mcrypt_encrypt(
                MCRYPT_RIJNDAEL_128,
                hash($this->HASH_MODE, IApplicationConstant::APPLICATION_CRYPT, true),
                $p_DataToEncrypt,
                MCRYPT_MODE_CBC,
                $iv
            )
        );
        return $encrypted;
    }

    public function decrypt($p_DataToDecrypt){
        $data = base64_decode($p_DataToDecrypt);
        $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
        $decrypted = rtrim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_128,
                hash($this->HASH_MODE, IApplicationConstant::APPLICATION_CRYPT, true),
                substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
                MCRYPT_MODE_CBC,
                $iv
            ),
            "\0"
        );
        return $decrypted;
    }
}