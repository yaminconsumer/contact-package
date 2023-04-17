<?php 
namespace SaiyedYamin\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    protected $table = 'contacts';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name','email','message']; 
    protected $guarded = array();

    
}
?>