<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizzas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    public $timestamps = true;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

        
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(string $price)
    {
        $this->price = intval(doubleval($price)*100);

        return $this;
    }
        
    public function getDescripiton()
    {
        return $this->description;
    }

    public function setDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }
}
