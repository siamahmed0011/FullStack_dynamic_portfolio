<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;
use App\Models\Achievement;

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

        // Path to JSON data file
        $dataPath = database_path('seeders/data.json');

        if (file_exists($dataPath)) {
            $data = json_decode(file_get_contents($dataPath), true);

            // Seed settings
            if (!empty($data['settings'])) {
                foreach ($data['settings'] as $setting) {
                    Setting::updateOrCreate(
                        ['key' => $setting['key']],
                        ['value' => $setting['value']]
                    );
                }
            }

            // Seed projects
            if (!empty($data['projects'])) {
                foreach ($data['projects'] as $project) {
                    Project::updateOrCreate(
                        ['title' => $project['title']],
                        [
                            'description' => $project['description'],
                            'image' => $project['image'],
                            'tech_stack' => $project['tech_stack'],
                            'github_url' => $project['github_url'],
                            'demo_url' => $project['demo_url'],
                        ]
                    );
                }
            }

            // Seed skills
            if (!empty($data['skills'])) {
                foreach ($data['skills'] as $skill) {
                    Skill::updateOrCreate(
                        ['name' => $skill['name']],
                        ['description' => $skill['description']]
                    );
                }
            }

            // Seed academics
            if (!empty($data['academics'])) {
                foreach ($data['academics'] as $academic) {
                    Academic::updateOrCreate(
                        [
                            'degree' => $academic['degree'],
                            'institution' => $academic['institution'],
                        ],
                        [
                            'year' => $academic['year'],
                            'result' => $academic['result'] ?? null,
                        ]
                    );
                }
            }

            // Seed achievements
            if (!empty($data['achievements'])) {
                foreach ($data['achievements'] as $achievement) {
                    Achievement::updateOrCreate(
                        ['title' => $achievement['title']],
                        [
                            'issuer' => $achievement['issuer'] ?? null,
                            'date' => $achievement['date'] ?? null,
                            'description' => $achievement['description'] ?? null,
                            'certificate_url' => $achievement['certificate_url'] ?? null,
                        ]
                    );
                }
            }
        } else {
            // Seed settings only if they do not exist (fallback default settings)
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
}
