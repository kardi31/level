<?php
declare(strict_types=1);

namespace Level\AppBundle\Model;

final class OperationTypes
{
    public const ADD = 'add';
    public const DIV = 'div';
    public const MUL = 'mul';
    public const SUB = 'sub';
    public const TYPES = [self::ADD, self::DIV, self::MUL, self::SUB];
}
