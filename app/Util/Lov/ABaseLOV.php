<?php
/**
 * @package App\Http\Controllers\Lov
 * @since 4/19/2016 - 5:43 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\util\Lov;

abstract class ABaseLOV implements ILOV
{
    public function generateLOV()
    {
        $data = $this->populateData();
        $result = collect();
        $result->prepend(null, null);        
        foreach ($data as $item)
        {                        
            $result[$item->id] = $item->name;
        }        
        return $result;
    }

    public function getValue($p_Key)
    {
        $data = $this->generateLOV();
        return $data->get($p_Key);
    }

    public function getKey($p_Value)
    {        
        $data = collect($this->generateLOV());        
        $filtered = $data->filter(function ($p_Value) {
            return $item = $p_Value;
        });                
        //$filtered = array_search($p_Value, $data->toArray());
        //print_r($filtered);
        return $filtered->all();  
    }


}