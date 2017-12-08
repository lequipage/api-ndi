<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'events';
  protected $fillable = [
    'event_name',
    'event_address',
    'event_city',
    'event_cp',
    'event_date_start',
    'event_date_end',
    'list_users',
    'fk_id_user_owner'
  ];
}

?>
