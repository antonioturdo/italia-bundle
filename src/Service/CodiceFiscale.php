<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Service;

/**
 * Description of CodiceFiscale
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CodiceFiscale 
{
    
    public function isFormallyValid($codiceFiscale, $century = null) {
        $options = array();
        
        if (!is_null($century)) {
            $options['century'] = $century;
        }
        
        $validator = new \CodiceFiscale\Validator($codiceFiscale, $options);
        
        return $validator->isFormallyValid();
    }
    
    public function inverseCalculate($codiceFiscale, $century = null) {
        $options = array();
        
        if (!is_null($century)) {
            $options['century'] = $century;
        }

        $inverseCalculator = new CodiceFiscale\InverseCalculator($codiceFiscale, $options);
        return $inverseCalculator->getSubject();
    }
}
