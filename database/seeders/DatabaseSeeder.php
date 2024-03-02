<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Diandra Farel',
            'email' => 'diandra@gmail.com',
            'password' => 123456,
            'is_admin' => 0,
        ]);
        User::factory()->create([
            'name' => 'Danish Abyan',
            'email' => 'danish@gmail.com',
            'password' => 123456,
            'is_admin' => 0,
        ]);

        Category::factory()->create([
            'name' => 'Sports'
        ]);
        Category::factory()->create([
            'name' => 'Government'
        ]);
        Category::factory()->create([
            'name' => 'Health and Care'
        ]);
        Category::factory()->create([
            'name' => 'Beauty'
        ]);

        Article::factory()->create([
            'author_id' => 1,
            'category_id' => 1,
            'title' => 'Kylian Mbappe hengkang ke Real Madrid',
            'image' => 'article-4.jpg',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quo? Nemo non neque et fugit doloribus. Hic asperiores optio eveniet consectetur iusto aspernatur harum in laboriosam, magni quas pariatur deleniti obcaecati dolore dolores quo autem ratione esse libero, distinctio quod laudantium molestias ex quae possimus. Exercitationem iure libero illo facilis itaque hic asperiores, atque dolore. Blanditiis quia exercitationem dolor quam, incidunt necessitatibus, excepturi aspernatur possimus ipsum amet, aliquid aliquam quisquam maxime. Nemo ipsam ad doloribus qui omnis aperiam explicabo reiciendis adipisci impedit aliquid distinctio nesciunt, quam totam cupiditate reprehenderit labore quisquam odit velit perspiciatis dignissimos recusandae voluptatibus quas facilis! Dolor ipsa dolorem maxime aut soluta. Doloremque id quibusdam dicta eius eligendi distinctio numquam fuga veritatis accusamus non alias, totam molestias tempora repellat aperiam iste! Minus, nemo sint? Quam exercitationem obcaecati sequi, in consequatur totam at eligendi voluptate, vitae architecto deserunt ab veniam provident itaque, dolorem corporis facere fuga autem porro recusandae. Minus, obcaecati ipsum aliquam quis dolorum odit unde quaerat! Sint, quas? Commodi tenetur sit, accusamus, laudantium consectetur porro, consequuntur deserunt numquam fugiat iure corrupti in. Mollitia, nulla? Aliquid minima impedit animi voluptatem error placeat dolore similique fugit omnis autem! Explicabo nulla reiciendis laborum omnis ipsum illo eius rem eligendi neque. Deserunt odio accusantium vitae illo pariatur odit obcaecati eum at excepturi. Voluptas dolorem magnam neque architecto ipsam et dolore ducimus. Pariatur delectus neque sunt ducimus saepe nulla quia, accusantium possimus quidem ipsam deleniti eos! Vitae, quod libero? Eaque repellat, delectus tempora blanditiis eveniet, earum laborum consequatur quasi voluptas dolores harum ipsa odio facilis et impedit. Perferendis corporis, tempora voluptatem magni veniam eos ducimus quisquam at aliquam incidunt nihil perspiciatis hic optio cum repellat similique, quibusdam illum molestiae ex architecto aperiam soluta, debitis ipsum. Officiis, placeat illum alias voluptate repellendus nihil cupiditate quod earum ullam. Soluta at ipsa maxime dicta.'
        ]);
    }
}
