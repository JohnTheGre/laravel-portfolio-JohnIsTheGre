<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Example array of Liverpool players
        $liverpoolPlayers = [
            'Virgil van Dijk', 'Mohamed Salah', 'Sadio Mané', 'Alisson Becker', 'Trent Alexander-Arnold',
            'Ryan Gravenberch', 'Cody Gakpo', 'Andrew Robertson', 'Wataru Endo', 'Diogo Jota',
            'Alexis MacAllister', 'Joe Gomez', 'Conor Bradly', 'Darwin Nunez', 'Rabio Carvalho',
        ];


        $manchesterUnitedPlayers = [
            'Diogo Dalot', 'Harry Maguire', 'Bruno Fernandes', 'Marcus Rashford', 'Rasmus Hoijlund',
            'Andrey Onana', 'Luke Shaw', 'Aaron Wan-Bissaka', 'Casemiro', 'Scott McTominay',
            'Anthony Martial', 'Kobbie Manoo', 'Anthony', 'Raphaël Varane', 'Victor Lindelöf',
        ];

        $chelseaPlayers = [
            'Petrovic', 'Disasi', 'Casiedo', 'Raheem Sterling', 'Mudryk',
            'Conor Gallagher', 'Enzo Fernandez', 'Malo Gusto', 'Reece James', 'Ben Chilwell',
            'Marc Cucurella', 'Nikola Jackson', 'Christopher Nkuku', 'Cole Palmer', 'Thiago Silva',
        ];

        $arsenalPlayers = [
            'Aaron Ramsdale', 'Kieran Tierney', 'Ben White', 'Thomas Partey', 'Bukayo Saka',
            'Havertz', 'Declan Rice', 'Gabriel Martinelli', 'Jorginho', 'Martin Ødegaard',
            'David Raya', 'Zinchenko', 'Takehiro Tomiyasu', 'Gabriel Magalhães', 'Saliba',
        ];

        // Pass the arrays to the view
        return view('dashboard', compact('liverpoolPlayers', 'manchesterUnitedPlayers', 'chelseaPlayers', 'arsenalPlayers'));
    }
}
