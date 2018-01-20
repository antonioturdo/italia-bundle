<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Description of CAP
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 * 
 * @Annotation
 */
class CAP extends Constraint {
    
    public $message = null;
    public $messageFormal = 'This value is not a formally valid italian CAP.';
    public $method = 'formal';
    
    public function __construct($options = null) {
        parent::__construct($options);
    }
}
