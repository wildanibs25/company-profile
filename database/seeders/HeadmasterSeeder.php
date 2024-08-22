<?php

namespace Database\Seeders;

use App\Models\Headmaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeadmasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Headmaster::create([
            'headmaster_name'       => 'Bagas Aji Kusumo',
            'headmaster_photo'      => 'PNG',
            'headmaster_description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sapiente laborum aliquam. Totam sunt natus numquam, ullam dolores non debitis expedita quidem consequuntur voluptatum laborum minima odio cum quas ut velit libero unde pariatur atque, minus cupiditate iste tenetur! Nihil eaque pariatur velit fuga quae odit tempora earum hic nesciunt placeat explicabo exercitationem molestias voluptates inventore doloremque rem fugiat, consequatur officia quas? Unde voluptatibus porro ad, alias fugit minus assumenda, dignissimos sint quae ea animi fugiat a at excepturi obcaecati error voluptatum quia ullam. Eligendi commodi quod aliquam veniam at deleniti illum doloremque aut perferendis itaque! Commodi repudiandae eum possimus.',
        ]);
    }
}
