<?php



use App\Contactus;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //透過播種機執行工廠
        //先清除 Contactus資料
        Contactus::truncate();
        factory(Contactus::class, 30)->create();

    }
}
