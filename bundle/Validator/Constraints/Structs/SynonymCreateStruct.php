<?php

declare(strict_types=1);

namespace Netgen\TagsBundle\Validator\Constraints\Structs;

use Symfony\Component\Validator\Constraint;

class SynonymCreateStruct extends Constraint
{
    public function validatedBy(): string
    {
        return 'eztags_synonym_create_struct';
    }
}
