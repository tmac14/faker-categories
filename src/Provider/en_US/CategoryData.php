<?php

namespace FakerCategories\Provider\en_US;

class CategoryData
{
    public static function getCategoriesWithSubcategories(): array
    {
        return static::$categoriesWithSubcategories;
    }

    protected static $categoriesWithSubcategories = [
        'Electronic' => [
            'Amplifiers', 'Attenuators', 'Audio Components', 'Batteries', 'Capacitors',
            'Circuit Protection', 'Clock and Timing', 'Communication', 'Computer', 'Connectors',
            'Controllers', 'Data Acquisition', 'Development Systems', 'Diodes', 'Transistors and Thyristors',
            'Displays', 'Drivers and Interfaces', 'Electromechanical Switches', 'Electronic Switches', 'Embedded Controllers and Systems',
            'EMI/RFI Suppression', 'Encoders', 'Fasteners and Hardware', 'Filters', 'Fluid Power Actuators & Valves',
            'LEDs and LED Lighting', 'Memory', 'Microcontrollers and Processors', 'Motors', 'Multimedia',
            'Optoelectronics'
        ],
        'Movies' => [
            'Action', 'Comedy', 'Drama', 'Fantasy', 'Horror',
            'Mystery', 'Romance', 'Thriller', 'Western', 'Crime',
            'Disaster', 'Psychological', 'Techno', 'War and Military', 'Spy and Espionage',
            'Martial Arts', 'Western Shoot \'Em up', 'Action Hybrid', 'Slapstick', 'Screwball',
            'Parody', 'Black Comedy', 'Zombie', 'Folk Horror', 'Body Horror',
            'Found Footage'
        ],
        'Music' => [
            'Classical', 'Country', 'Electronic', 'Dance music', 'Hip-hop',
            'Indie rock', 'Jazz', 'K-pop', 'Metal', 'Oldies',
            'Pop', 'Rap', 'Rhythm & blues (R&B)', 'Rock', 'Techno',
            'Afrobeats', 'Benga', 'Chimurenga', 'Ethio-jazz', 'Gnawa/ethno-pop/gwani blues',
            'Highlife', 'Hiplife', 'Inkiranya', 'Juju', 'Majika',
            'Mbalax', 'Ndombolo', 'Palm wine', 'Rababah', 'Baila',
            'Bollywood', 'Carnatic', 'Chinese folk', 'Chinese traditional opera', 'C-pop',
            'Dangdut', 'Gagaku court music', 'Hindustani', 'Japanese folk', 'J-pop',
            'K-trot', 'Punjabi', 'Rafi', 'Raga rock', 'V-pop',
            'Calypso', 'Dancehall', 'Mambo', 'Mento', 'Merengue',
            'Reggae', 'Rocksteady', 'Salsa', 'Ska', 'Soca',
            'Steel band music/pan music', 'Zouk A capella', 'Celtic chant Drum & bass', 'Euro-disco', 'Flamenco',
            'Glitch pop', 'Grime', 'Opera', 'Polka', 'Trance',
            'Bachata', 'Balada', 'Bossa nova', 'Compas', 'Cumbia',
            'Mariachi', 'Mexican', 'Mesitzo', 'Ranchera', 'Reggaeton',
            'Samba', 'Tango', 'Vallenatto', 'American folk', 'Bluegrass',
            'Blues', 'Canadian folk', 'Gospel', 'Industrial', 'Wing',
            'Tejano', 'Zydeco'
        ],
        'Games' => [
            'Action', 'Action-adventure', 'Role-playing', 'Simulation', 'Sports',
            'Puzzle', 'Idle'
        ]
    ];
}