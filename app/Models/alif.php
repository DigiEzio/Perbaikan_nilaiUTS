<?php

namespace App\Models;

class alif
{
    private static $movieData = [
        [
            'id' => 'tt1745789',
            'judul' => 'Transformers: The Last Knight',
            'sinopsis' => 'A deadly threat from Earths history reappears and a hunt for a lost artifact takes place between Autobots and Decepticons, while Optimus Prime encounters his creator in space.',
            'tahun' => 2017,
            'pemain' => ['Mark Wahlberg', 'Anthony Hopkins', 'Josh Duhamel'],
            'foto_sampul' => 'OIP.jpg',
            'score' => '5.2/10',
            'Sutradara' => 'Michael Bay',
            ],
            [
            'id' => 'tt1745798',
            'judul' => 'Transformers: Rise of the Beasts',
            'sinopsis' => 'During the 90s, a new faction of Transformers - the Maximals - join the Autobots as allies in the battle for Earth.',
            'tahun' => 2023,
            'pemain' => ['Anthony Ramos','Dominique Fishback','Luna Lauren Velez'],
            'foto_sampul' => 'OIP (1).jpg',
            'score' => '6.1/10',
            'Sutradara' => 'Steven Caple Jr.',
            ],
            [
            'id' => 'tt1745098',
            'judul' => 'Joker',
            'sinopsis' => 'During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.',
            'tahun' => 2019,
            'pemain' => ['Joaquin Phoenix','Robert De Niro','Zazie Beetz'],
            'foto_sampul' => 'OIP (2).jpg',
            'score' => '8.4/10',
            'Sutradara' => 'Todd Phillips',
            ],
            [
            'id' => 'tt1745345',
            'judul' => 'Spawn',
            'sinopsis' => 'An elite mercenary is killed, but comes back from Hell as a reluctant soldier of the Devil.',
            'tahun' => 1997,
            'pemain' => ['Michael Jai White','John Leguizamo','Martin Sheen'],
            'foto_sampul' => 'R (1).jpg',
            'score' => '5.2/10',
            'Sutradara' => 'Mark A.Z. Dippé',
            ],
        [
        'id' => 'tt1746090',
        'judul' => 'Equalizer 3',
        'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he
       discovers his friends are under the control of local crime bosses. As events turn deadly,
       McCall knows what he has to do: become his friends protector by taking on the mafia.',
        'tahun' => 2023,
        'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
        'foto_sampul' => 'equalizer.jpg',
        'score' => '6.9/10',
        'Sutradara' => 'Antoine Fuqua',
        ],
        [
        'id' => 'tt2567856',
        'judul' => 'Mission: Impossible - Dead Reckoning Part One',
        'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon
       before it falls into the wrong hands.',
        'tahun' => 2023,
        'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
        'foto_sampul' => 'mission-imposible.jpg',
        'score' => '7.8/10',
        'Sutradara' => 'Christopher McQuarrie',
        ],
        [
        'id' => 'tt1745564',
        'judul' => 'Openheimer',
        'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role
       in the development of the atomic bomb.',
        'tahun' => 2023,
        'pemain' => [' Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
        'foto_sampul' => 'openheimer.jpg',
        'score' => '8.5/10',
        'Sutradara' => 'Christopher Nolan',
        ],
        [
        'id' => 'tt1745960',
        'judul' => 'Top Gun: Maverick',
        'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top
       naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a
       mission that demands the ultimate sacrifice from those chosen to fly it.',
        'tahun' => 2022,
        'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
        'foto_sampul' => 'top-gun.jpg',
        'score' => '8,3/10',
        'Sutradara' => 'Joseph Kosinski',
        ],

        ];

        public static function all(){
            return collect(self::$movieData);
        }

        public static function find($id){
            $movie = static::all();
            return $movie->firstWhere('id', $id);
        }

}
