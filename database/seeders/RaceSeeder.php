<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races = [
            [
                'name' => 'Human',
                'description' => 'Humans are the most adaptable and ambitious people among the common races.  Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.'
            ],
            [
                'name' => 'Dragonborn',
                'description' => 'Dragonborn look very much like dragons standing erect in humanoid form, though they lack wings or a tail.'
            ],
            [
                'name' => 'Elf',
                'description' => 'Elves are a magical people of otherworldly grace, living in the world but not entirely part of it.'
            ],
            [
                'name' => 'Dwarf',
                'description' => 'Bold and hardy, dwarves are known as skilled warriors, miners, and workers of stone and metal.'
            ],
            [
                'name' => 'Gnome',
                'description' => 'A gnomes energy and enthusiasm for living shines through every inch of his or her tiny body.'
            ],
            [
                'name' => 'Half-Elf',
                'description' => 'Half-elves combine what some say are the best qualities of their elf and human parents.'
            ],
            [
                'name' => 'Halfling',
                'description' => 'The diminutive halflings survive in a world full of larger creatures by avoiding notice or, barring that, avoiding offense.'
            ],
            [
                'name' => 'Half-Orc',
                'description' => 'Some half-orcs rise to become proud leaders of orc communities.  Some venture into the world to prove their worth.  Many of these become adventurers, achieving greatness for their mighty deeds.'
            ],
            [
                'name' => 'Tiefling',
                'description' => 'To be greeted with stares and whispers, to suffer violence and insult on the street, to see mistrust and fear in every eye: this is the lot of the tiefling.'
            ]
        ];

        foreach ($races as $race) {
            Race::findorcreate($race);
        }
    }
}
