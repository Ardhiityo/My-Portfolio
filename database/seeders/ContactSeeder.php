<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Contact::create([
            'user_id' => $user->id,
            'linkedin' => 'linkedin.com/in/ardhiityo',
            'phone' => '+62-896-5055-7420',
            'github' => 'https://github.com/Ardhiityo',
            'address' => 'Link. Jombang Wetan RT/RW 001/005 Kelurahan Jombang Wetan, Kecamatan Jombang',
        ]);
    }
}
