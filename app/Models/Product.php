<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'price', 'description', 'active', 'photo'];

    protected $casts = [
        'active' => 'boolean',
        'description' => 'array',
        'created_at' => 'date:Y-m-d'
    ];

//    public function caregory(){
//        return $this->belongsTo(Category::class, 'category_id', 'id');
//    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getRouteKeyName()
    {
        return 'name';
    }

    public function getPagePhotoAttribute()
    {
        if (Storage::exists($this->attributes['photo'])) {
            return Storage::url($this->attributes['photo']);
        }
        return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAeFBMVEX///8AAADr6+vd3d3w8PA8PDwfHx8iIiIHBweVlZWwsLC0tLSjo6Ph4eFcXFzl5eVKSkr4+PjT09NhYWEQEBCfn582NjbV1dVubm6qqqovLy9VVVWQkJCFhYW8vLwaGhppaWnIyMh8fHyBgYEoKChNTU1DQ0N2dnbz2A4gAAAESElEQVR4nO3a63aiMBiFYULpwdqpRbEeqkXbjt7/HU4r+UISoI6KweV6n39kIkn2cEhCowgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJzRn5udP15xUhTfyPFAH6f11ZL2O5YMZ4vlcjFe+107u/hO7TwM3PJ+UaxksM/62OvgQhc/yeleCqvGBldFhb+Dxho76+m9EpvxGSL/RSxNr9zy/8yk52eij18bG3zVNW4aa3wbSHNaNj5oUCcymai1U35iJreNDd7q6/K3TN5VxVv6S/2WlZlsnFa7zKQmku8rL1woZSZqZpd3mMmwLhKlXo4Z3lGsTO5iq7y7TNK5dOjhbbn4fHuQw95xIzyclYlaWuXdZSKnVB/Fq2nwIQVx009aZmeiJmV5Z5mkmT5FeStLI4uDR3ccJ5PnsryzTOQB+2mVvRVF8wPHdiwnE/VuyjvLZFn8e173cAt087iZ3JoJY2eZbKqXSTTRZx0eOrrjuJkoM1/sLJPeapMrbwbZbSZm2dPh/CRN4mHfWeHIM+bX9UB7vEzUVpd3Orf36cbzA35yCslkI6Ho6/OSMpFGpv//k5NIJo+6r2pTlF9QJmYSN9lftxWSSX8tLT/uyi8nk6V0LNRlUl4n0Uja3i1ALyWTdCXd+gq2MC4zuZHGd8ueC8kkMc+5bM/GXIvKTMw+4m7cl5FJIrtyKgv0Hv5hZZLIIv1n2XMRmaQvEsldwEjsTKJH6cH7hWRidgnmISNxMkn1+vNnn8/PRJ7AITMxG277NvlbZmcSraUT40om8vj35ghnzUSuzeewnzLcTKKt7kUWH5iJbAC1mUmiz/USOBIvkzjX/fiQZZf0Z6qPvaWpTKge5XQtZqJvnSzU9NVwM4nGcqF8epnIFeR+BTKZ9OV0LWaiH/mrQ4d0Mi+TVJY9QjKRjN7dn8ubQaJqMxP9/xNqF7bkZRKtGzLxHxyaf0u1mUmvtsUA/EzKZY+byUwfL92fy9RbXpZtZrLwehZMJZNBfSZy/bj7OolfrdVn7Gwn6HRtp5JJuexxBmtWiM4XfrmjzMfc8+yzBVbNJM2VRTJJzWrMevPIxWN2LNvNJC0cPKZTVTNxP+ub+ZJZe6ieLktnpqhvTieZpElFMTidSTZpqmCM7+c/XsNO7KPaTKK/dZlYX/vzaW826318mYLy63tsiioeiibkZZ9XKmTeRpq+Mf2/oDq/ukzMs8POxLx2a5Rf/OPmSvql6k+ALCO3azqTgJtJMoiaTKz7xMpkcF8dRaH8enjFmSSZ6ae1/lo3DCW3HpfXm0lUPj3tNekwrxmImttrtCvOpNz0c9bp8ao6kK3zsf86MsnrMonWtZl8XypuKtnWW8jvz+S1uUJ9Jip4JlFc8GdGurj6Fx/J8Gm5XY1Go+nn06S62xM3S/dV8M6WNnUBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIDr8Q+xHTWQvplsSQAAAABJRU5ErkJggg==';
    }


}
