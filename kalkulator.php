<?php  
class kalkulator  
{  
    public function modulus($n1, $n2)  
    {  
        return $n1 % $n2;  
    }  
  
    public function pangkat($n1, $n2)  
    {  
        return pow($n1,$n2);  
    } 

    public function akar($n1)  
    {  
        return sqrt($n1);  
    } 

    public function selisih($n1, $n2)  
    {  
        return abs($n1 - $n2);  
    } 
    
    public function pembulatan($n1)  
    {  
        return round($n1);  
    }

    public function fmin($n1, $n2, $n3)  
    {  
        return min($n1,$n2,$n3);  
    } 

    public function fmax($n1, $n2, $n3)  
    {  
        return max($n1,$n2,$n3);  
    }
    
    public function fsin($n1)  
    {  
        return sin($n1);  
    } 

    public function fcos($n1)  
    {  
        return cos($n1);  
    } 

    public function ftan($n1)  
    {  
        return tan($n1);  
    } 
}  
?>  