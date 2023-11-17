<?php

namespace Database\Seeders;

use App\Models\Challenges;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $challenges = [
            [
                'name' => 'Rotina de Sete Etapas à Moda Coreana',
                'description' => 'Adote a famosa rotina coreana com passos como limpeza a óleo, limpeza com espuma, tonificação, tratamento com essência, sérum, máscara facial e hidratação',
                'icon' => 'asset/icon/',
                'value' => 10,
            ],
            [
                'name' => 'Programa de Renovação Noturna',
                'description' => 'Desenvolva um programa noturno de renovação, incluindo limpeza profunda, esfoliação suave, aplicação de sérum específico, máscara noturna e hidratante',
                'icon' => 'asset/icon/',
                'value' => 20,
            ],
            [
                'name' => 'Ritual de Detox de Fim de Semana',
                'description' => 'Reserve tempo durante o fim de semana para um ritual de detox que inclui máscara purificadora, esfoliação, banho de vapor facial, massagem e hidratação intensiva',
                'icon' => 'asset/icon/',
                'value' => 30,
            ],
            [
                'name' => 'Desafio de 14 Dias para a Pele Radiante',
                'description' => 'Comprometa-se com um desafio de 14 dias, incorporando diariamente etapas como limpeza, tonificação, máscara facial, sérum e hidratação para alcançar uma pele radiante.',
                'icon' => 'asset/icon/',
                'value' => 40,
            ],
            [
                'name' => 'Programa Antienvelhecimento de 21 Dias',
                'description' => 'Crie um programa de 21 dias com passos específicos para combater os sinais de envelhecimento, incluindo ácidos suaves, séruns antienvelhecimento e máscaras nutritivas',
                'icon' => 'asset/icon/',
                'value' => 50,
            ],
            [
                'name' => 'Tratamento de Hidratação Intensiva por Uma Semana',
                'description' => 'Realize uma rotina de hidratação intensiva por uma semana, incluindo máscaras hidratantes diárias, séruns e cremes ricos em ingredientes nutritivos',
                'icon' => 'asset/icon/',
                'value' => 60,
            ],
            [
                'name' => 'Ciclo de Esfoliação Mensal',
                'description' => 'Desenvolva um ciclo mensal de esfoliação, alternando entre esfoliações físicas e químicas para promover uma renovação celular equilibrada',
                'icon' => 'asset/icon/',
                'value' => 70,
            ],
            [
                'name' => 'Ritual de Autocuidado aos Domingos',
                'description' => 'Reserve os domingos para um ritual de autocuidado que inclua limpeza profunda, máscara facial, massagem, tratamento para os olhos e hidratação',
                'icon' => 'asset/icon/',
                'value' => 80,
            ],
        ];

        foreach ($challenges as $challenge) {
            Challenges::create($challenge);
        }
        //
    }
}
