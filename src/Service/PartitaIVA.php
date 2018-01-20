<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Service;

/**
 * Description of PartitaIVA
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class PartitaIVA 
{
    
    /**
     * Return TRUE if the provided partita IVA is formally valid, FALSE otherwise 
     * 
     * @param string $partitaIVA
     * @return bool
     */    
    public function isFormallyValid($partitaIVA) 
    {
        $validator = new \sorciulus\PartitaIva\PartitaIva();
        return $validator->setPartitaIva($partitaIVA)->isValid();
    }
    
    /**
     * Return TRUE if the provided partita IVA exists, FALSE otherwise 
     * 
     * @param string $partitaIVA
     * @return bool
     */    
    public function exists($partitaIVA) 
    {
        $validator = new \fdisotto\PartitaIVA($partitaIVA, 'IT');    
        return $validator->isValid();        
    }
}
