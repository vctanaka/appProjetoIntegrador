<?php

namespace Database\Seeders;

use App\Models\Missions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = [
            [
                'name' => 'Limpeza Matinal',
                'description' => 'Lave suavemente o rosto com um limpador facial adequado para o seu tipo de pele para remover impurezas e óleos acumulados durante a noite.',
                'file' => '',
                'value' => 30,
            ],
            [
                'name' => 'Tonificação Revigorante',
                'description' => 'Aplique um tônico facial para equilibrar o pH da pele, preparando-a para absorver melhor os produtos subsequentes e proporcionando uma sensação refrescante',
                'file' => '',
                'value' => 50,
            ],
            [
                'name' => 'Hidratação Diária',
                'description' => 'Aplique um hidratante leve para manter a pele hidratada ao longo do dia, escolhendo um produto adequado para o seu tipo de pele',
                'file' => '',
                'value' => 30,
            ],
            [
                'name' => 'Proteção Solar Essencial',
                'description' => 'Antes de sair de casa, aplique um protetor solar de amplo espectro com pelo menos FPS 30 para proteger a pele dos danos causados pelos raios UV',
                'file' => '',
                'value' => 20,
            ],
            [
                'name' => 'Limpeza Noturna',
                'description' => 'Remova a maquiagem e lave o rosto com um limpador suave antes de dormir para eliminar poluentes acumulados durante o dia',
                'file' => '',
                'value' => 30,
            ],
            [
                'name' => 'Esfoliação Semanal',
                'description' => 'Use um esfoliante suave uma vez por semana para remover células mortas, desobstruir poros e estimular a renovação celular',
                'file' => '',
                'value' => 15,
            ],
            [
                'name' => 'Máscara Facial Nutritiva',
                'description' => 'Aplique uma máscara facial nutritiva uma vez por semana para fornecer nutrientes adicionais à pele e revitalizá-la',
                'file' => '',
                'value' => 25,
            ],
            [
                'name' => 'Cuidado com os Olhos',
                'description' => 'Aplique um creme para os olhos para tratar a delicada área ao redor dos olhos, ajudando a reduzir inchaços e olheiras',
                'file' => '',
                'value' => 30,
            ],
            [
                'name' => 'Serum Anti-Envelhecimento',
                'description' => 'Use um sérum anti-envelhecimento para direcionar preocupações específicas, como linhas finas ou manchas escuras, proporcionando um impulso adicional à sua rotina',
                'file' => '',
                'value' => 40,
            ]
        ];

        foreach ($missions as $mission) {
            Missions::create($mission);
        }


        //
    }
}
