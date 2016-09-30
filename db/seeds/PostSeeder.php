<?php

use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
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
        $data = [];

        foreach (range(1, 10) as $index) {
            $data[] = [
                'title' => 'title '.$index,
                'content' => 'content '.$index,
            ];
        }

        $posts = $this->table('posts');

        $posts->insert($data)
            ->save();
    }
}
