<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Description of PartitaIva
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 * 
 * @Annotation
 */
class PartitaIVA extends Constraint {
    
    public $message = 'This value is not a valid italian Partita IVA.';
}
