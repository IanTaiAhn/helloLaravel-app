<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Alias distinctio qui consequuntur dicta pariatur possimus.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Alias distinctio qui consequuntur dicta pariatur possimus.'
            ]
        ];
    }

    // public static function find($id)
    // {
    //     // Use self to call on this model 
    //     $listings = self::all();

    //     foreach ($listings as $listing) {
    //         if ($listing['id'] == $id) {
    //             return $listing;
    //         } else {
    //             return 'listing not found';
    //         };
    //     }
    // }
}
