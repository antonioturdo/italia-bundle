<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Service;

/**
 * Description of CAP
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CAP 
{
    
    /**
     * Return TRUE if the provided cap is formally valid, FALSE otherwise 
     * 
     * @param string $cap
     * @return bool
     */
    public function isFormallyValid(string $cap) {
        return (bool) preg_match("/^\d{5}$/", $cap);
    }
}
