<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        About::create([
            'description' => '<p>As a Fullstack Web Coding Mentor at Al-Khairiyah University and Full-stack Web Developer, I am highly skilled in utilizing various technologies such as PHP, HTML, CSS, Javascript, as well as frameworks such as Laravel, Tailwind, Bootstrap and Laravel libraries such as Filament, Spatie, Breeze, Fortify, and Socialite to build highly responsive and visually appealing user interfaces and admin dashboards for a seamless web experience.<br><br>With many case studies gained from various coding courses and real project experiences ranging from the artificial intelligence sector, such as building expert system applications, and actively mentoring in various workshops, I have developed scalable and user-centric solutions, providing a great user experience.&nbsp;<br><br>Moreover, as a Full-Stack Coding Mentor, my true passion lies in the field of education, specifically coding, aiming to empower individuals and drive positive change through sharing knowledge and creating meaningful impact.<br><br>If you share similar interests or would like to discuss anything related to this field, I would love to connect with you! Feel free to contact me at aryaadi229@gmail.com, have a nice day!&nbsp;</p>',
            'user_id' => $user->id
        ]);
    }
}
