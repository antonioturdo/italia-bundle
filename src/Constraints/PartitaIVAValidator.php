<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of PartitaIVAValidator
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class PartitaIVAValidator extends ConstraintValidator 
{
    
    private $partitaIVA;
    
    public function __construct(\AntonioTurdo\Bundle\ItaliaBundle\Service\PartitaIVA $partitaIVA) {
        $this->partitaIVA = $partitaIVA;
    }    

    public function validate($value, Constraint $constraint)
    {
        if (is_null($value)) {
            return;
        }

        $error = false;
        switch ($constraint->method) {
            case 'existence': 
                if (!$this->partitaIVA->exists($value)) {
                    $message = is_null($constraint->message) ? $constraint->messageExistence : $constraint->message;
                    $error = true;
                }
                break;
            case 'formal':
                if (!$this->partitaIVA->isFormallyValid($value)) {
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
