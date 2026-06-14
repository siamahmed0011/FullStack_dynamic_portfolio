<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure default admin user exists
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Shiam Ahmed',
                'password' => Hash::make('password'),
            ]
        );

        // Seed settings only if they do not exist
        $defaultSettings = [
            'site_name' => 'Shiam Ahmed',
            'hero_title' => 'Shiam Ahmed',
            'hero_description' => 'Flutter Developer & Digital Marketer skilled in building cross-platform mobile apps, Canva graphic design, and modern web development',
            'about_intro' => 'Flutter Developer with hands-on experience building cross-platform mobile apps using Flutter and Firebase. Skilled in UI design, real-time databases, role-based systems, HTML, CSS, and JavaScript. Also proficient in Canva graphic design, AI video creation, and digital marketing. Seeking an entry-level Flutter Developer or Digital Marketing role to deliver impactful results',
            'university' => 'Daffodil International University',
            'department' => 'CSE',
            'interests' => 'Web development, Machine learning, Social marketing, Youtube SEO',
            'contact_email' => 'ahmedsiam01608@gmail.com',
            'location' => 'Mirpur 2, Dhaka, Bangladesh',
            'linkedin_url' => 'https://www.linkedin.com/in/shiamahmed/',
            'github_url' => 'https://github.com/siamahmed0011',
            'facebook_link' => 'https://www.facebook.com/siam.ahmed.863154/',
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
