<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of CodiceFiscaleValidator
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CodiceFiscaleValidator extends ConstraintValidator {

    public function validate($value, Constraint $constraint)
    {
        $validator = new \CodiceFiscale\Validator($value);       
        if (!$validator->isFormallyValid()) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
    
}
