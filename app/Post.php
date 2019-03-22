<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $fillable = ['title', 'body','slug','tags'];

    public function getImageAttribute(){
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $this->body, $image);
        return (!empty($image['src'])) ? $image['src'] : url('images/no-image.jpg');
    }

    public function getTextAttribute(){
        return substr(strip_tags($this->body),0,100).'...';
    }

    public function getPublishedDateAttribute(){
        $date = Carbon::parse($this->created_at, 'UTC');
        return $date->isoFormat('Do MMM YY');
    }
    
}
