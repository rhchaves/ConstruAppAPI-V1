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
            // 'sku_id' => '111',
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'fita-isolante',
            'label' => 'Fita Isolante',
            'description' => 'Fita isolande de alta isolação e fixação para todos os ambientes',
            'price' => 7.90,
            'product_mark' => '3M',
            'image' => 'images/6ozIAWMBMG6F1IIfbNUTlyWWGVpskM0bvlRTb9Ry.jpg',
            //'created_by' => 1,
            //'updated_by' => 2,
            // 'image' => 'storage\images\6ozIAWMBMG6F1IIfbNUTlyWWGVpskM0bvlRTb9Ry.jpg',
        ]);

        Product::create([
            // 'sku_id' => '222',
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'cola-pvc-tigre',
            'label' => 'Cola PVC Tigre',
            'description' => 'Cola para tubo PVC de fixação rápida e segura contra vazamento.',
            'price' => 5.90,
            'product_mark' => 'Tigre',
            'image' => 'images/AoVmW5MuoIjfd88uvcZSRlfzZgwJN5Iwgqf8aYfz.png',
            //'created_by' => 2,
            //'updated_by' => 2,
        ]);

        Product::create([
            // 'sku_id' => '333',
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'conexao-t-rosca3/4',
            'label' => 'Conexão "T" com rosca 3/4"',
            'description' => 'Conexão em formato "T" c/ rosca 3/4" para toneiras',
            'price' => 4.90,
            'product_mark' => 'Tigre',
            'image' => 'images/tDEWxfmDRnZWIpzjxdIvXk8jtDL4IRSs2yAKODdh.png',
            //'created_by' => 2,
            //'updated_by' => 2,
        ]);

        Product::create([
            // 'sku_id' => '444',
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'pincel-tigre',
            'label' => 'Pincel Tigre',
            'description' => 'Pincel de 2" resistente e durável',
            'price' => 6.90,
            'product_mark' => 'Tigre',
            'image' => 'images/NcsnO8Ibzx0sXhzhethirbsjJIs1PhVGTIPJ2rl2.png',
            //'created_by' => 2,
            //'updated_by' => 5,
        ]);

        Product::create([
            // 'sku_id' => '555',
            'category_id' => 1,
            //'category' => 'construcao',
            'name' => 'saco-de-areia',
            'label' => 'Saco de Areia',
            'description' => 'Saco de areia lavada de 20Kg',
            'price' => 10.90,
            'product_mark' => 's/ Marca',
            'image' => 'images/Cd1joG9WZsmZj5ueyhaQ7vwp07T3RdeTgHmP9G3u.png',
            //'created_by' => 2,
            //'updated_by' => 6,
        ]);

        Product::create([
            // 'sku_id' => '666',
            'category_id' => 1,
            //'category' => 'construcao',
            'name' => 'saco-de-pedra',
            'label' => 'Saco de Pedra',
            'description' => 'Saco de pedra com 20kg tipo nº 2',
            'price' => 9.90,
            'product_mark' => 's/ Marca',
            'image' => 'images/tp9zyySylAnsiTgFGnDKiJxi1TJrudq9O8MfxGU1.png',
            //'created_by' => 5,
            //'updated_by' => 5,
        ]);

        Product::create([
            // 'sku_id' => '777',
            'category_id' => 5,
            //'category' => 'tintas',
            'name' => 'tinta-esmalte-preta-coral',
            'label' => 'Tinta Esmalte Coral Preto',
            'description' => 'Tinta esmalte sintetico de cor preta',
            'price' => 30.90,
            'product_mark' => 'Coral',
            'image' => 'images/UtnXCoyU3I7DGoJL3L2M4eB2NVGN3UKaeemsvXPC.jpg',
            //'created_by' => 5,
            //'updated_by' => 6,
        ]);

        Product::create([
            // 'sku_id' => '888',
            'category_id' => 6,
            //'category' => 'ferramentas',
            'name' => 'alicate-universal-gedore',
            'label' => 'Alicate Universal Gedore',
            'description' => 'Alicate universal multiuso com isolação de 1000V',
            'price' => 60.90,
            'product_mark' => 'Gedore',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 6,
            //'updated_by' => 6,
        ]);

        Product::create([
            'category_id' => 1,
            //'category' => 'construcao',
            'name' => 'telha-ondulada',
            'label' => 'Telha Confibra Ondulada de Fibrocimento',
            'description' => 'Telha de Fibrocimento P7 – 5mm.',
            'price' => 49.90,
            'product_mark' => 'Fibrocimento',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 7,
            //'category' => 'outros',
            'name' => 'espuma-expansiva',
            'label' => 'Espuma expansiva de poliuretano',
            'description' => 'Spray monocomponente, utilizada para fins domiciliares e profissionais.',
            'price' => 22.90,
            'product_mark' => 'Tekbond',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 7,
            //'category' => 'outros',
            'name' => 'cola-contato',
            'label' => 'Cola de Contato 400g',
            'description' => 'Adesivo de Contato à base de borracha ',
            'price' => 16.90,
            'product_mark' => 'Tekbond',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 1,
            //'category' => 'construcao',
            'name' => 'telha-ceramica',
            'label' => 'Telha Cumeeira de Cerâmica 41x21cm 10mm',
            'description' => 'Telha Barrobello cerâmica para cobertura de telhados residenciais espessura 2cm.',
            'price' => 2.90,
            'product_mark' => 'Barrobello',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'cabo-flexível 4mm',
            'label' => 'Cabo Flexível com até 750V 4mm cores 100 metros Cobrecom',
            'description' => 'Cabo de cobre com acabamento em PVC, diametro nominal 4mm',
            'price' => 159.99,
            'product_mark' => 'Cobrecom',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'cabo-coaxial',
            'label' => 'Cabo Coaxial Rg',
            'description' => 'Cabo coaxial rg 6 95 300mts',
            'price' => 449.90,
            'product_mark' => 'FoxLux',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'disjuntor-bipolar-40A',
            'label' => 'Disjuntor bipolar 40A curva C Steck',
            'description' => 'Minidisjuntores Curva C - usados para proteção de circuitos em geral.',
            'price' => 39.90,
            'product_mark' => 'Steck',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'cabo-flexível 2,5mm',
            'label' => 'Cabo Flexível com até 750V 2,5mm cores 100 metros Cobrecom',
            'description' => 'Cabo de cobre com acabamento em PVC, diametro nominal 2,5mm',
            'price' => 109.90,
            'product_mark' => '',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'placa-interruptor 4X2 3',
            'label' => 'Placa 4X2 3 Módulos Com Suporte Miluz Schneider',
            'description' => 'Termoplástico com estabilização ABS-UV',
            'price' => 6.50,
            'product_mark' => 'Schneider',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 2,
            //'category' => 'eletrica',
            'name' => 'placa-interruptor 4x2 2',
            'label' => 'Placa 4x2 2 modulos distanciados com suporte-preta',
            'description' => 'Termoplástico com estabilização ABS-UV',
            'price' => 5.50,
            'product_mark' => 'Fame',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'tubo-soldavel-3-4 Tigre',
            'label' => 'Tubo soldável 6 metros 3/4" Tigre',
            'description' => 'Tubo de PVC de 25mm',
            'price' => 39.90,
            'product_mark' => 'Tigre',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'sifão-sanfonado',
            'label' => 'Sifão Astra Sanfonado Universal ',
            'description' => 'Sifão Sanfonado de Polipropileno 40x50mm Branco',
            'price' => 12.90,
            'product_mark' => 'Astra',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'ralo-linear-75cm',
            'label' => 'Ralo Linear c/ Tampa',
            'description' => 'Ralo Linear c/ Tampa Oculta 75cm Versatile Elleve',
            'price' => 259.90,
            'product_mark' => 'Versatile Elleve',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 3,
            //'category' => 'hidraulica',
            'name' => 'grelha-quadrada-10cm',
            'label' => 'Grelha quadrada de inox',
            'description' => 'Grelha quadrada de inox com caixilho e fecho 10cm VAD281 Esteves',
            'price' => 48.90,
            'product_mark' => 'Esteves',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 5,
            //'category' => 'tintas',
            'name' => 'tinta-acrilica',
            'label' => 'Tinta Coral Coralar Econômica Acrílica',
            'description' => 'Tinta Coral Coralar Econômica Acrílica Fosca Branco 18 Litros',
            'price' => 219.90,
            'product_mark' => 'Coral',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 5,
            //'category' => 'tintas',
            'name' => 'lixa-parede-220',
            'label' => 'Lixa Norton para Parede',
            'description' => 'Lixa Norton para Parede 22,5X27,5cm Gramatura Vermelho 220',
            'price' => 1.35,
            'product_mark' => 'Norton',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 5,
            //'category' => 'tintas',
            'name' => 'tinta-acrilica 3,6L',
            'label' => 'Tinta Acrílica Nova Eco p/ Parede',
            'description' => 'Tinta Acrílica Nova Eco p/ Parede 3,6L Branco Neve Quartzolit',
            'price' => 45.90,
            'product_mark' => 'Quartzolit',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 5,
            //'category' => 'tintas',
            'name' => 'tinta-acrilica-rende-muito-fosca-20l',
            'label' => 'Tinta Coral Acrílica Rende Muito Fosca 20L',
            'description' => 'Tinta Coral Acrílica Rende Muito Fosca Branco 20 Litros',
            'price' => 359.90,
            'product_mark' => 'Coral',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 1,
            //'category' => 'construcao',
            'name' => 'massa-corrida-25kg',
            'label' => 'Massa Corrida 25Kg',
            'description' => 'Coral Massa Corrida 25kg',
            'price' => 94.90,
            'product_mark' => 'Coral',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 4,
            //'category' => 'ferragens',
            'name' => 'fechadura-externa-zamac',
            'label' => 'Fechadura externa de aço',
            'description' => 'Fechadura externa de aço zamac Stilo com espelho bronze latonada MGM',
            'price' => 53.90,
            'product_mark' => 'MGM',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 4,
            //'category' => 'ferragens',
            'name' => 'parafuso-drywall-25mm',
            'label' => 'Parafuso drywall 25mm',
            'description' => 'Parafuso para drywall ponta agulha cabeça trombeta 25mm 1000 unidades Placo',
            'price' => 62.90,
            'product_mark' => 'Placo',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 4,
            //'category' => 'ferragens',
            'name' => 'parafuso-chata-06mm-bucha',
            'label' => 'Parafuso cabeça chata',
            'description' => 'Parafuso cabeça chata bucha de nylon 06mm 30 unidades Bemfixa',
            'price' => 18.90,
            'product_mark' => 'Bemfixa',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 4,
            //'category' => 'ferragens',
            'name' => 'fechadura-eletronica- Fixo-FX2000',
            'label' => 'Fechadura Eletrônica',
            'description' => 'Fechadura Eletrônica de Cilindro Fixo FX2000 Intelbrás',
            'price' => 279.90,
            'product_mark' => 'Intelbrás',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);

        Product::create([
            'category_id' => 4,
            //'category' => 'ferragens',
            'name' => 'parafuso-madeira-4,8x40mm',
            'label' => 'Parafuso para madeira',
            'description' => 'Parafuso madeira fenda simples cabeça chata 4,8x40mm 10 unidades Bemfixa',
            'price' => 10.90,
            'product_mark' => 'Bemfixa',
            'image' => 'images/kBYymh3z8u13OFYOOla6NCA1rPyRzoKuo34TlBRo.jpg',
            //'created_by' => 1,
            //'updated_by' => 1,
        ]);
    }
}
