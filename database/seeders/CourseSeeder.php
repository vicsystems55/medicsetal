<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('courses')->insertOrIgnore([

            [
                'title' => 'Origin of diseases',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '1',
            ],

            [
                'title' => 'Password to health',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Glutathione solution',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Reason why you should be on food supplement',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '1',
            ],

            [
                'title' => 'Cellgevity- the Ultimate Solution',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Carbs  for life',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Whole Food Plant-based diet',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '1',
            ],

            [
                'title' => 'Blue Zone',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Definitive Aging',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '1',
            ],

            [
                'title' => 'Slowing down aging naturally',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '1',
            ],

            [
                'title' => 'Eat to live',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'Stress management',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'Knowing your vitals',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '2',
            ],

            [
                'title' => 'Autoimmune diseases',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'Cancer; winning the war',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'Water for life',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course11.png',
                'video_url' => 'https://player.vimeo.com/video/665425246?h=9f3e084dac',
                'package_id' => '2',
            ],

            [
                'title' => 'Bacterial infection',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'The eye',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'The human brain',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'The truth about energy drink',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '2',
            ],

            [
                'title' => 'Substance abuse ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'The hidden key to health',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'Exercise',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'Female infertility',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'Male Infertility',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'The life supply chain (Blood)',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'The silent killer ( High blood pressure)',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => ' Belly fat, an insidious threat ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'Diabetes; Reversing the irreversible ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],

            [
                'title' => 'Smoking; Gradual suicide',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '3',
            ],


            [
                'title' => 'Alzheimer’s Disease',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Prostate Cancer: the burden of men',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Sleeping for health and wellness',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Sleep disorders',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Arthritis; Natural remedy',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Asthma',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Autoimmune disease',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Back pain',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Bones',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],
            
            [
                'title' => 'Breast cancer',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Cervical cancer',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Common eye disorders',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Erectile dysfunction',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'How to maintain a healthy kidney',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'liver',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Maintaining a healthy glowing skin',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Mediterranean diet',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Menopause ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Sickle cell disease',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Snoring ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Stroke ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Teeth ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Ear ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Nose  ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'The good and bad news about lipid and Fat ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'High Blood Pressure ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'The truth about processed sugar  ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Uterine fibroid ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Viruses  ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Vitamins and minerals',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Your heart, your life ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Peptic ulcer  ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Kidney disease  64. The building blocks of  life (protein)',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => '(ABO) Blood Group and Genotype',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Parkinson disease',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => ' Atherosclerosis ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],

            [
                'title' => 'Obesity ',
                'description' => '',
                'featured_image' => config('app.url').'courses_featured_images' .'/course12.png',
                'video_url' => 'https://player.vimeo.com/video/668412336?h=b6f9f7e768',
                'package_id' => '4',
            ],



        ]);
    }
}


