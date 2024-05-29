<?php

namespace App;

enum ReservationStatusEnum:string
{
    case Pending = 'pending';
    case Confirmed = 'confirmed';
    case Canceled = 'canceled';
    case Rejected = 'rejected';
    case Finished = 'finished';
}
