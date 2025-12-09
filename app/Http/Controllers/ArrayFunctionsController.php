<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayFunctionsController extends Controller
{
    /**
     * Display the array functions demonstration page
     */
    public function index()
    {
        // Sample data
        $arrayOfObjects = [
            [
                'id' => 1,
                'name' => 'John',
                'age' => '20',
            ],
            [
                'id' => 2,
                'name' => 'Jane',
                'age' => '21',
            ],
            [
                'id' => 3,
                'name' => 'Jack',
                'age' => '22',
            ],
        ];

        // Function 1: Sort by age descending
        $sortedByAge = $this->sortByAgeDescending($arrayOfObjects);

        // Function 2: Extract ages array
        $agesArray = $this->extractAges($arrayOfObjects);

        // Function 3: Convert to array of arrays using age as key
        $arrayOfArrays = $this->convertToArrayOfArrays($arrayOfObjects);

        return view('welcome', [
            'original' => $arrayOfObjects,
            'sortedByAge' => $sortedByAge,
            'agesArray' => $agesArray,
            'arrayOfArrays' => $arrayOfArrays,
        ]);
    }

    /**
     * Function 1: Sort the given $arrayOfObjects by age, descendingly
     */
    private function sortByAgeDescending(array $arrayOfObjects): array
    {
        usort($arrayOfObjects, function ($a, $b) {
            return (int)$b['age'] - (int)$a['age'];
        });

        return $arrayOfObjects;
    }

    /**
     * Function 2: Returns array of just the ages such as [20, 21, 22]
     */
    private function extractAges(array $arrayOfObjects): array
    {
        return array_map(function ($item) {
            return (int)$item['age'];
        }, $arrayOfObjects);
    }

    /**
     * Function 3: Converts the $arrayOfObjects to $arrayOfArrays using the 'age' as array key
     */
    private function convertToArrayOfArrays(array $arrayOfObjects): array
    {
        $result = [];
        
        foreach ($arrayOfObjects as $item) {
            $age = $item['age'];
            $result[$age] = $item;
        }

        return $result;
    }
}

