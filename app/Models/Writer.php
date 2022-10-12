<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    private static $writers = [
        [
            'id' => 1,
            'name' => 'Aquila',
            'contact' => '00088',
            'image' => 'image1.webp'
        ],
        [
            'id' => 2,
            'name' => 'Randy',
            'contact' => '00077',
            'image' => 'image2.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Putri',
            'contact' => '00099',
            'image' => 'image1.webp'
        ],

        ];

        public static function index (){
            return collect(self::$writers);
        }
        public static function showWriter($id){
            return self::index()->firstWhere('id', $id);
            // foreach (self::$writers as $writer){
            //     if($writer['id'] == $id){
            //         return $writer;
            //     }
            // }
        }
        }

//     [
//         'Writers' => ['Aquila', 'Tegar', 'Rudi', 'Budi', 'Medi', 'Lila'], 
//         'contact' => ['00088', '00077'], 
//         'image' => ['image1.webp', 'ima
//         ge2.jpg']];
// };

