<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
 
class PemesananSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     */ 
 
 
    public function run(): void 
    { 
        DB::table('pemesanan')->insert([ 
            [ 
                'namalengkap' => 'siswoyo', 
                'nomertelpon'=> '08547893217654', 
                'jumlahpeserta' => 1, 
                'pemesanan_id' => 1 
            ], 
            [ 
                'namalengkap' => 'dahel', 
                'nomertelpon' => '08766564312567', 
                'jumlahpeserta' => 2, 
                'pemesanan_id' => 2 
            ], 
           
        ]); 
    } 
} 