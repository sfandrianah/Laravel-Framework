<?php

namespace App\Util;

use App\ConstantValues\IApplicationConstant;

class CodeGenerator{

	/**
	 * { Create a random string }
	 *
	 * @param      integer  $length  The length
	 * @param      $existingCode
	 * @return     string   ( description_of_the_return_value )
	 */
	public function generate($length = 6, $existingCode) {
		$result = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$result .= $characters[$rand];
		}
		if($existingCode != null){
			if (strlen($result) == 0 || is_null($result) || empty($result)){
				$this->generate(6, $existingCode);
			}else {
				foreach ($existingCode as $key => $value) {
					if ($value[IApplicationConstant::CODE] == $result ){
						$this->generate(6, $existingCode);
						break;
					}
				}
			}
		}
		return $result;
	}

}