<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Description of CodiceFiscale
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 * 
 * @Annotation
 */
class CodiceFiscale extends Constraint {
    
    public $message = 'The string "{{ string }}" is not a valid italian "Codice fiscale".';
}
