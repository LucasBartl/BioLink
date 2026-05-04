<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    /* 
        Informando ao model que existe uma relação com User
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /* metodo privado que define se é down ou up */
    private function move($to)
    {

        $order = $this->sort;
        $newOrder = $order + $to;

        $swapWith = $this->user->links()->where('sort', '=', $newOrder)->first();

        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();
    }

    public function moveDown()
    {
        $this->move(+1);
    }
    public function moveUp()
    {
        $this->move(-1);
    }
}
