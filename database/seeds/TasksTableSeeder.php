<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = "";
        
        for($i = 1; $i <= 10; $i++) {
            if (($i / 3) == 0) {
                    $status = 'Doing';
            }
            elseif (($i / 3) == 1) {
                    $status = 'Done';
            }
            else {
                    $status = 'Waiting';
            }
            DB::table('tasks')->insert([
                'content' => 'task content ' . $i,
                'status' => $status,
            ]);
        }
    }
}
