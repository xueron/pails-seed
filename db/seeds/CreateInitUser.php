<?php

use Phinx\Seed\AbstractSeed;

class CreateInitUser extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name'       => 'pails',
                'password'   => '$2y$08$VkFNV240VDNIRVVmVG1tMuB/abZGk6vvbzg.zsMHZkqzIuJX8GESy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $users = $this->table('users');
        $users->insert($data)
            ->save();
    }
}
