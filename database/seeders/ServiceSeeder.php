<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceDetail;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Deep Clean',
                'description' => 'Pembersihan mendalam untuk berbagai jenis sepatu',
                'icon' => 'fas fa-brush',
                'details' => [
                    ['item' => 'Canvas', 'price' => 30000],
                    ['item' => 'Bludru', 'price' => 35000],
                    ['item' => 'Leather', 'price' => 40000],
                    ['item' => 'Boots', 'price' => 40000],
                ],
            ],
            [
                'name' => 'Quick Service',
                'description' => 'Layanan cepat sesuai kebutuhan Anda',
                'icon' => 'fas fa-bolt',
                'details' => [
                    ['item' => 'Fast Clean', 'price' => 20000],
                    ['item' => '1Day Service', 'price' => 10000],
                    ['item' => '2Day Service', 'price' => 5000],
                ],
            ],
            [
                'name' => 'Special Treatment',
                'description' => 'Perawatan khusus untuk sepatu Anda',
                'icon' => 'fas fa-magic',
                'details' => [
                    ['item' => 'Unyellow Upper', 'price' => 25000],
                    ['item' => 'Unyellow Mid Sol', 'price' => 30000],
                    ['item' => 'ReGlue Medium', 'price' => 35000],
                    ['item' => 'ReGlue Total', 'price' => 50000],
                ],
            ],
            [
                'name' => 'Cuci Tas',
                'description' => 'Layanan cuci tas berbagai ukuran',
                'icon' => 'fas fa-box',
                'details' => [
                    ['item' => 'Ukuran Kecil', 'price' => 15000],
                    ['item' => 'Ukuran Medium', 'price' => 25000],
                    ['item' => 'Ukuran Besar', 'price' => 35000],
                    ['item' => 'Ukuran Jumbo', 'price' => 45000],
                ],
            ],
            [
                'name' => 'Cuci Helm',
                'description' => 'Layanan cuci helm berbagai ukuran',
                'icon' => 'fas fa-helmet-safety',
                'details' => [
                    ['item' => 'Ukuran Kecil', 'price' => 15000],
                    ['item' => 'Ukuran Medium', 'price' => 25000],
                    ['item' => 'Ukuran Fullface', 'price' => 45000],
                ],
            ],
            [
                'name' => 'Cuci Topi',
                'description' => 'Layanan cuci topi profesional',
                'icon' => 'fas fa-hat-cowboy',
                'details' => [
                    ['item' => 'Cuci Topi', 'price' => 20000],
                    ['item' => 'Deep Clean', 'price' => 0], // Harga tidak ditentukan
                    ['item' => 'Anti Bacterial Treatment', 'price' => 0], // Harga tidak ditentukan
                ],
            ],
        ];

        foreach ($services as $serviceData) {
            $service = Service::create([
                'name' => $serviceData['name'],
                'description' => $serviceData['description'],
                'icon' => $serviceData['icon'],
            ]);

            foreach ($serviceData['details'] as $detail) {
                ServiceDetail::create([
                    'service_id' => $service->id,
                    'item' => $detail['item'],
                    'price' => $detail['price'],
                ]);
            }
        }
    
    }
}
