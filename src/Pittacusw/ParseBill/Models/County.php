<?php

namespace Pittacusw\ParseBill\Models;

use Illuminate\Database\Eloquent\Model;
use Pittacusw\Core\Traits\RememberTrait;

class County extends Model {

  use RememberTrait;

  public function sii_branch() {
    return $this->belongsTo(SiiBranch::class);
  }
}
