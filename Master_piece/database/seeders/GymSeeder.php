<?php

namespace Database\Seeders;

use App\Models\Gym;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //---------------Amman
        //gold
        Gym::create([
            'gym_name' => "Gold's Gym",
            'gym_description' => 'Gold’s Gym Amman gives you access to everything you need to transform your life:
                 state-of-the-art amenities, a variety of classes tailored to your fitness needs, and the world’s
                  best personal trainers. Browse the weekly class schedules for group workouts ranging from martial arts-inspired cardio classes…',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Golds_Gym.png',
            'gym_address' => 'Amman',
            'gym_phone' => '(06)4001777',
            'gym_facebook' => 'https://www.facebook.com/Goldsgymjordan/',
            'gym_instagram' => 'https://www.instagram.com/goldsgymjordan/',
            'gym_email' => 'info@goldsgym.jo',
            'gym_owner_id' => 1,
            'gym_type_id' => 1,

        ]);
        Gym::create([
            'gym_name' => 'VY Health Club',
            'gym_description' => 'As a leading Gym, we were founded back in 2022 to be a place where anyone can come and join in on the fitness fun. We want you to leave feeling better than ever. Showing up can be the hardest part. Let us take care of the rest.',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '22:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/VY_Health_Club.png',
            'gym_address' => 'Amman',
            'gym_phone' => '+962793000011',
            'gym_facebook' => 'https://www.facebook.com/p/Vy-Health-Club-100086900620906/',
            'gym_instagram' => 'https://www.instagram.com/vyhealthclub/',
            'gym_email' => 'marketing@vyhealthclub.com',
            'gym_owner_id' => 1,
            'gym_type_id' => 1,

        ]);

        //Server
        Gym::create([
            'gym_name' => 'Power Hut The Xperience',
            'gym_description' => 'In Power Hut gym training classes with bars, have become an important part of the timetable of all Gyms. A strategic combination
            of training with overload, plus a heavy dose of adrenaline, makes participants leave the concept of “boring” aside, when they consider weight training.',
            'gym_workingHoursFrom' => '05:30:00',
            'gym_workingHoursTo' => '22:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/powerhutgym.png',
            'gym_address' => 'Amman',
            'gym_phone' => '(06)5686349',
            'gym_facebook' => 'https://www.facebook.com/powerhut',
            'gym_instagram' => 'https://www.instagram.com/powerhutthexperience',
            'gym_email' => 'info@powerhutgym.com',
            'gym_owner_id' => 2,
            'gym_type_id' => 2,

        ]);
        Gym::create([
            'gym_name' => 'Trainers Gym',
            'gym_description' => 'Trainers is where experts In fitness techniques,personal training, recreation and healthy lifestyle.State of the art equipment,
             expansive workout floors and studio spaces and even squash courts make the options for exercise almost endless for the ultimate convenience to Look and Feel your Best.',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Trainers_Gym.png',
            'gym_address' => 'Amman',
            'gym_phone' => '(06)5820078',
            'gym_facebook' => 'https://www.facebook.com/trainersjo/',
            'gym_instagram' => 'https://www.instagram.com/trainersjo/',
            'gym_email' => 'info@trainersjo.com',
            'gym_owner_id' => 2,
            'gym_type_id' => 2,

        ]);

        //Bronze
        Gym::create([
            'gym_name' => 'Active Gym',
            'gym_description' => 'Active Gym fitness experts can help you discover new training techniques
             and exercises that offer a dynamic and efficient full-body workout.',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Active_gym.png',
            'gym_address' => 'Amman',
            'gym_phone' => '(06)5513031',
            'gym_facebook' => 'https://www.facebook.com/activegymm/',
            'gym_instagram' => 'https://www.instagram.com/activegymjo/',
            'gym_email' => 'monamouki3@gmail.com',
            'gym_owner_id' => 3,
            'gym_type_id' => 3,

        ]);
        Gym::create([
            'gym_name' => 'Army GYM',
            'gym_description' => 'ARMY GYM Endurance Power, Qualified trainers,
             Advanced equipment, Cardio/Aerobics classes',
            'gym_workingHoursFrom' => '07:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Army_GYM.png',
            'gym_address' => 'Amman',
            'gym_phone' => '0790081545',
            'gym_facebook' => 'https://www.facebook.com/ArmyGym.jo/',
            'gym_instagram' => 'https://www.instagram.com/armygym.jo/',
            'gym_email' => 'armygym.jo@gmail.com',
            'gym_owner_id' => 3,
            'gym_type_id' => 3,

        ]);


        //-----------------Irbid
        //gold
        Gym::create([
            'gym_name' => 'Premium Gym',
            'gym_description' => 'Classes/Cardio/Fitness/Bodybuilding/spa/Nutrition/Store in one place',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '24:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/PremiumGym.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '(06)4011599',
            'gym_facebook' => 'https://www.facebook.com/Premiumgym.Jo',
            'gym_instagram' => 'https://www.instagram.com/premiumgym.jo/',
            'gym_email' => 'info@pgym-jo.com',
            'gym_owner_id' => 4,
            'gym_type_id' => 1,

        ]);
        Gym::create([
            'gym_name' => "Platinum Gym",
            'gym_description' => 'Platinum Gym "bayed Group" The largest sports
             club in the north of the Hashemite Kingdom of Jordan',
            'gym_workingHoursFrom' => '09:00:00',
            'gym_workingHoursTo' => '22:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Platinum_Gym.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '0785489999',
            'gym_facebook' => 'https://www.facebook.com/PlatinumGymJo/',
            'gym_instagram' => 'https://www.instagram.com/platinum_gym_irbid/',
            'gym_email' => 'platinum.gym.center@gmail.com',
            'gym_owner_id' => 4,
            'gym_type_id' => 1,

        ]);

        //Server
        Gym::create([
            'gym_name' => 'VIP GYM',
            'gym_description' => "VIP Gym is not your ordinary fitness facility; it's a premium
             fitness destination that offers a personalized and exclusive experience to its members.",
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '23:30:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/VIP_GYM.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '+962787188871',
            'gym_facebook' => 'https://www.facebook.com/VIPGYMJORDAN/',
            'gym_instagram' => 'https://www.facebook.com/VIPGYMJORDAN/',
            'gym_owner_id' => 5,
            'gym_type_id' => 2,

        ]);
        Gym::create([
            'gym_name' => 'I Gym',
            'gym_description' => 'The largest gym in Irbid The latest devices and equipment for training
            With the presence of professional trainers.',
            'gym_workingHoursFrom' => '07:00:00',
            'gym_workingHoursTo' => '23:30:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/I_Gym.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '+962799550000',
            'gym_facebook' => 'https://www.facebook.com/IGymFitnessClub/',
            'gym_instagram' => 'https://www.instagram.com/igymfitnessclub',
            'gym_owner_id' => 5,
            'gym_type_id' => 2,

        ]);


        //Bronze
        Gym::create([
            'gym_name' => "CC Gym",
            'gym_description' => "The gym is a haven for fitness enthusiasts and those striving to lead healthier lives.
             It's a place where people come together to push their physical limits, build strength, and improve their overall well-being. ",
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '21:30:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/cc_gym.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '0797506269',
            'gym_facebook' => 'https://www.facebook.com/people/CCGYM-%D8%B1%D8%AC%D8%A7%D9%84/100064800702537/',
            'gym_instagram' => 'https://www.facebook.com/people/CCGYM-%D8%B3%D9%8A%D8%AF%D8%A7%D8%AA/100057209091258/',
            'gym_email' => 'saraqazan082@gmail.com',
            'gym_owner_id' => 5,
            'gym_type_id' => 3,

        ]);
        Gym::create([
            'gym_name' => "Fitness Way Gym",
            'gym_description' => "Fitness Way Gym is a premier fitness center dedicated to helping
             individuals achieve their health and wellness goals. With state-of-the-art equipment,
              experienced trainers, and a welcoming atmosphere. ",
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '22:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Fitness_Way_Gym.png',
            'gym_address' => 'Irbid',
            'gym_phone' => '0790158567',
            'gym_facebook' => 'https://www.facebook.com/FitnessWayGym/',
            'gym_instagram' => 'https://www.instagram.com/fitness_way_gym/',
            'gym_email' => 'saraqazan082@gmail.com',
            'gym_owner_id' => 5,
            'gym_type_id' => 3,

        ]);

        //------------------Zarqa

        //gold
        Gym::create([
            'gym_name' => 'APEX Gym',
            'gym_description' => 'Classes/Cardio/Fitness/Bodybuilding/spa/Nutrition/Store in one place',
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '24:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/APEX_Gym.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '0775892251',
            'gym_facebook' => 'https://www.facebook.com/APEXGYMJordan',
            'gym_instagram' => 'https://www.facebook.com/APEXGYMJordan',
            'gym_email' => 'zarqaapexgym@gmail.com',
            'gym_owner_id' => 4,
            'gym_type_id' => 1,

        ]);
        Gym::create([
            'gym_name' => "LIGA Gym",
            'gym_description' => 'LIGA GYM The largest sports
                club in the north of the Hashemite Kingdom of Jordan',
            'gym_workingHoursFrom' => '09:00:00',
            'gym_workingHoursTo' => '22:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/LIGA_GYM.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '0795503026',
            'gym_facebook' => 'https://www.facebook.com/gymliga/',
            'gym_instagram' => 'https://www.instagram.com/gymliga/',
            'gym_email' => 'masoudduhal@gmail.com',
            'gym_owner_id' => 4,
            'gym_type_id' => 1,

        ]);

        //Server
        Gym::create([
            'gym_name' => 'Strong Arms Gym',
            'gym_description' => "It is more than just a gym, it is a fitness center
                  We are committed to the fitness and well-being of our members",
            'gym_workingHoursFrom' => '06:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Strong_Arms_Gym.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '+962787188871',
            'gym_facebook' => 'https://www.facebook.com/StrongArmsFitness/',
            'gym_instagram' => 'https://www.facebook.com/StrongArmsFitness/',
            'gym_owner_id' => 7,
            'gym_type_id' => 2,
        ]);
        Gym::create([
            'gym_name' => 'Class Fitness Gym',
            'gym_description' => 'For all the champions of the bodybuilding game, the tennis champions,
             the fans of the bodybuilding sport, choose a good trainer and do not choose the size of the club.
              You are the biggest winner. Let your start be from Class Fitness Gym',
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '23:30:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Class_Fitness_Gym.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '0779128900',
            'gym_facebook' => 'https://www.facebook.com/p/CLASS-Fitness-GYM-100063583993002/',
            'gym_instagram' => 'https://www.facebook.com/p/CLASS-Fitness-GYM-100063583993002/',
            'gym_owner_id' => 7,
            'gym_type_id' => 2,

        ]);


        //Bronze
        Gym::create([
            'gym_name' => "Action Fitness",
            'gym_description' => "The gym is a haven for fitness enthusiasts and those striving to lead healthier lives.
                It's a place where people come together to push their physical limits, build strength, and improve their overall well-being. ",
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '23:30:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Action_Fitness.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '0797506269',
            'gym_facebook' => 'https://www.facebook.com/ActionFitness.JO/',
            'gym_instagram' => 'https://www.facebook.com/ActionFitness.JO/',
            'gym_email' => 'saraqazan082@gmail.com',
            'gym_owner_id' => 3,
            'gym_type_id' => 3,

        ]);
        Gym::create([
            'gym_name' => "Vigor Gym",
            'gym_description' => "Fitness Way Gym is a premier fitness center dedicated to helping
                individuals achieve their health and wellness goals. ",
            'gym_workingHoursFrom' => '08:00:00',
            'gym_workingHoursTo' => '23:00:00',
            'gym_image' => 'http://127.0.0.1:8000/images/seeder_img/Vigor_Gym.png',
            'gym_address' => 'Zarqa',
            'gym_phone' => '0775305341',
            'gym_facebook' => 'https://www.facebook.com/vigo.gym2010/',
            'gym_instagram' => 'https://www.facebook.com/vigo.gym2010/',
            'gym_email' => 'saraqazan082@gmail.com',
            'gym_owner_id' => 5,
            'gym_type_id' => 3,

        ]);



    }
}




// string('gym_name');
// string('gym_description');
// time('gym_workingHoursFrom');
// time('gym_workingHoursTo');
// mediumText('gym_image');
// string('gym_address');
// string('gym_phone');
// string('gym_facebook')->nullable();
// string('gym_instagram')->nullable();
// string('gym_email')->nullable();
// bigInteger('gym_owner_id')->unsigned();
// bigInteger('gym_type_id')->unsigned();
