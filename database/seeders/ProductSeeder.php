<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $list_product = [
            [
                'product_name' => 'Vegetable 1',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 2',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 3',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 4',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 5',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 6',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 7',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 8',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 9',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 10',
                'product_picture' => 'https://lirp.cdn-website.com/030ad308/dms3rep/multi/opt/3419303-256-1920w.png',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 11',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 12',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 13',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 14',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 15',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 16',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 17',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 18',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 19',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'product_name' => 'Vegetable 20',
                'product_picture' => 'https://scontent.fcgk42-1.fna.fbcdn.net/v/t39.30808-1/292503246_436646521806634_8119532164900402045_n.png?stp=dst-png_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=596444&_nc_ohc=FC8uyOLrdj0AX95iz1i&_nc_ht=scontent.fcgk42-1.fna&oh=00_AfCk8OGFdC2NkriowYVh74xAZcCvc3D2vXxa4FWgKif4Ww&oe=65AF9182',
                'product_price' => 1000000,
                'product_type' => 'LIMITED VEGETABLE!',
                'product_description' => 'Vegetable are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color',
                'product_note' => 'This vegetable won 1st place at Canna UK National Giant vegetables Championship.',
                'product_qty' => 999999,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('products')->insert($list_product);
    }
}
