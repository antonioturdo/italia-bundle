<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of CodiceFiscaleValidator
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CodiceFiscaleValidator extends ConstraintValidator 
{
    private $codiceFiscale;
    
    public function __construct(\AntonioTurdo\Bundle\ItaliaBundle\Service\CodiceFiscale $codiceFiscale) {
        $this->codiceFiscale = $codiceFiscale;
    }
    
    public function validate($value, Constraint $constraint)
    {  
        if (!$this->codiceFiscale->isFormallyValid($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
