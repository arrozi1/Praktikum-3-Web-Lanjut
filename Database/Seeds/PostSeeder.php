<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $model = model('PostModel');


                $kategori = ['Water','Life Style','School','Sport','Business','Pet'];
                for ($i =0; $i<6 ;$i++){
                    $model->insert([
                            'judul'         => static::faker()->sentence(3),
                            'deskripsi'     => static::faker()->text(),
                            // 'gambar'        => static::faker()->email,
                            'author'        => static::faker()->name(),
                            'kategori'      => $kategori[$i],
                            'slug'          => static::faker()->unique()->slug(3),
                    ]);
                }
    }
}
