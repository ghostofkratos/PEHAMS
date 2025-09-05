<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Laravelista\Comments\Commentable;

class Hostel extends Model
{
    use HasFactory, Commentable;

    protected $fillable = [
        'name',
        'location',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'coordinates',
        'contact',
        'gender',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function deleteImg1(){
        Storage::delete($this->img1);
    }

    public function deleteImg2(){
        Storage::delete($this->img2);
    }

    public function deleteImg3(){
        Storage::delete($this->img3);
    }

    public function deleteImg4(){
        Storage::delete($this->img4);
    }

    public function deleteImg5(){
        Storage::delete($this->img5);
    }

}
