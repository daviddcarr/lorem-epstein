<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phrase;

class PhraseController extends Controller
{
    //
    public function index() {
        // Pull all phrases from the database.
        $phrases = Phrase::all();
        
        // Using the number of phrases, create a list of random IDs to generate the lorem ipsum text.
        $randomizedList = getRandomizedArrayOfNumbers(0, count($phrases) - 1);   
        
        // Loop through the randomized number array and put together a series of paragraphs.
        $paragraphs = '<p>';
        for ($i = 0; $i < count($randomizedList); $i++) {
            if ($randomizedList[$i] == 0 || $randomizedList[$i] == 1) {
                $paragraphs .= '<span class="toggle-bold">' . $phrases[$randomizedList[$i]]->phrase . '</span> ';
            } else {
                $paragraphs .= $phrases[$randomizedList[$i]]->phrase . ' ';
            }
            
            // Add a 20% chance of starting a new paragraph.
            if (rand(1,5) == 1) {
                $paragraphs .= '</p><p>';
            }
        }
        $paragraphs .= '</p>';
        
        return view('index', compact('paragraphs'));
    }
}