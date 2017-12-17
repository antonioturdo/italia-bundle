<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of PartitaIVAValidator
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class PartitaIVAValidator extends ConstraintValidator {

    public function validate($value, Constraint $constraint)
    {
        $validator = new \fdisotto\PartitaIVA($value, 'IT');    
        if (!$validator->isValid()) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
    
}
