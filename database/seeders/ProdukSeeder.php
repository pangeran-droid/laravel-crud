<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProduk = [
            [
                'nama' => 'RGB Gaming Mouse',
                'deskripsi' => 'Ergonomic gaming mouse featuring customizable RGB LED lighting and adjustable DPI settings for gaming and productivity.',
                'harga' => 125000,
                'stok' => 15,
                'gambar' => 'mouse.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wireless Mechanical Keyboard',
                'deskripsi' => 'Compact wireless mechanical keyboard with smooth tactile switches, designed for comfortable typing and long-lasting battery.',
                'harga' => 350000,
                'stok' => 8,
                'gambar' => 'keyboard.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'HD Webcam 1080p',
                'deskripsi' => 'Clear high-definition webcam with built-in microphone, ideal for video conferencing, online classes, and streaming.',
                'harga' => 220000,
                'stok' => 12,
                'gambar' => 'webcam.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Gaming Headset 7.1 Surround',
                'deskripsi' => 'Over-ear gaming headset with immersive 7.1 surround sound, comfortable ear cushions, and a noise-canceling microphone.',
                'harga' => 280000,
                'stok' => 10,
                'gambar' => 'headset.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Extended Mouse Pad',
                'deskripsi' => 'Large anti-slip rubber base mouse pad with smooth cloth surface, providing plenty of space for both keyboard and mouse.',
                'harga' => 75000,
                'stok' => 25,
                'gambar' => 'mousepad.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        
        DB::table('produks')->insert($dataProduk);
    }
}
