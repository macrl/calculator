<?php
// src/Service/Operation.php
namespace App\Service;
use App\Service\Helper;

class Operation implements Helper
{
    public function getRes($data)
    {
        $data=str_replace("##-#","#-",$data);
        $data=explode("#",$data);

        if(in_array("Infinity",$data))
            return "Infinity";

        $size=count($data);
        $som=0;

        $size2=$size-1;
        for($i=1;$i<$size2;$i++)
        {
            if($data[$i]=="*")
            {
                if($data[$i-1]=="Infinity"||$data[$i+1]=="Infinity")
                    return "Infinity";
                $s=doubleval($data[$i-1])*doubleval($data[$i+1]);
                $data[$i-1]=0;
                $data[$i+1]=$s;
            }
            elseif($data[$i]=="/")
            {
                $num=doubleval($data[$i-1]);
                $denom=doubleval($data[$i+1]);
                if($num!=0&&$denom==0||$data[$i-1]=="Infinity"&&$denom>=0)
                    return "Infinity";
                elseif($num==0&&$denom==0)
                    return "Error";
                $s=$num/$denom;
                $data[$i-1]=0;
                $data[$i+1]=$s;
            }
            elseif($data[$i]=="-")
            {
                $data[$i]="+";
                $data[$i+1]=doubleval($data[$i+1])*-1;
            }
        }
        for($i=0;$i<$size;$i++)
        {
            if((strval($data[$i])!="+")&&(strval($data[$i])!="-")&&(strval($data[$i])!="*")&&(strval($data[$i])!="/"))
            {
                $som+=doubleval($data[$i]);
            }
            
        }
        return $som;
    }
}
