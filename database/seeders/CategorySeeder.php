<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            $categories = [
                [
                    'name' => 'Painting',
                    'slug' => 'painting'
                ],
                [
                    'name' => 'Sculpture',
                    'slug' => 'sculpture'
                ],
                [
                    'name' => 'Photography',
                    'slug' => 'photography'
                ],
                [
                    'name' => 'Graphic Design',
                    'slug' => 'graphic-design'
                ],
                [
                    'name' => 'Digital Art',
                    'slug' => 'digital-art'
                ],
                [
                    'name' => 'Animation',
                    'slug' => 'animation'
                ],
                [
                    'name' => 'Illustration',
                    'slug' => 'illustration'
                ],
                [
                    'name' => 'Video Production',
                    'slug' => 'video-production'
                ],
                [
                    'name' => 'Web Design',
                    'slug' => 'web-design'
                ],
                [
                    'name' => 'Virtual Reality',
                    'slug' => 'virtual-reality'
                ],
                [
                    'name' => 'Software Development',
                    'slug' => 'software-development'
                ],
                [
                    'name' => 'Artificial Intelligence (AI)',
                    'slug' => 'artificial-intelligence'
                ],
                [
                    'name' => 'Data Science and Analytics',
                    'slug' => 'data-science-analytics'
                ],
                [
                    'name' => 'Cybersecurity',
                    'slug' => 'cybersecurity'
                ],
                [
                    'name' => 'Internet of Things (IoT)',
                    'slug' => 'internet-of-things'
                ],
                [
                    'name' => 'Cloud Computing',
                    'slug' => 'cloud-computing'
                ],
                [
                    'name' => 'Mobile Applications',
                    'slug' => 'mobile-applications'
                ],
                [
                    'name' => 'E-commerce and Online Marketplaces',
                    'slug' => 'e-commerce-online-marketplaces'
                ],
                [
                    'name' => 'Network Infrastructure',
                    'slug' => 'network-infrastructure'
                ],
                [
                    'name' => 'User Experience (UX) Design',
                    'slug' => 'user-experience-design'
                ]
            ];
    
            foreach ($categories as $category) {
                Category::create($category);
            }
        }
    

    }

