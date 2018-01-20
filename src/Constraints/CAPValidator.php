<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of CAPValidator
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CAPValidator extends ConstraintValidator 
{
    private $cap;
    
    public function __construct(\AntonioTurdo\Bundle\ItaliaBundle\Service\CAP $cap) {
        $this->cap = $cap;
    }

    public function validate($value, Constraint $constraint)
    {
        $error = false;
        switch ($constraint->method) {
            case 'formal':
                if (!$this->cap->isFormallyValid($value)) {
                    $message = is_null($constraint->message) ? $constraint->messageFormal : $constraint->message;
                    $error = true;
                }
                break;
        }
        
        if ($error) {   
            $this->context->buildViolation($message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();            
        }
    }
    
}
