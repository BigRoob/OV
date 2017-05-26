<?php

use Illuminate\Database\Seeder;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procedures')->insert([
           /* DIAGNOSTICS */
            ['name' => 'Consulta Odontológica Inicial','specialty_id' => 1,'procedure_code' => '81000065'],
            ['name' => 'Consulta Odontológica de Urgência','specialty_id' => 1,'procedure_code' => '81000049'],
            ['name' => 'Consulta Odontológica para Avaliação técnica de Auditoria / Perícia','specialty_id' => 1,'procedure_code' => '81000073'],
            ['name' => 'Consulta Odontológica para Avaliação técnica de Auditoria / Perícia','specialty_id' => 1,'procedure_code' => '81000073'],
            /* RADIOLOGIA */
            ['name' => 'Radiografia Periapical','specialty_id' => 3,'procedure_code' => '81000421'],
            ['name' => 'Radiografia Interproximal – Bite-Wing','specialty_id' => 3,'procedure_code' => '81000375'],
            ['name' => 'Radiografia Oclusal','specialty_id' => 3,'procedure_code' => '81000383'],
            ['name' => 'Radiografia Postero-anterior','specialty_id' => 3,'procedure_code' => '81000430'],
            ['name' => 'Radiografia da ATM','specialty_id' => 3,'procedure_code' => '81000340'],
            ['name' => 'Radiografia Panorâmica de mandíbula / maxila (ortopantomografia)','specialty_id' => 3,'procedure_code' => '81000405'],
            ['name' => 'Telerradiografia com Traçado Cefalométrico','specialty_id' => 3,'procedure_code' => '81000480'],
            ['name' => 'Telerradiografia','specialty_id' => 3,'procedure_code' => '81000472'],
            ['name' => 'Radiografia da mão e punho – carpal','specialty_id' => 3,'procedure_code' => '81000367'],
            ['name' => 'Modelos Ortodônticos','specialty_id' => 3,'procedure_code' => '81000308'],
            ['name' => 'Slides','specialty_id' => 3,'procedure_code' => '81000456'],
            ['name' => 'Fotografia','specialty_id' => 3,'procedure_code' => '81000278'],
            ['name' => 'Tomografia Convencional – Linear ou Multi-Direcional','specialty_id' => 3,'procedure_code' => '81000529'],
            ['name' => 'Radiografia Panorâmica de Mandíbula / Maxila (ortopantomografia) com
Traçado Cefalométrico','specialty_id' => 3,'procedure_code' => '81000413'],
            ['name' => 'Protocolo de TOMOGRAFIA COMPUTADORIZADA','specialty_id' => 3,'procedure_code' => '90020140',],
            ['name' => 'Protocolo de TOMOGRAFIA COMPUTADORIZADA - por segmento','specialty_id' => 3,'procedure_code' => '90020141'],
            ['name' => 'Protocolo de TOMOGRAFIA COMPUTADORIZADA – unilateral','specialty_id' => 3,'procedure_code' => '90020142'],
            ['name' => 'Protocolo de TOMOGRAFIA COMPUTADORIZADA - mento = queixo)','specialty_id' => 3,'procedure_code' => '90020143'],
            ['name' => 'Protocolo de TOMOGRAFIA COMPUTADORIZADA para ATM – unilateral)','specialty_id' => 3,'procedure_code' => '90020144'],
            /* TESTES E EXAMES DE LABORATÓRIO */
            ['name' => 'Teste de PH Salivar','specialty_id' => 4,'procedure_code' => '84000252'],
            ['name' => 'Teste Fluxo Salivar','specialty_id' => 4,'procedure_code' => '84000244'],
            /* PREVENÇÃO */
            ['name' => 'Profilaxia – Polimento Coronário','specialty_id' => 5,'procedure_code' => '84000198'],
            ['name' => 'Aplicação Tópica de Flúor','specialty_id' => 5,'procedure_code' => '84000090'],
            ['name' => 'Raspagem Supra-Gengival','specialty_id' => 5,'procedure_code' => '85300047'],
            ['name' => 'Controle de Biofilme (Placa Bacteriana)','specialty_id' => 5,'procedure_code' => '84000163'],
            /* ODONTOPEDIATRIA */
            ['name' => 'Aplicação Tópica de Verniz Fluoretado','specialty_id' => 6,'procedure_code' => '84000112'],
            ['name' => 'Aplicação de Selante de Fossulas e Fissuras','specialty_id' => 6,'procedure_code' => '84000074'],
            ['name' => 'Aplicação de Selante – Técnica Invasiva','specialty_id' => 6,'procedure_code' => '84000058'],
            ['name' => 'Aplicação de Cariostático','specialty_id' => 6,'procedure_code' => '84000031'],
            ['name' => 'Remineralizacão','specialty_id' => 6,'procedure_code' => '84000201'],
            ['name' => 'Adequação do meio bucal c/ ionômero de vidro (por hemiarcada)','specialty_id' => 6,'procedure_code' => '90050215'],
            ['name' => 'Adequação do meio bucal c/ IRM (por hemiarcada)','specialty_id' => 6,'procedure_code' => '90050216'],
            ['name' => 'Restauração em Ionômero de vidro','specialty_id' => 6,'procedure_code' => '85100137'],
            ['name' => 'Restauração Atraumática em dente decíduo','specialty_id' => 6,'procedure_code' => '83000135'],
            ['name' => 'Coroa de Aço em dente decíduo','specialty_id' => 6,'procedure_code' => '83000046'],
            ['name' => 'Capeamento Pulpar direto','specialty_id' => 6,'procedure_code' => '85100013'],
            ['name' => 'Pulpotomia em dente decíduo','specialty_id' => 6,'procedure_code' => '83000127'],
            ['name' => 'Tratamento Endodôntico em dente decíduo','specialty_id' => 6,'procedure_code' => '83000151'],
            ['name' => 'Exodontia de Decíduos','specialty_id' => 6,'procedure_code' => '83000089'],
            ['name' => 'Condicionamento em Odontologia','specialty_id' => 6,'procedure_code' => '81000014'],
            ['name' => 'Ulectomia','specialty_id' => 6,'procedure_code' => '82001707'],
            ['name' => 'Atividade Educativa para Pais e/ou cuidadores','specialty_id' => 6,'procedure_code' => '87000024'],
            /* DENTÍSTICA */
            ['name' => 'Restauração de Amálgama – 1 face','specialty_id' => 7,'procedure_code' => '85100099'],
            ['name' => 'Restauração de Amálgama – 2 faces','specialty_id' => 7,'procedure_code' => '85100102'],
            ['name' => 'Restauração de Amálgama – 3 faces','specialty_id' => 7,'procedure_code' => '85100110'],
            ['name' => 'Restauração de Amálgama – 4 faces','specialty_id' => 7,'procedure_code' => '85100129'],
            ['name' => 'Restauração de Resina Fotopolimerizável – 1 faces','specialty_id' => 7,'procedure_code' => '85100196'],
            ['name' => 'Restauração de Resina Fotopolimerizável – 2 faces','specialty_id' => 7,'procedure_code' => '85100200'],
            ['name' => 'Restauração de Resina Fotopolimerizável – 3 ou 4 faces','specialty_id' => 7,'procedure_code' => '85100218'],
            ['name' => 'Faceta Direta em Resina Fotopolimerizável','specialty_id' => 7,'procedure_code' => '85100064'],
            ['name' => 'Núcleo de Preenchimento em Ionomero de Vidro','specialty_id' => 7,'procedure_code' => '90060322'],
            ['name' => 'Núcleo de Preenchimento','specialty_id' => 7,'procedure_code' => '85400211'],
            ['name' => 'Pinos de retenção (excluindo a restauração)','specialty_id' => 7,'procedure_code' => '90060325'],
            ['name' => 'Imobilização Dentária em Dentes Permanentes','specialty_id' => 7,'procedure_code' => '85300020'],
            ['name' => 'Ajuste Oclusal por Desgaste Seletivo','specialty_id' => 7,'procedure_code' => '85400025'],
            /* ENDODONTIA */
            ['name' => 'Tratamento Endodôntico Unirradicular','specialty_id' => 8,'procedure_code' => '85200166'],
            ['name' => 'Tratamento Endodôntico Birradicular','specialty_id' => 8,'procedure_code' => '85200140'],
            ['name' => 'Tratamento Endodôntico Multirradicular','specialty_id' => 8,'procedure_code' => '85200158'],
            ['name' => 'Tratamento Endodôntico 04 condutos','specialty_id' => 8,'procedure_code' => '90070413'],
            ['name' => 'Retratamento Endodôntico Unirradicular','specialty_id' => 8,'procedure_code' => '85200115'],
            ['name' => 'Retratamento Endodôntico Birradicular','specialty_id' => 8,'procedure_code' => '85200093'],
            ['name' => 'Retratamento Endodôntico Multirradicular','specialty_id' => 8,'procedure_code' => '85200107'],
            ['name' => 'Retratamento Endodôntico 04 condutos','specialty_id' => 8,'procedure_code' => '90070417'],
            ['name' => 'Tratamento de Perfuração Endodontica','specialty_id' => 8,'procedure_code' => '85200123'],
            ['name' => 'Remoção de Núcleo Intrarradicular','specialty_id' => 8,'procedure_code' => '85200077'],
            ['name' => 'Capeamento Pulpar (excluindo restauração final)','specialty_id' => 8,'procedure_code' => '90070420'],
            ['name' => 'Pulpotomia','specialty_id' => 8,'procedure_code' => '85200042'],
            ['name' => 'Clareamento de Dente Desvitalizado','specialty_id' => 8,'procedure_code' => '85200018'],
            ['name' => 'Preparo para Núcleo Intrarradicular','specialty_id' => 8,'procedure_code' => '85200026'],
            ['name' => 'Tratamento Endodôntico de Dente com Rizogenese
Incompleta','specialty_id' => 8,'procedure_code' => '85200131'],
            ['name' => 'Pulpectomia','specialty_id' => 8,'procedure_code' => '85200034'],
            /* PERIODONTIA */
            ['name' => 'Raspagem Sub-Gengival / Alisamento Radicular','specialty_id' => 9,'procedure_code' => '85300039'],
            ['name' => 'Tratamento não cirúrgico da Periodontite avançada p/ seguimento','specialty_id' => 9,'procedure_code' => '90080511'],
            ['name' => 'Tratamento de Obscesso Periodontal Agudo','specialty_id' => 9,'procedure_code' => '85300063'],
            ['name' => 'Dessensibilização Dentária - p/ segmento','specialty_id' => 9,'procedure_code' => '85300012'],
            ['name' => 'Remoção Fatores de Retenção do Biofilme Dental e Placa Bacteriana','specialty_id' => 9,'procedure_code' => '85300055'],
            ['name' => 'Gengivectomia','specialty_id' => 9,'procedure_code' => '82000921'],
            ['name' => 'Cirurgia Periodontal a Retalho','specialty_id' => 9,'procedure_code' => '82000417'],
            ['name' => 'Cunha Proximal','specialty_id' => 9,'procedure_code' => '82000557'],
            ['name' => 'Aprofundamento / Aumento de vestíbulo','specialty_id' => 9,'procedure_code' => '82000190'],
            ['name' => 'Enxerto Pediculado','specialty_id' => 9,'procedure_code' => '82000689'],
            ['name' => 'Enxerto Gengival Livre','specialty_id' => 9,'procedure_code' => '82000662'],
            ['name' => 'Odonto-Secção','specialty_id' => 9,'procedure_code' => '82001073'],
            ['name' => 'Amputação Radicular s/ Obturação Retrógrada','specialty_id' => 9,'procedure_code' => '82000069'],
            ['name' => 'Amputação Radicular c/ Obturação Retrógrada','specialty_id' => 9,'procedure_code' => '82000050'],
            /* PRÓTESE */
            ['name' => 'Planejamento em Prótese','specialty_id' => 10,'procedure_code' => '90090610'],
            ['name' => 'Diagnóstico por meio de encerramento','specialty_id' => 10,'procedure_code' => '81000243'],
            ['name' => 'Ajuste Oclusal Protético','specialty_id' => 10,'procedure_code' => '90090612'],
            ['name' => 'Restauração Metálica Fundida','specialty_id' => 10,'procedure_code' => '85400556'],
            ['name' => 'Restauração em Cerâmica Pura – Inlay','specialty_id' => 10,'procedure_code' => '85400513'],
            ['name' => 'Restauração em Cerâmica Pura – Onlay','specialty_id' => 10,'procedure_code' => '85400521'],
            ['name' => 'Remoção de Trabalho Protético','specialty_id' => 10,'procedure_code' => '85400505'],
            ['name' => 'Recimentação de Trabalho Protético','specialty_id' => 10,'procedure_code' => '85400467'],
            ['name' => 'Núcleo Metálico Fundido','specialty_id' => 10,'procedure_code' => '85400220'],
            ['name' => 'Coroa Provisória sem Pino','specialty_id' => 10,'procedure_code' => '85400084'],
            ['name' => 'Coroa Provisória com Pino','specialty_id' => 10,'procedure_code' => '85400076'],
            ['name' => 'Reembasamento de Coroa Provisória','specialty_id' => 10,'procedure_code' => '85400475'],
            ['name' => 'Coroa Total Acrílica Prensada','specialty_id' => 10,'procedure_code' => '85400092'],
            ['name' => 'Coroa Total em Cerâmica Pura','specialty_id' => 10,'procedure_code' => '85400106'],
            ['name' => 'Coroa Total Metalo-Cerâmica','specialty_id' => 10,'procedure_code' => '85400157'],
            ['name' => 'Coroa Total Metaloplástica Resina Acrílica','specialty_id' => 10,'procedure_code' => '85400173'],
            ['name' => 'Coroa Total Metálica','specialty_id' => 10,'procedure_code' => '85400149'],
            ['name' => 'Coroa 3/4 ou 4/5','specialty_id' => 10,'procedure_code' => '90090626'],
            ['name' => 'Faceta em Cerâmica Pura','specialty_id' => 10,'procedure_code' => '85400181'],
            ['name' => 'Prótese Parcial Fixa em Metalo Cerâmica','specialty_id' => 10,'procedure_code' => '85400335'],
            ['name' => 'Prótese Parcial Fixa em Metalo Plástica','specialty_id' => 10,'procedure_code' => '85400343'],
            ['name' => 'Prótese Fixa Adesiva Direta (Prov.)','specialty_id' => 10,'procedure_code' => '85400289'],
            ['name' => 'Prótese Fixa Adesiva Indireta Metalo-Cerâmica (até 3 elementos)','specialty_id' => 10,'procedure_code' => '85400300'],
            ['name' => 'Prótese Fixa Adesiva Indireta Metalo-Plástica','specialty_id' => 10,'procedure_code' => '85400319'],
            ['name' => 'Prótese Parcial Removível Provisória em Acrílico com ou sem Grampos','specialty_id' => 10,'procedure_code' => '85400394'],
            ['name' => 'Prótese Parcial Removível com Grampos Bilateral','specialty_id' => 10,'procedure_code' => '85400386'],
            ['name' => 'Prótese Parcial Removível com Encaixes de Precisão ou de Semi Precisão','specialty_id' => 10,'procedure_code' => '85400378'],
            ['name' => 'Encaixe Fêmea ou Macho por Elemento','specialty_id' => 10,'procedure_code' => '90090636'],
            ['name' => 'Reembasamento de Prótese Total ou Parcial – imediato (em consultório)','specialty_id' => 10,'procedure_code' => '85400483'],
            ['name' => 'Prótese Total','specialty_id' => 10,'procedure_code' => '85400408'],
            ['name' => 'Prótese Total Incolor','specialty_id' => 10,'procedure_code' => '85400424'],
            ['name' => 'Prótese Total Imediata','specialty_id' => 10,'procedure_code' => '85400416'],
            ['name' => 'Reembasamento de Prótese Total ou Parcial – imediato (em laboratório)','specialty_id' => 10,'procedure_code' => '85400491'],
            ['name' => 'Guia Cirúrgico para Prótese Imediata','specialty_id' => 10,'procedure_code' => '85400203'],
            ['name' => 'Jig ou Front-Plato','specialty_id' => 10,'procedure_code' => '90090645'],
            ['name' => 'Conserto em Prótese Total (em Consultório e em Laboratório)','specialty_id' => 10,'procedure_code' => '85400050'],
            ['name' => 'Órtese Miorrelaxante (Placa Oclusal Estabilizadora)','specialty_id' => 10,'procedure_code' => '85400246']],
            /* CIRURGIA */
            ['name' => 'Bridectomia','specialty_id' => 11,'procedure_code' => '82000298'],
            ['name' => 'Acompanhamento de Tratamento / Procedimento Cirúrgico em Ontologia','specialty_id' => 11,'procedure_code' => '82000026'],
            ['name' => 'Exodontia Simples de Permanente','specialty_id' => 11,'procedure_code' => '82000875'],
            ['name' => 'Exodontia a Retalho','specialty_id' => 11,'procedure_code' => '82000816'],
            ['name' => 'Exodontia de Raiz Residual','specialty_id' => 11,'procedure_code' => '82000859'],
            ['name' => 'Alveoloplastia','specialty_id' => 11,'procedure_code' => '82000034'],
            ['name' => 'Biópsia de Boca','specialty_id' => 11,'procedure_code' => '82000239'],
            ['name' => 'Biópsia de Glândula Salivar','specialty_id' => 11,'procedure_code' => '82000247'],
            ['name' => 'Biópsia de Lábio','specialty_id' => 11,'procedure_code' => '82000255'],
            ['name' => 'Biópsia de Língua','specialty_id' => 11,'procedure_code' => '82000263'],
            ['name' => 'Biópsia de Mandíbula','specialty_id' => 11,'procedure_code' => '82000271'],
            ['name' => 'Biópsia de Maxila','specialty_id' => 11,'procedure_code' => '82000280'],
            ['name' => 'Reconstrução de Sulco Gengivo-Labial','specialty_id' => 11,'procedure_code' => '82001154'],
            ['name' => 'Apicetomia Unirradiculares sem Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000182'],
            ['name' => 'Apicetomia Unirradiculares com Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000174'],
            ['name' => 'Apicetomia Birradiculares sem Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000085'],
            ['name' => 'Apicetomia Birradiculares com Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000077'],
            ['name' => 'Apicetomia Multirradiculares sem Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000166'],
            ['name' => 'Apicetomia Multirradiculares com Obturação Retrógrada','specialty_id' => 11,'procedure_code' => '82000158'],
            ['name' => 'Frenulectomia Labial','specialty_id' => 11,'procedure_code' => '82000883'],
            ['name' => 'Frenulotomia Labial','specialty_id' => 11,'procedure_code' => '82000905'],
            ['name' => 'Frenulectomia Lingual','specialty_id' => 11,'procedure_code' => '82000891'],
            ['name' => 'Frenulotomia Lingual','specialty_id' => 11,'procedure_code' => '82000913'],
            ['name' => 'Tratamento Cirúrgico de Bridas Constritivas da Região Buco-Maxilo-Facial','specialty_id' => 11,'procedure_code' => '82001545'],
            ['name' => 'Remoção de Dentes Inclusos / Impactados','specialty_id' => 11,'procedure_code' => '82001286'],
            ['name' => 'Remoção de Odontoma','specialty_id' => 11,'procedure_code' => '82001367'],
            ['name' => 'Tratamento Cirúrgico de Tumores Benignos de Tecidos Osseos/Cartinagilosos
na Região Buco-Maxilo-Facial-Osteoma','specialty_id' => 11,'procedure_code' => '82001596'],
            ['name' => 'Exerese ou Excisão de Cistos Odontológicos','specialty_id' => 11,'procedure_code' => '82000786'],
            ['name' => 'Exerese ou Excisão de Mucocele','specialty_id' => 11,'procedure_code' => '82000794'],
            ['name' => 'Exerese ou Excisão de Cálculo Salivar','specialty_id' => 11,'procedure_code' => '82000778'],
            ['name' => 'Incisão e Drenagem Extra-Oral de Abscesso, Hematoma e/ou Flegmão da
Região Buco-Maxilo-Facial','specialty_id' => 11,'procedure_code' => '82001022'],
            /* ORTODONTIA */
            ['name' => 'Aparelho Ortodôntico Fixo','specialty_id' => 12,'procedure_code' => '86000098'],
            ['name' => 'Anéis ortodônticos c/ gancho','specialty_id' => 12,'procedure_code' => '90110814'],
            ['name' => 'Placa Lábio-Ativa (Bumper)','specialty_id' => 12,'procedure_code' => '86000535'],
            ['name' => 'Aparelho Extra-Bucal','specialty_id' => 12,'procedure_code' => '86000055'],
            ['name' => 'Mantenedor de Espaço Fixo','specialty_id' => 12,'procedure_code' => '83000097'],
            ['name' => 'Mantenedor de Espaço Removível','specialty_id' => 12,'procedure_code' => '83000100'],
            ['name' => 'Mentoneira','specialty_id' => 12,'procedure_code' => '86000390'],
            ['name' => 'Plano Inclinado','specialty_id' => 12,'procedure_code' => '86000551'],
            ['name' => 'Quadrihélice','specialty_id' => 12,'procedure_code' => '86000560'],
            ['name' => 'Manutenção de Aparelho Ortodôntico – Aparelho Removível','specialty_id' => 12,'procedure_code' => '86000373'],
            ['name' => 'Manutenção de Aparelho Ortodôntico – Aparelho Fixo','specialty_id' => 12,'procedure_code' => '86000357'],
            ['name' => 'Monobloco','specialty_id' => 12,'procedure_code' => '86000411'],
            ['name' => 'Modelo de estudos e plano de tratamento','specialty_id' => 12,'procedure_code' => '90110837'],
            ['name' => 'Placa Hawley','specialty_id' => 12,'procedure_code' => '86000462'],
            ['name' => 'Placa Hawley – com Torno Expansor','specialty_id' => 12,'procedure_code' => '86000470'],
            ['name' => 'Arco Lingual','specialty_id' => 12,'procedure_code' => '86000144'],
            ['name' => 'Contenção Fixa – por Arcada','specialty_id' => 12,'procedure_code' => '86000209'],
            ['name' => 'Disjuntor Palatino – Hyrax','specialty_id' => 12,'procedure_code' => '86000225'],
            ['name' => 'Disjuntor Palatino – Macnamara','specialty_id' => 12,'procedure_code' => '86000233'],
            ['name' => 'Modelador Elástico de Bimler','specialty_id' => 12,'procedure_code' => '86000403'],
            ['name' => 'Bionator de Balters','specialty_id' => 12,'procedure_code' => '86000179'],
            ['name' => 'Aparelho Ortodôntico Fixo Metálico Parcial','specialty_id' => 12,'procedure_code' => '86000110'],
            ['name' => 'Botão de Nance Fixo Superior','specialty_id' => 12,'procedure_code' => '86000195'],
            ['name' => 'Grade Palatina Fixa','specialty_id' => 12,'procedure_code' => '86000314'],
            ['name' => 'Grade Palatina Removível','specialty_id' => 12,'procedure_code' => '86000322'],
            ['name' => 'Regulador de função Frankel','specialty_id' => 12,'procedure_code' => '86000578'],
            ['name' => 'Barra Transpalatina Removível','specialty_id' => 12,'procedure_code' => '86000160'],
            ['name' => 'Barra Transpalatina Fixa','specialty_id' => 12,'procedure_code' => '86000152'],
            ['name' => 'Distalizador tipo Jones Jig','specialty_id' => 12,'procedure_code' => '86000284'],
            ['name' => 'Herbst Encapsulado','specialty_id' => 12,'procedure_code' => '86000330'],
            ['name' => 'Pistas Diretas de Planas','specialty_id' => 12,'procedure_code' => '86000438'],
            ['name' => 'Máscara Facial – Delaire e Tração Reserva','specialty_id' => 12,'procedure_code' => '86000381'],
            ['name' => 'Placa de Mordida Ortodôntica','specialty_id' => 12,'procedure_code' => '86000489'],
            ['name' => 'Aparelho Removível com Alças Bionator Invertida ou de Escheler','specialty_id' => 12,'procedure_code' => '86000128'],
            ['name' => 'Aparelho de Thurow','specialty_id' => 12,'procedure_code' => '86000047'],
            ['name' => 'Aparelho de Disfunção Têmpero-Mandibular (DTM)','specialty_id' => 12,'procedure_code' => '90110863'],
            ['name' => 'Distalizador de Hilgers','specialty_id' => 12,'procedure_code' => '86000250'],
            /* ORTODONTIA */
            ['name' => 'Implante Ósseo Integrado','specialty_id' => 13,'procedure_code' => '82000980'],
            ['name' => 'Coroa Total Metalo-Cerâmica sobre Implante','specialty_id' => 13,'procedure_code' => '85500038'],
            ['name' => 'Sedação Medicamentosa Ambulatorial em Odontologia','specialty_id' => 13,'procedure_code' => '82001456'],
            ['name' => 'Guia Cirúrgico para Implante','specialty_id' => 13,'procedure_code' => '85500062'],
            ['name' => 'Levantamento de Seio Maxilar com Osso Autógeno','specialty_id' => 13,'procedure_code' => '82001049'],
            ['name' => 'Protocolo Branemark 5 Implantes','specialty_id' => 13,'procedure_code' => '85500178'],
            ['name' => 'Protocolo Branemark 4 Implantes','specialty_id' => 13,'procedure_code' => '85500160'],
            ['name' => 'Elemento suspenso de prótese fixa em metalo ceramica – Pontico','specialty_id' => 13,'procedure_code' => '90120935']
        );
    }
}
