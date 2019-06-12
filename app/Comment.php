<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
   /**
    * Get all of the models that own comments.
    */
    public function commentable()    {
        return $this->morphTo();
    }

    /**
    * Получить владельца полиморфного отношения от полиморфной модели,
    * получив доступ к имени метода, который вызывает morphTo()
   **/

   public function creator(): MorphTo {
    return $this->morphTo('creator');
}

}
