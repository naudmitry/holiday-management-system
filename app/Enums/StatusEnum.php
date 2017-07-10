<?php

namespace App\Enums;

abstract class StatusEnum extends AbstractEnum
{
    const AWAITING = 'awaiting';
    const REJECTED = 'rejected';
    const APPROVED = 'approved';
}

