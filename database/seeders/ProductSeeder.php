<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            // ID 1
            'category_id' => 2,
            'name' => 'fita-isolante',
            'label' => 'Fita Isolante 20m',
            'description' => 'Fita isolande de alta isolação e fixação para todos os ambientes',
            'price' => 7.90,
            'mark' => '3M',
            'image' => '114544638cb298ac7e6.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 2,
        ]);

        Product::create([
            // ID 2
            'category_id' => 3,
            'name' => 'conexao-t-rosca3/4',
            'label' => 'Conexão "T" com rosca 3/4"',
            'description' => 'Conexão em formato "T" c/ rosca 3/4" para toneiras',
            'price' => 4.90,
            'mark' => 'Tigre',
            'image' => '115052638cb3cc4ff61.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 2,
            //'updated_by' => 2,
        ]);

        Product::create([
            // ID 3
            'category_id' => 3,
            'name' => 'cola-pvc-tigre',
            'label' => 'Cola PVC Tigre',
            'description' => 'Cola para tubo PVC de fixação rápida e segura contra vazamento.',
            'price' => 5.90,
            'mark' => 'Tigre',
            'image' => '115254638cb44621953.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 2,
            //'updated_by' => 2,
        ]);

        Product::create([
            // ID 4
            'category_id' => 3,
            'name' => 'pincel-tigre',
            'label' => 'Pincel Tigre',
            'description' => 'Pincel de 2" resistente e durável',
            'price' => 6.90,
            'mark' => 'Tigre',
            'image' => '115311638cb45747650.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 2,
            //'updated_by' => 5,
        ]);

        Product::create([
            // ID 5
            'category_id' => 1,
            'name' => 'saco-de-areia',
            'label' => 'Saco de Areia',
            'description' => 'Saco de areia lavada de 20Kg',
            'price' => 10.90,
            'mark' => 's/ Marca',
            'image' => '115317638cb45db3544.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 2,
            //'updated_by' => 6,
        ]);

        Product::create([
            // ID 6
            'category_id' => 1,
            'name' => 'saco-de-pedra',
            'label' => 'Saco de Pedra',
            'description' => 'Saco de pedra com 20kg tipo nº 2',
            'price' => 9.90,
            'mark' => 's/ Marca',
            'image' => '115324638cb46430d0b.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 5,
            //'updated_by' => 5,
        ]);

        Product::create([
            // ID 7
            'category_id' => 5,
            'name' => 'tinta-esmalte-preta-coral',
            'label' => 'Tinta Esmalte Coral',
            'description' => 'Tinta esmalte sintetico de cor preta',
            'price' => 30.90,
            'mark' => 'Coral',
            'image' => '115332638cb46cbb85d.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 5,
            //'updated_by' => 6,
        ]);

        Product::create([
            // ID 8
            'category_id' => 6,
            'name' => 'alicate-universal-gedore',
            'label' => 'Alicate Universal Gedore',
            'description' => 'Alicate universal multiuso com isolação de 1000V',
            'price' => 60.90,
            'mark' => 'Gedore',
            'image' => '121520638cb98889f18.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 6,
            //'updated_by' => 6,
        ]);

        Product::create([
            // ID 9
            'category_id' => 1,
            'name' => 'telha-ondulada',
            'label' => 'Telha Confibra Ondulada de Fibrocimento',
            'description' => 'Telha de Fibrocimento P7 – 5mm.',
            'price' => 49.90,
            'mark' => 'Fibrocimento',
            'image' => '.jpg',
            'typeSell' => 'Unidade',
            'status' => 'inativo',
            // 'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 10
            'category_id' => 7,
            'name' => 'espuma-expansiva',
            'label' => 'Espuma expansiva de poliuretano',
            'description' => 'Spray monocomponente, utilizada para fins domiciliares e profissionais.',
            'price' => 22.90,
            'mark' => 'Tekbond',
            'image' => '121004638cb84c5ceae.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 11
            'category_id' => 7,
            'name' => 'cola-contato',
            'label' => 'Cola de Contato 400g',
            'description' => 'Adesivo de Contato à base de borracha ',
            'price' => 16.90,
            'mark' => 'Tekbond',
            'image' => '120938638cb832c4b8c.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 12
            'category_id' => 1,
            'name' => 'telha-ceramica',
            'label' => 'Telha Cumeeira de Cerâmica 41x21cm 10mm',
            'description' => 'Telha Barrobello cerâmica para cobertura de telhados residenciais espessura 2cm.',
            'price' => 2.90,
            'mark' => 'Barrobello',
            'image' => '.jpg',
            'typeSell' => 'Unidade',
            'status' => 'inativo',
            // 'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 13
            'category_id' => 2,
            'name' => 'cabo-flexível 4mm',
            'label' => 'Cabo Flexível 4mm 100m',
            'description' => 'Cabo de cobre com acabamento em PVC, diametro nominal 4mm',
            'price' => 159.99,
            'mark' => 'Cobrecom',
            'image' => '120920638cb820ccbb6.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 14
            'category_id' => 2,
            'name' => 'cabo-coaxial',
            'label' => 'Cabo Coaxial Rg',
            'description' => 'Cabo coaxial rg 6 95 300mts',
            'price' => 449.90,
            'mark' => 'FoxLux',
            'image' => '.jpg',
            'typeSell' => 'Unidade',
            'status' => 'inativo',
            // 'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 15
            'category_id' => 2,
            'name' => 'disjuntor-bipolar-40A',
            'label' => 'Disjuntor bipolar 40A',
            'description' => 'Minidisjuntores Curva C - usados para proteção de circuitos em geral.',
            'price' => 39.90,
            'mark' => 'Steck',
            'image' => '120954638cb8424b1ac.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 16
            'category_id' => 2,
            'name' => 'cabo-flexível 2,5mm',
            'label' => 'Cabo Flexível 2,5mm 100m',
            'description' => 'Cabo de cobre com acabamento em PVC, diametro nominal 2,5mm',
            'price' => 109.90,
            'mark' => 'Cobrecom',
            'image' => '120916638cb81c6abc2.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 17
            'category_id' => 2,
            'name' => 'placa-interruptor 4X2 3',
            'label' => 'Placa 4X2 3 Módulos Com Suporte Miluz Schneider',
            'description' => 'Termoplástico com estabilização ABS-UV',
            'price' => 6.50,
            'mark' => 'Schneider',
            'image' => '.jpg',
            'typeSell' => 'Unidade',
            'status' => 'inativo',
            // 'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 18
            'category_id' => 2,
            'name' => 'placa-interruptor 4x2 2',
            'label' => 'Placa 4x2 2 modulos distanciados com suporte-preta',
            'description' => 'Termoplástico com estabilização ABS-UV',
            'price' => 5.50,
            'mark' => 'Fame',
            'image' => '.jpg',
            'typeSell' => 'Unidade',
            'status' => 'inativo',
            // 'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 19
            'category_id' => 3,
            'name' => 'tubo-soldavel-3-4 Tigre',
            'label' => 'Tubo PVC 6 metros 3/4"',
            'description' => 'Tubo de PVC de 25mm',
            'price' => 39.90,
            'mark' => 'Tigre',
            'image' => '121754638cba229fe04.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 20
            'category_id' => 3,
            'name' => 'sifão-sanfonado',
            'label' => 'Sifão Sanfonado Universal',
            'description' => 'Sifão Sanfonado de Polipropileno 40x50mm Branco',
            'price' => 12.90,
            'mark' => 'Astra',
            'image' => '121500638cb97498e09.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 21
            'category_id' => 3,
            'name' => 'ralo-linear-75cm',
            'label' => 'Ralo Linear c/ Tampa',
            'description' => 'Ralo Linear c/ Tampa Oculta 75cm Versatile Elleve',
            'price' => 259.90,
            'mark' => 'Versatile Elleve',
            'image' => '121448638cb968989ba.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 22
            'category_id' => 3,
            'name' => 'grelha-quadrada-10cm',
            'label' => 'Grelha quadrada de inox',
            'description' => 'Grelha quadrada de inox com caixilho e fecho 10cm VAD281 Esteves',
            'price' => 48.90,
            'mark' => 'Esteves',
            'image' => '121045638cb87533d89.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 23
            'category_id' => 5,
            'name' => 'tinta-acrilica-coralar',
            'label' => 'Coralar Econômica Acrílica',
            'description' => 'Tinta Coral Coralar Econômica Acrílica Fosca Branco 18 Litros',
            'price' => 219.90,
            'mark' => 'Coral',
            'image' => '121540638cb99c06e79.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 24
            'category_id' => 5,
            'name' => 'lixa-parede-220',
            'label' => 'Lixa Norton para Parede',
            'description' => 'Lixa Norton para Parede 22,5X27,5cm Gramatura Vermelho 220',
            'price' => 1.35,
            'mark' => 'Norton',
            'image' => '121054638cb87e5c631.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 25
            'category_id' => 5,
            'name' => 'tinta-acrilica-quartzolit-3,6l',
            'label' => 'Tinta Nova Eco Parede',
            'description' => 'Tinta Acrílica Nova Eco p/ Parede 3,6L Branco Neve Quartzolit',
            'price' => 45.90,
            'mark' => 'Quartzolit',
            'image' => '121608638cb9b8d38b8.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 26
            'category_id' => 5,
            'name' => 'tinta-acrilica-rende-muito-fosca-20l',
            'label' => 'Coral Rende Muito 20L',
            'description' => 'Tinta Coral Acrílica Rende Muito Fosca Branco 20 Litros',
            'price' => 359.90,
            'mark' => 'Coral',
            'image' => '121741638cba152266c.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 27
            'category_id' => 1,
            'name' => 'massa-corrida-25kg',
            'label' => 'Massa Corrida 25Kg',
            'description' => 'Coral Massa Corrida 25kg',
            'price' => 94.90,
            'mark' => 'Coral',
            'image' => '121106638cb88a4c3b7.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 28
            'category_id' => 4,
            'name' => 'fechadura-externa-zamac',
            'label' => 'Fechadura externa de aço',
            'description' => 'Fechadura externa de aço zamac Stilo com espelho bronze latonada MGM',
            'price' => 53.90,
            'mark' => 'MGM',
            'image' => '121038638cb86e88c24.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 29
            'category_id' => 4,
            'name' => 'parafuso-drywall-25mm',
            'label' => 'Parafuso drywall 25mm',
            'description' => 'Parafuso para drywall ponta agulha cabeça trombeta 25mm 1000 unidades Placo',
            'price' => 62.90,
            'mark' => 'Placo',
            'image' => '121134638cb8a6d8923.jpg',
            'typeSell' => 'Pacote',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 30
            'category_id' => 4,
            'name' => 'parafuso-chata-06mm-bucha',
            'label' => 'Parafuso cabeça chata',
            'description' => 'Parafuso cabeça chata bucha de nylon 06mm 30 unidades Bemfixa',
            'price' => 18.90,
            'mark' => 'Bemfixa',
            'image' => '121118638cb896420f3.jpg',
            'typeSell' => 'Pacote',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 31
            'category_id' => 4,
            'name' => 'fechadura-eletronica- Fixo-FX2000',
            'label' => 'Fechadura Eletrônica',
            'description' => 'Fechadura Eletrônica de Cilindro Fixo FX2000 Intelbrás',
            'price' => 279.90,
            'mark' => 'Intelbrás',
            'image' => '121031638cb8670c24a.jpg',
            'typeSell' => 'Unidade',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            // ID 32
            'category_id' => 4,
            'name' => 'parafuso-madeira-4,8x40mm',
            'label' => 'Parafuso para madeira',
            'description' => 'Parafuso madeira fenda simples cabeça chata 4,8x40mm 10 unidades Bemfixa',
            'price' => 10.90,
            'mark' => 'Bemfixa',
            'image' => '121153638cb8b96dd5f.jpg',
            'typeSell' => 'Pacote',
            'status' => 'ativo',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);
    }
}
