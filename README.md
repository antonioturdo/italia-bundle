# italia-bundle
A symfony bundle that helps development taking into account italian laws.

## Installation

Via [Composer](http://getcomposer.org/):

```
composer require antonioturdo/italia-bundle
```

## Constraints
Constraints made available by this bundle to check the value of properties or the return value of methods on your object:
- AntonioTurdo\Bundle\ItaliaBundle\Constraints\CodiceFiscale
- AntonioTurdo\Bundle\ItaliaBundle\Constraints\PartitaIVA (with a "method" option that can take two values: "formal" and "existence")
- AntonioTurdo\Bundle\ItaliaBundle\Constraints\CAP

## Services
- AntonioTurdo\Bundle\ItaliaBundle\Service\CodiceFiscale (formal validation and inverse calculation)
- AntonioTurdo\Bundle\ItaliaBundle\Service\PartitaIVA (formal validation and existence)
- AntonioTurdo\Bundle\ItaliaBundle\Service\CAP (formal validation)
