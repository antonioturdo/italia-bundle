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

    public function validate($value, Constraint $constraint)
    {
        $error = false;
        switch ($constraint->method) {
            case 'existence':
                $validator = new \fdisotto\PartitaIVA($value, 'IT');    
                if (!$validator->isValid()) {
                    $message = is_null($constraint->message) ? $constraint->messageExistence : $constraint->message;
                    $error = true;
                }
                break;
            case 'formal':
                $validator = new \sorciulus\PartitaIva\PartitaIva();
                if (!$validator->setPartitaIva($value)->isValid()) {
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
