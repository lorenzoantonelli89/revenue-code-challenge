<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Reveneu assume brillante sviluppatore di Torino',
                'content' => 'Reveneu alza il livello e assume Lorenzo Antonelli fresco di accademia presso Boolean Careers, giovane promettente.',
                'url' => 'https://www.linkedin.com/in/lorenzo-antonelli-4240b8213/'
            ],
            [
                'title' => "Energia pulita: nuova fonte in arrivo",
                'content' => "Il sale marino usato come nuova fonte energetica
                            I ricercatori della Penn State University hanno sviluppato una tecnologia ibrida che, 
                            unendo i sistemi più efficaci utilizzati fino a questo momento, consente di produrre energia sfruttando 
                            la differenza di concentrazione salina dell'acqua.",
                'url' => "https://www.green.it/nuova-fonte-energetica-stati-uniti/#:~:text=Il%20sale%20marino%20usato%20come%20nuova%20fonte%20energetica&text=I%20ricercatori%20della%20Penn%20State,di%20concentrazione%20salina%20dell'acqua."
            ],
            [
                'title' => "Green pass, nuova stretta",
                'content' => "Dopo la scuola tutta la Pubblica amministrazione. Il green pass potrebbe diventare presto obbligatorio anche per i dipendenti pubblici.",
                'url' => "https://www.iltempo.it/attualita/2021/08/31/news/green-pass-dipendenti-pubblici-ultime-notizie-stretta-governo-obbligo-vaccino-ministro-speranza-mario-draghi-28498809/"
            ]
        ];

        foreach ($posts as $post) {
           Post::create($post);
        }
    }
}
