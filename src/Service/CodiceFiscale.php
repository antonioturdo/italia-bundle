<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Service;

/**
 * Description of CodiceFiscale
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CodiceFiscale 
{
    
    /**
     * Return TRUE if the provided codice fiscale is formally valid, FALSE otherwise 
     * 
     * @param string $codiceFiscale
     * @param string $century
     * @return bool
     */
    public function isFormallyValid(string $codiceFiscale, $century = null)
    {
        $options = array();
        
        if (!is_null($century)) {
            $options['century'] = $century;
        }
        
        $validator = new \CodiceFiscale\Validator($codiceFiscale, $options);
        
        return $validator->isFormallyValid();
    }
    
    /**
     * Return an object containing data of the Subject with the provided codice fiscale
     * 
     * @param string $codiceFiscale
     * @param string $century
     * @return \CodiceFiscale\Subject
     */
    public function inverseCalculate(string $codiceFiscale, string $century = null) 
    {
        $options = array();
        
        if (!is_null($century)) {
            $options['century'] = $century;
        }

        $inverseCalculator = new \CodiceFiscale\InverseCalculator($codiceFiscale, $options);
        return $inverseCalculator->getSubject();
    }
}
