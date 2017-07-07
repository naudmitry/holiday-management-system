<?php

namespace App\Enums;

abstract class StatusEnum extends BasicEnum
{
    const AWAITING = 'awaiting';
    const REJECTED = 'rejected';
    const APPROVED = 'approved';
}

