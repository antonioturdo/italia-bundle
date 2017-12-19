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
    
    public $message = null;
    public $messageFormal = 'This value is not a formally valid italian Partita IVA.';
    public $messageExistence = 'This value is not a currently existent italian Partita IVA.';
    public $method = 'formal'; // or 'existence'
    
    public function __construct($options = null) {
        parent::__construct($options);
        
        $methodsAvailable = array('formal', 'existence');
        
        if (!in_array($this->method, $methodsAvailable)) {
            throw new \Symfony\Component\Validator\Exception\ValidatorException(
                sprintf('The "method" option value for constraint PartitaIVA must be one of "%s"', implode('", "', $methodsAvailable))
            );
        }
    }
}
