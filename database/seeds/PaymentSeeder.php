<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            ['name' => 'BCA', 'tax' => 3],
            ['name' => 'BNI', 'tax' => 4],
            ['name' => 'BJB', 'tax' => 5],
        ];

        foreach($payments as $payment){
            Payment::create($payment);
        }
    }
}
