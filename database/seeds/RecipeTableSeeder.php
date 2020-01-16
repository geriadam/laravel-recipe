<?php

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            "user_id" => 1,
            "category_id" => 9,
            "title" => "Tomatoes Stuffed with Foie and Chanterelles",
            "difficulty" => "easy",
            "prepare_time" => "20 Min",
            "cooking_time" => "30 Min",
            "serves" => 7,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product50.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 3,
            "title" => "Pumpkin Cheesecake With GingersnapCrust",
            "difficulty" => "medium",
            "prepare_time" => "10 Min",
            "cooking_time" => "15 Min",
            "serves" => 3,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product51.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 2,
            "title" => "Blueberry Juice with Lemon Crema",
            "difficulty" => "medium",
            "prepare_time" => "5 Min",
            "cooking_time" => "20 Min",
            "serves" => 5,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product52.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 5,
            "title" => "Chanterelle and Porcini Mushroom Recipes",
            "difficulty" => "hard",
            "prepare_time" => "8 Min",
            "cooking_time" => "35 Min",
            "serves" => 5,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product53.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 4,
            "title" => "Asian Chicken Noodles",
            "difficulty" => "easy",
            "prepare_time" => "1 Min",
            "cooking_time" => "4 Min",
            "serves" => 10,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product54.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 2,
            "title" => "Maxican Dessert",
            "difficulty" => "medium",
            "prepare_time" => "5 Min",
            "cooking_time" => "15 Min",
            "serves" => 2,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product55.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 8,
            "title" => "Soypan Fruits Juice",
            "difficulty" => "easy",
            "prepare_time" => "1 Min",
            "cooking_time" => "5 Min",
            "serves" => 1,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product56.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 9,
            "title" => "Crepes with Forest",
            "difficulty" => "medium",
            "prepare_time" => "2 Min",
            "cooking_time" => "28 Min",
            "serves" => 3,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product57.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 10,
            "title" => "Blueberry Juice with Lemon Crema",
            "difficulty" => "hard",
            "prepare_time" => "6 Min",
            "cooking_time" => "18 Min",
            "serves" => 2,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product58.jpg",
        ]);

        Recipe::create([
            "user_id" => 1,
            "category_id" => 7,
            "title" => "Pumpkin Cheesecake With GingersnapCrust",
            "difficulty" => "easy",
            "prepare_time" => "7 Min",
            "cooking_time" => "45 Min",
            "serves" => 1,
            "description" => "<p class='item-description'>More off this less hello salamander lied porpoise much over
                                tightly circa horse taped so
                                innocuously side crudey mightily rigorous plot life. New homes in particular are
                                subject.All recipes created with FoodiePress have suport for Micoformats and Google
                                Recipe View. Schema.org is a collaboration byo improve the web by creatinegaera
                                structured data markup.More off this less hello salamander lied porpoise much over
                                tightly circa horse tapedey innocuously side crudey mightily rigorous plot life.</p><p class='item-description'>Salamander lied porpoise much over tightly circa horse taped so
                                innocuously side crudey
                                mightily rigorous plot life. New homes in particular are subject.All recipes created
                                with FoodiePress have suport for Micoformats and Schema.org is a collaboration byo
                                improve.s convallis mi et tellus vehicula convallis. Etiam odio eros, viverra id dui
                                inrutrum cursus ex. Curabitur et consequatenim.</p>",
            "directions" => "<p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p><p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>
                <p>Recipe View5 Minutes chemaorg is a collaboration improve the web by creat inegaera structured markupinn ocuously side crudey mightily rigorous plot life.</p>",
            "ingredients" => "<p>1 cup sifted all purpose flour</p><p>4 cup roasted macadamia nuts</p><p>4 large eggs</p><p>4 cup roasted macadamia nuts</p><p>5 cup sifted all purpose flour</p><p>8 cup roasted macadamia nuts</p>",
            "status" => "active",
            "image" => "product59.jpg",
        ]);
    }
}
