<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["hc_id" => 1, "name" => "ORGANIZACION TERPEL S.A.",  "nit" => "830095213-0"],
            ["hc_id" => 2, "name" => "DINO OIL S.A.S.",  "nit" => "900911634-3"],
            ["hc_id" => 3, "name" => "COMPAÑIA MULTINACIONAL DE TRANSPORTE MASIVO S.A.S.",  "nit" => "830115770-9"],
            ["hc_id" => 4, "name" => "GRUPO EDS AUTOGAS S.A.S.",  "nit" => "900459737-5"],
            ["hc_id" => 5, "name" => "REAL TRANSPORTADORA S.A.",  "nit" => "860005066-9"],
            ["hc_id" => 6, "name" => "INVERSIONES EN COMBUSTIBLES Y TRANSPORTES S.A.S. - ICOTRANS S.A.S.",  "nit" => "830068634-3"],
            ["hc_id" => 7, "name" => "COMBUSTIBLES DE COLOMBIA S.A.",  "nit" => "830513729-3"],
            ["hc_id" => 8, "name" => "CENCOSUD COLOMBIA S.A.",  "nit" => "900155107-1"],
            ["hc_id" => 9, "name" => "SISTEMAS OPERATIVOS MOVILES S.A. - SOMOS K",  "nit" => "830111317-7"],
            ["hc_id" => 10, "name" => "TRANSPORTES ESPECIALES COLEGIOS Y TURISMO S.A.",  "nit" => "860517112-7"],
            ["hc_id" => 11, "name" => "REPRESENTACIONES SANTA MARÍA S.A.S.",  "nit" => "830076635-4"],
            ["hc_id" => 12, "name" => "PRIMAX COLOMBIA S.A.",  "nit" => "860002554-8"],
            ["hc_id" => 14, "name" => "JULIO BORDA GONZALEZ",  "nit" => "2917960"],
            ["hc_id" => 15, "name" => "SERVICIOS INTEGRALES CAPITAL S.A.S.",  "nit" => "900567515-1"],
            ["hc_id" => 19, "name" => "RJ SERVI INGENIERIA S.A.S.",  "nit" => "800162078-0"],
            ["hc_id" => 20, "name" => "ESTACION DE SERVICIO CARRERA 50 S.A.S.",  "nit" => "800084124-7"],
            ["hc_id" => 24, "name" => "ENERGIA DE GAS S.A.S.",  "nit" => "900307572-5"],
            ["hc_id" => 26, "name" => "P&P DISTRIBUIDORES MINORISTAS DE COMBUSTIBLE S.A.S",  "nit" => "900415269-0"],
            ["hc_id" => 30, "name" => "PETROCENTRAL S.A.S.",  "nit" => "900902480-8"],
            ["hc_id" => 31, "name" => "PROMOTORA APOTEMA S.A.S.",  "nit" => "900800818-5"],
            ["hc_id" => 32, "name" => "SERVICIOS PARA VEHICULOS DE TRANSPORTE S.A. - SEVETER S.A.",  "nit" => "830088577-7"],
            ["hc_id" => 33, "name" => "MASIVO CAPITAL S.A.S. - EN REORGANIZACION",  "nit" => "900394791-2"],
            ["hc_id" => 34, "name" => "COMBUSTIBLES PARMALAT S.A.S.",  "nit" => "830001072-6"],
            ["hc_id" => 35, "name" => "METROBUS S.A.",  "nit" => "830073622-5"],
            ["hc_id" => 39, "name" => "INVERSIONES VITELLO & CIA LTDA",  "nit" => "800241578-0"],
            ["hc_id" => 41, "name" => "AUTOCENTRO INTERNACIONAL EL DORADO LTDA",  "nit" => "800069587-0"],
            ["hc_id" => 43, "name" => "GAS VEHICULAR COMPRIMIDO DE COLOMBIA S A S LA CUAL TAMBIEN SE PODRA DENOMINAR G V C TORO GAS S A S",  "nit" => "900041883-7"],
            ["hc_id" => 45, "name" => "GNE SOLUCIONES S.A.S.",  "nit" => "900072847-4"],
            ["hc_id" => 46, "name" => "INVERSIONES FAJARDO RONCANCIO LTDA",  "nit" => "900175676-4"],
            ["hc_id" => 47, "name" => "MANUEL GAITAN E HIJOS Y CIA. S. EN C.",  "nit" => "800045250-0"],
            ["hc_id" => 48, "name" => "STANDARD ENERGY COMPANY S.A.",  "nit" => "900026174-0"],
            ["hc_id" => 49, "name" => "COMBUSTIBLES VENECIA S.A.S.",  "nit" => "900510412-4"],
            ["hc_id" => 50, "name" => "CONSORCIO EXPRESS S.A.S.",  "nit" => "900365740-3"],
            ["hc_id" => 51, "name" => "INVERSIONES JUDI S.A.S.",  "nit" => "805017576-5"],
            ["hc_id" => 52, "name" => "C I INVERSIONES DALUMA S.A.S.",  "nit" => "830065871-9"],
            ["hc_id" => 53, "name" => "EXPRESS DEL FUTURO S.A.",  "nit" => "830060438-1"],
            ["hc_id" => 54, "name" => "SUNSET OPERATORS S.A.S.",  "nit" => "900327435-1"],
            ["hc_id" => 55, "name" => "COLOMBIANA DE COMBUSTIBLES CODECO S.A.S.",  "nit" => "830056886-0"],
            ["hc_id" => 56, "name" => "GMOVIL S.A.S.",  "nit" => "900364704-3"],
            ["hc_id" => 58, "name" => "DIORESCAR S.A.S.",  "nit" => "830041084-5"],
            ["hc_id" => 59, "name" => "AUTO CENTRO SANTANA S.A.S.",  "nit" => "860519967-6"],
            ["hc_id" => 60, "name" => "MAYA DURAN ALBERTO",  "nit" => "16217398-7"],
            ["hc_id" => 61, "name" => "ALV SERVICIOS Y SUMINISTROS LIMITADA",  "nit" => "800057938-0"],
            ["hc_id" => 65, "name" => "COMBUSTIBLES UNIGAS S.A.S",  "nit" => "830085008-4"],
            ["hc_id" => 66, "name" => "INVERSIONES LIGOL S.A.S.",  "nit" => "900055635-8"],
            ["hc_id" => 69, "name" => "LUIS CARLOS MARTINEZ VASQUEZ",  "nit" => "79148292-8"],
            ["hc_id" => 70, "name" => "CARLOS ESPAÑA TORRES",  "nit" => "2940294"],
            ["hc_id" => 71, "name" => "BRIOGAS S.A.",  "nit" => "900035396-7"],
            ["hc_id" => 72, "name" => "INVERSIONES DE COLOMBIA S&M LTDA",  "nit" => "900028789-9"],
            ["hc_id" => 75, "name" => "EL PROVEEDOR DE COMBUSTIBLES LTDA",  "nit" => "830135898-8"],
            ["hc_id" => 76, "name" => "ROMERO DUEÑAS Y CIA. LTDA",  "nit" => "860523018-7"],
            ["hc_id" => 77, "name" => "INVERSIONES MORENO BARRIGA & CIA. S. EN C.",  "nit" => "900250321-6"],
            ["hc_id" => 78, "name" => "MANUEL ARTURO GAITAN COPETE",  "nit" => "19390434"],
            ["hc_id" => 80, "name" => "ESTACION VERBENAL 187 S.A.S.",  "nit" => "900117527-8"],
            ["hc_id" => 81, "name" => "INVERSIONES LA PELUZA S.A.S.",  "nit" => "900476357-1"],
            ["hc_id" => 82, "name" => "COMERCIAL AVANADE S.A.S.",  "nit" => "900962785-5"],
            ["hc_id" => 83, "name" => "MOVILGAS LTDA.",  "nit" => "900045328-9"],
            ["hc_id" => 86, "name" => "COMPAÑIA NACIONAL DE HIDROCARBUROS S.A.S.",  "nit" => "830046254-3"],
            ["hc_id" => 87, "name" => "INVERSIONES JR A & A LTDA",  "nit" => "900120482-6"],
            ["hc_id" => 88, "name" => "COPEC S.A.S.",  "nit" => "830147064-4"],
            ["hc_id" => 89, "name" => "FLOTA LA MACARENA S.A.",  "nit" => "860002566-6"],
            ["hc_id" => 91, "name" => "NEW LIFE INVERSIONES S.A.S.",  "nit" => "830094448-1"],
            ["hc_id" => 92, "name" => "INVERSIONES RADIO TAXI S.A.",  "nit" => "830105887-9"],
            ["hc_id" => 94, "name" => "SISTEMA INTEGRADO DE TRANSPORTE SI 99 S.A.",  "nit" => "830060151-1"],
            ["hc_id" => 96, "name" => "PETROBRAS COLOMBIA COMBUSTIBLES S.A.",  "nit" => "900047822-5"],
            ["hc_id" => 97, "name" => "SERVICIOS INTEGRALES ROHI LTDA",  "nit" => "830013376-1"],
            ["hc_id" => 99, "name" => "JUANCAMAR Y CIA. S. EN C.",  "nit" => "830039391-5"],
            ["hc_id" => 102, "name" => "ESTACION DE SERVICIO EL TOPACIO S.A.S.",  "nit" => "800049165-0"],
            ["hc_id" => 107, "name" => "RUN CAR S.A.S.",  "nit" => "900543708-0"],
            ["hc_id" => 108, "name" => "WALTER MUÑOZ CAMACHO",  "nit" => "14947228-8"],
            ["hc_id" => 109, "name" => "GRUPO MAGRA S.A.",  "nit" => "830062935-8"],
            ["hc_id" => 112, "name" => "ESTACION EL PINO 73 S.A.S.",  "nit" => "830051180-7"],
            ["hc_id" => 115, "name" => "JEMA GASOIL S.A.S.",  "nit" => "900979559-1"],
            ["hc_id" => 116, "name" => "COMPAÑIA DE INVERSIONES INTERNACIONAL SAS",  "nit" => "900153527-0"],
            ["hc_id" => 119, "name" => "INVERSIONES RENGIFO ROJAS S.A.S.",  "nit" => "800066365-9"],
            ["hc_id" => 122, "name" => "INVERSIONES CARREÑO GUTIERREZ S.A.S.",  "nit" => "830086199-7"],
            ["hc_id" => 124, "name" => "JAIME FRANCO GONZALEZ",  "nit" => "19140834-5"],
            ["hc_id" => 125, "name" => "ROGAR LIMITADA",  "nit" => "860400389-6"],
            ["hc_id" => 126, "name" => "DISTRACOM S.A.",  "nit" => "811009788-8"],
            ["hc_id" => 127, "name" => "DISTRIBUIDORA DE COMBUSTIBLES LURIGER LTDA",  "nit" => "800193067-2"],
            ["hc_id" => 129, "name" => "C.I. CENTRAL DE COMBUSTIBLES Y LUBRICANTES S.A.S.",  "nit" => "860519822-7"],
            ["hc_id" => 131, "name" => "ALMACENES EXITO S.A.",  "nit" => "890900608-9"],
            ["hc_id" => 132, "name" => "AL PUVENSA LTDA",  "nit" => "830132476-1"],
            ["hc_id" => 134, "name" => "ARABAR LIMITADA",  "nit" => "809008281-4"],
            ["hc_id" => 135, "name" => "INVERSIONES ARBOSERVICE S.A.S.",  "nit" => "900667000-8"],
            ["hc_id" => 136, "name" => "ASEO TECNICO DE LA SABANA S.A E.S.P.",  "nit" => "830123625-2"],
            ["hc_id" => 137, "name" => "DIANA MADELY VARELA SOLANO",  "nit" => "1032403008-6"],
            ["hc_id" => 139, "name" => "TRIHUNIDOS S.A.S.",  "nit" => "860517381-1"],
            ["hc_id" => 140, "name" => "CONSTRUCTORA BOLIVAR S.A.",  "nit" => "860513493-1"],
            ["hc_id" => 141, "name" => "INVERSIONES AUTOMOTRICES DE COLOMBIA S.A.S.",  "nit" => "900349815-1"],
            ["hc_id" => 144, "name" => "DESARROLLO AVENIDA CARACAS S.A.S.",  "nit" => "900563955-9"],
            ["hc_id" => 145, "name" => "COMBUSTIBLES H&R LTDA",  "nit" => "900078103-0"],
            ["hc_id" => 146, "name" => "RTA PUNTO TAXI S.A.S.",  "nit" => "900009507-8"],
            ["hc_id" => 147, "name" => "ESTACION DE SERVICIO ARGELIA",  "nit" => "830036836-7"],
            ["hc_id" => 149, "name" => "BAGUT S.A.S.",  "nit" => "900131427-8"],
            ["hc_id" => 150, "name" => "GRUPO ORION COLOMBIANO S.A.S.",  "nit" => "900432676-7"],
            ["hc_id" => 151, "name" => "EMPRENDA S.A.S.",  "nit" => "900430532-6"],
            ["hc_id" => 152, "name" => "CENTRO LOGISTICO INTERNACIONAL DEL TRANSPORTE S.A.",  "nit" => "830513757-1"],
            ["hc_id" => 153, "name" => "CIUDAD LIMPIA BOGOTA S.A. E.S.P.",  "nit" => "830048122-9"],
            ["hc_id" => 154, "name" => "COLTANQUES S.A.S.",  "nit" => "860040576-1"],
            ["hc_id" => 156, "name" => "COMBUSTIBLES ALTAMIRA S.A.S.",  "nit" => "830115076-5"],
            ["hc_id" => 157, "name" => "FIDUCIARIA BOGOTA S.A.",  "nit" => "800142383-7"],
            ["hc_id" => 162, "name" => "COMBUSTIBLES DEL CESAR Y CIA LTDA CODELCE ANTES COOTRANSPENSILVANIA ",  "nit" => "900133093-0"],
            ["hc_id" => 165, "name" => "ESTACION SE SERVICIO MOGUE LTDA",  "nit" => "900159131-5"],
            ["hc_id" => 166, "name" => "COMBUSTIBLES Y SERVICIOS TIMIZA LTDA",  "nit" => "800244283-7"],
            ["hc_id" => 167, "name" => "COMBUSTIBLES LA INDEPENDENCIA S.A.S.",  "nit" => "900018325-2"],
            ["hc_id" => 168, "name" => "COMBUSTIBLES Y SUMINISTROS S & V S.A.",  "nit" => "900069128-6"],
            ["hc_id" => 169, "name" => "GLADYS YAMILE SANDOVAL FUENTES",  "nit" => "24059677-8"],
            ["hc_id" => 170, "name" => "COMERCIALIZADORA DE COMBUSTIBLE SANTA ANA S.A.S.",  "nit" => "830514951-7"],
            ["hc_id" => 171, "name" => "SOCIEDAD DE OBJETO UNICO CONSESIONARIA ESTE ES MI BUS S.A.S.",  "nit" => "900393736-2"],
            ["hc_id" => 172, "name" => "ALDICOM OPERADORES LTDA",  "nit" => "830060549-9"],
            ["hc_id" => 173, "name" => "COMERCIALIZADORA ZUGI S.A.S.",  "nit" => "900223526-4"],
            ["hc_id" => 174, "name" => "INVERSIONES EL TRIANGULO DE LA SABANA INTRISA S.A.",  "nit" => "800054034-4"],
            ["hc_id" => 175, "name" => "ELSY YANETH BEJARANO VICTORIA",  "nit" => "51652127-1"],
            ["hc_id" => 176, "name" => "MARKETING Y STRATEGY S.A.S.",  "nit" => "900338572-8"],
            ["hc_id" => 177, "name" => "COMPAÑIA DISTRIBUIDORA DE COMBUSTIBLES S.A.S.",  "nit" => "830015410-3"],
            ["hc_id" => 178, "name" => "COMPAÑIA METROPOLITANA DE TRANSPORTES EDS S.A.",  "nit" => "860006119-5"],
            ["hc_id" => 179, "name" => "COTRANSCOPETROL S.A.S. Y C.T.C. S.A.S.",  "nit" => "830017552-1"],
            ["hc_id" => 180, "name" => "INVERSIONES NIZA S.A.S.",  "nit" => "900622373-6"],
            ["hc_id" => 181, "name" => "COORDINADORA MERCANTIL S.A.",  "nit" => "890904713-2"],
            ["hc_id" => 182, "name" => "CORPORACION CLUB CAMPESTRE GUAYMARAL",  "nit" => "800066430-1"],
            ["hc_id" => 183, "name" => "AMERICANA DE COMBUSTIBLES S.A.S.",  "nit" => "830065666-5"],
            ["hc_id" => 184, "name" => "COUNTRY CLUB DE BOGOTA",  "nit" => "860009645-1"],
            ["hc_id" => 185, "name" => "CSV INVERSIONES S.A.S.",  "nit" => "900126863-6"],
            ["hc_id" => 186, "name" => "DISERTRAN S.A",  "nit" => "830128516-0"],
            ["hc_id" => 191, "name" => "DISTRIBUIDORA COMERCIAL DIO REY LTDA",  "nit" => "900389880-1"],
            ["hc_id" => 193, "name" => "DISTRIBUIDORES DE ENERGIA Y COMBUSTIBLES S.A.",  "nit" => "900069170-6"],
            ["hc_id" => 194, "name" => "DISTRILUB LTDA",  "nit" => "830078162-1"],
            ["hc_id" => 195, "name" => "EMPRESA VECINAL DE TRANSPORTADORES DE SUBA S.A. - EVETRANS S.A.",  "nit" => "860032029-0"],
            ["hc_id" => 196, "name" => "HYUNDAI COLOMBIA AUTOMOTRIZ S.A.",  "nit" => "800173557-4"],
            ["hc_id" => 197, "name" => "LUBRICACION Y SERVICIOS LTDA",  "nit" => "900043530-1"],
            ["hc_id" => 199, "name" => "INVERSIONES G 12 S.A.S.",  "nit" => "900481184-4"],
            ["hc_id" => 200, "name" => "ESTACION TEUSAQUILLO NO. 6 LTDA EN LIQUIDACION",  "nit" => "860530110-6"],
            ["hc_id" => 201, "name" => "EHF RESPUESTOS Y COMBUSTIBLES LTDA (EN LIQUIDACION)",  "nit" => "800142631-9"],
            ["hc_id" => 202, "name" => "INVERSIONES CALASANZ S.A.S.",  "nit" => "832004129-8"],
            ["hc_id" => 203, "name" => "EMPRESA ADMINISTRADORA DE SERVICIOS S.A.",  "nit" => "830079954-2"],
            ["hc_id" => 204, "name" => "INVERSIONES QUIRIGUA LIMITADA",  "nit" => "800016744-3"],
            ["hc_id" => 206, "name" => "COMBUSTIBLES Y SERVICIOS S.A.S.",  "nit" => "860450190-1"],
            ["hc_id" => 208, "name" => "UNION PANAMERICANA DE INVERSIONES S.A.S.",  "nit" => "830046564-1"],
            ["hc_id" => 210, "name" => "SERVICENTRO AGUILA LTDA",  "nit" => "900201129-9"],
            ["hc_id" => 211, "name" => "ESTACION DE SERVICIO ALELI S.A.S.",  "nit" => "900257482-5"],
            ["hc_id" => 212, "name" => "ESTACION DE SERVICIO LLANTA BAJA S. EN C.",  "nit" => "800061582-8"],
            ["hc_id" => 213, "name" => "OSCAR AUGUSTO SANTACRUZ FAJARDO",  "nit" => "19322113-5"],
            ["hc_id" => 214, "name" => "GLORIA INES FALAGAN TORRES",  "nit" => "51573599-3"],
            ["hc_id" => 215, "name" => "GERMAN ALBERTO RODRIGUEZ PEREZ",  "nit" => "159934-8"],
            ["hc_id" => 216, "name" => "EDS EL CLARET S.A.S.",  "nit" => "901267317-4"],
            ["hc_id" => 217, "name" => "ESTACION DE SERVICIO EL POLO LTDA",  "nit" => "860522611-0"],
            ["hc_id" => 219, "name" => "ESTACION SOCOMBUSTIBLES S.A.S.",  "nit" => "900226204-1"],
            ["hc_id" => 220, "name" => "MULTISERVICIOS ENERGETICOS S.A.S.",  "nit" => "900415864-3"],
            ["hc_id" => 222, "name" => "ESTACION DE SERVICIO TERPEL USME",  "nit" => "80352097-5"],
            ["hc_id" => 224, "name" => "EXPRESO DEL PAIS S A",  "nit" => "860036225-6"],
            ["hc_id" => 225, "name" => "COMBUSTIBLES MAKO S.A.S.",  "nit" => "800037878-1"],
            ["hc_id" => 226, "name" => "FIF Y CIA. S.A.S.",  "nit" => "830055829-6"],
            ["hc_id" => 227, "name" => "ESTACION EL CARMEN S.A.S.",  "nit" => "830101655-9"],
            ["hc_id" => 228, "name" => "INVERSIONES Y TRANSPORTES BEG DE COLOMBIA S.A.S.",  "nit" => "900164343-1"],
            ["hc_id" => 229, "name" => "GAS NATURAL ANDINO S.A.",  "nit" => "830106169-3"],
            ["hc_id" => 230, "name" => "GASES DEL LLANO S.A. EMPRESA DE SERVICIOS PUBLICOS",  "nit" => "800021272-9"],
            ["hc_id" => 231, "name" => "GEMASA LTDA",  "nit" => "830078352-4"],
            ["hc_id" => 232, "name" => "GENERAL MOTORS - COLMOTORES S.A.",  "nit" => "860002304-3"],
            ["hc_id" => 238, "name" => "ANGELA MARIA FRANCO RODRIGUEZ",  "nit" => "40373627"],
            ["hc_id" => 251, "name" => "INVERSIONES COMBITA S.A.S.",  "nit" => "830109503-4"],
            ["hc_id" => 257, "name" => "DISTRICOM INVERSIONES LIMITADA",  "nit" => "900121836-4"],
            ["hc_id" => 258, "name" => "DISCOMBITA COMBUSTIBLES S.A.S.",  "nit" => "800221975-6"],
            ["hc_id" => 259, "name" => "GRUPO EMPRESARIAL RIV S.A.S.",  "nit" => "805029025-0"],
            ["hc_id" => 262, "name" => "GRUPO LOMA LTDA",  "nit" => "900031259-8"],
            ["hc_id" => 263, "name" => "ESTACION DE SERVICIO HERGOS S.A.S.",  "nit" => "900291958-2"],
            ["hc_id" => 265, "name" => "INVERSIONES ARABIA",  "nit" => "830503849-6"],
            ["hc_id" => 266, "name" => "INVERSIONES AUTO CELESTE LTDA",  "nit" => "830145617-8"],
            ["hc_id" => 267, "name" => "GAS MOVIL LTDA",  "nit" => "804010701-4"],
            ["hc_id" => 268, "name" => "INVERSIONES BELTRAN AWO LTDA",  "nit" => "830111047-3"],
            ["hc_id" => 269, "name" => "ESTACION LA HERRADURA AWO S.A.S.",  "nit" => "900506318-4"],
            ["hc_id" => 270, "name" => "INVERSIONES BETCO S.A., EN REESTRUCTURACION",  "nit" => "860056714-1"],
            ["hc_id" => 271, "name" => "INVERSIONES BRASILIA S.A.S.",  "nit" => "830029357-1"],
            ["hc_id" => 273, "name" => "ERNESTO ROJAS CASTRO",  "nit" => "79514721-6"],
            ["hc_id" => 274, "name" => "INVERSIONES CORCAB S.A.S.",  "nit" => "900375777-8"],
            ["hc_id" => 276, "name" => "DAMPA S.A. GRUPO EMPRESARIAL",  "nit" => "900075885-8"],
            ["hc_id" => 277, "name" => "GLOBAL COLOMBIA GESTION EMPRESARIAL S.A.S.",  "nit" => "900449021-8"],
            ["hc_id" => 278, "name" => "INVERSIONES LA GLORIETA S.A.S.",  "nit" => "830052626-4"],
            ["hc_id" => 282, "name" => "INVERSIONES MEJIA MEJIA LTDA",  "nit" => "900144785-6"],
            ["hc_id" => 283, "name" => "INVER MUÑOZ LTDA",  "nit" => "800137292-5"],
            ["hc_id" => 284, "name" => "INVERSIONES NAN S.A.S.",  "nit" => "900411071-1"],
            ["hc_id" => 285, "name" => "INVERSIONES NESGON S.A.",  "nit" => "800101575-9"],
            ["hc_id" => 286, "name" => "INVERSIONES POWERFUEL S.A.",  "nit" => "900040959-3"],
            ["hc_id" => 287, "name" => "SOCIEDAD DISTRIBUIDORA DE ENERGETICOS S.A.S.",  "nit" => "830023229-1"],
            ["hc_id" => 288, "name" => "INVERSIONES QUIROGA Y COMPAÑIA LIMITADA",  "nit" => "800099500-9"],
            ["hc_id" => 289, "name" => "COMBUSTIBLES PEGASO S.A.S.",  "nit" => "900388287-7"],
            ["hc_id" => 290, "name" => "INVERSIONES ROMARTI LTDA",  "nit" => "830119502-1"],
            ["hc_id" => 291, "name" => "INVERSIONES ROMERO RODRIGUEZ S.A.S.",  "nit" => "830143566-1"],
            ["hc_id" => 293, "name" => "INVERSIONES SAMORES S.A.S.",  "nit" => "830509551-4"],
            ["hc_id" => 294, "name" => "COMPAÑIA NACIONAL DE MICROBUSES COMNALMICROS S.A.",  "nit" => "860027234-4"],
            ["hc_id" => 296, "name" => "COMPAÑÍA NACIONAL DE SEBOS S.A CONALSEBOS",  "nit" => "860401492-1"],
            ["hc_id" => 297, "name" => "INVERSIONES Y PETROLEOS S. EN C.",  "nit" => "830037204-7"],
            ["hc_id" => 298, "name" => "INVERSIONES Y REPRESENTACIONES RINCON PESCADOR LIMITADA INVEREPE LTDA",  "nit" => "900256846-8"],
            ["hc_id" => 300, "name" => "VANTI SOLUCIONES S.A.S.",  "nit" => "900225341-8"],
            ["hc_id" => 301, "name" => "INSTITUTO DE DESARROLLO URBANO - IDU",  "nit" => "899999061-9"],
            ["hc_id" => 302, "name" => "JAIR S.A.",  "nit" => "900093289-4"],
            ["hc_id" => 303, "name" => "QUIJANO CARRILLO JAIRO AUGUSTO",  "nit" => "19112399-3"],
            ["hc_id" => 304, "name" => "JAIRO GANDUR ABUABARA",  "nit" => "5463640-9"],
            ["hc_id" => 306, "name" => "COMBUSCOL JASA S.A.S.",  "nit" => "901235744-9"],
            ["hc_id" => 307, "name" => "JAVIER LEVA GONZALEZ",  "nit" => "79146612-2"],
            ["hc_id" => 308, "name" => "JJNR Y CIA. LTDA",  "nit" => "800118346-3"],
            ["hc_id" => 309, "name" => "JORGE CORTES MORA Y CIA. S.A.S.",  "nit" => "860078024-2"],
            ["hc_id" => 310, "name" => "ESTACION DE SERVICIO JUAN AMARILLO S.A.S.",  "nit" => "900049741-6"],
            ["hc_id" => 311, "name" => "JUAN BARRETO TRANSPORTES J.B.T. S.A.S.",  "nit" => "800243284-1"],
            ["hc_id" => 312, "name" => "BIOMAX SANANDRESITO 38",  "nit" => "18916750-3"],
            ["hc_id" => 313, "name" => "JUAN MARTIN LTDA",  "nit" => "830043645-6"],
            ["hc_id" => 318, "name" => "LIMPIEZA METROPOLITANA S.A. E.S.P. (LIME S.A. E.S.P.)",  "nit" => "830123461-1"],
            ["hc_id" => 319, "name" => "SERVICIOS AL TRANSPORTES S.A. (SERVITRANS)",  "nit" => "860052585-1"],
            ["hc_id" => 320, "name" => "SERVICIOS INTEGRALES LOS LANCEROS ORGANIZACION COOPERATIVA EN LIQUIDACION",  "nit" => "900245091-7"],
            ["hc_id" => 321, "name" => "ESTACION DE SERVICIO ESMYG II M G / antes LUBRICARS HERMANOS LTDA.",  "nit" => "10020749-1"],
            ["hc_id" => 324, "name" => "ESTILO & DECORACION S.A.S.",  "nit" => "901019936-0"],
            ["hc_id" => 325, "name" => "DISTRI VERSALLES S.A.S",  "nit" => "900468152-5"],
            ["hc_id" => 326, "name" => "LZL ASOCIADOS LTDA",  "nit" => "830141437-0"],
            ["hc_id" => 327, "name" => "M Z AUTOSERVICIOS S.A.",  "nit" => "800002985-0"],
            ["hc_id" => 331, "name" => "ESTACION LOS LAGARTOS S.A.S.",  "nit" => "800244319-3"],
            ["hc_id" => 333, "name" => "EMBAJADA DE LOS ESTADOS UNIDOS DE AMERICA",  "nit" => "800090823-1"],
            ["hc_id" => 341, "name" => "INVERSIONES MEDINA RIVAS S.A.S.",  "nit" => "900794651-6"],
            ["hc_id" => 348, "name" => "TAVERA RODRIGUEZ MARTIN ALONSO",  "nit" => "91012681"],
            ["hc_id" => 350, "name" => "OTALORA SANDOVAL LTDA",  "nit" => "830055635-4"],
            ["hc_id" => 351, "name" => "IREGUI ZULETA JUAN MANUEL",  "nit" => "3228120-7"],
            ["hc_id" => 352, "name" => "ALEMAJAR LTDA",  "nit" => "830114244-1"],
            ["hc_id" => 353, "name" => "PETROCOMERCIALIZADORA S.A.",  "nit" => "830017822-3"],
            ["hc_id" => 355, "name" => "POVEDA & CIA. S.A.S.",  "nit" => "900013837-9"],
            ["hc_id" => 356, "name" => "PROMOCIONES Y TRANSPORTES TURISTICOS PROTURISMO S.A.",  "nit" => "860038269-9"],
            ["hc_id" => 357, "name" => "PROMOTORA APOTEMA S.A.S.",  "nit" => "800037199-9"],
            ["hc_id" => 360, "name" => "LEASING BANCOLOMBIA S.A.",  "nit" => "860045165-0"],
            ["hc_id" => 361, "name" => "RODRIGO JARAMILLO MEJIA",  "nit" => "6086453-4"],
            ["hc_id" => 363, "name" => "SAAD SAAD Y CIA. S.C.A.",  "nit" => "800006079-0"],
            ["hc_id" => 364, "name" => "INVERSIONES Y SERVICIOS PANAMERICANA S.A.S.",  "nit" => "900309497-1"],
            ["hc_id" => 365, "name" => "SANTA MARTA ESTACION DE SERVICIO S.A.S.",  "nit" => "900330073-8"],
            ["hc_id" => 366, "name" => "LOGISTICA 3T S.A.",  "nit" => "830110689-7"],
            ["hc_id" => 367, "name" => "SEDETRANS SERVICIOS ESPECIALIZADOS DE TRANSPORTE S.A.",  "nit" => "900229487-2"],
            ["hc_id" => 369, "name" => "ULISES EUGENIO MARTINEZ MORA",  "nit" => "111080"],
            ["hc_id" => 373, "name" => "SERVICIOS CONTINENTAL LTDA",  "nit" => "860519414-5"],
            ["hc_id" => 375, "name" => "SERVICIOS Y COMBUSTIBLES LTDA - SERVYCOM",  "nit" => "830146099-7"],
            ["hc_id" => 377, "name" => "ESTACION DE SERVICIO LAS VEGAS S.A.S.",  "nit" => "860501130-1"],
            ["hc_id" => 378, "name" => "SOCIEDAD ADMINISTRADORA HYNTIBA S.A.S",  "nit" => "830097852-6"],
            ["hc_id" => 379, "name" => "CIUDAD MOVIL SAS SI 18 S.A.S.",  "nit" => "830070577-8"],
            ["hc_id" => 382, "name" => " OPERADOR ALIA S.A.S",  "nit" => "900480172-1"],
            ["hc_id" => 384, "name" => "ENRIQUE ALEJANDRO IREGUI ESCOBAR",  "nit" => "19270802-7"],
            ["hc_id" => 385, "name" => "GERARDO ANTONIO ALVARADO PARRA",  "nit" => "14255792-0"],
            ["hc_id" => 386, "name" => "EXPRESO SUR ORIENTE S.A.",  "nit" => "860045813-5"],
            ["hc_id" => 387, "name" => "TORRES Y CARDOZO LTDA",  "nit" => "860033891-8"],
            ["hc_id" => 388, "name" => "GRUPO EMPRESARIAL ENERGY S.A.S.",  "nit" => "900591964-4"],
            ["hc_id" => 389, "name" => "TRANSPORTES SAFERBO S.A.",  "nit" => "890920990-3"],
            ["hc_id" => 390, "name" => "TRANSMASIVO S.A.",  "nit" => "830106777-1"],
            ["hc_id" => 391, "name" => "TRANSPORTES DE CRUDO DEL LLANO S.A. TRANSCRUDOLLANO S.A.",  "nit" => "800105031-2"],
            ["hc_id" => 392, "name" => "TRANSPORTES JOALCO S.A.",  "nit" => "860450987-4"],
            ["hc_id" => 393, "name" => "TRANSPORTE TECNICO DE LIQUIDOS S.A.S.",  "nit" => "800210426-7"],
            ["hc_id" => 396, "name" => "WINSTON JOSE KAPPAZ HEGEL",  "nit" => "9053544-5"],
            ["hc_id" => 400, "name" => "GASAMA S.A.S.",  "nit" => "900813782-5"],
            ["hc_id" => 402, "name" => "UT. ALCAPITAL FASE 2 ",  "nit" => "830132853-3"],
            ["hc_id" => 403, "name" => "INVERSIONES Y ASESORIAS DE TRANSPORTES ANDINO S.A. - INSETRANSA S.A.",  "nit" => "830073087-4"],
            ["hc_id" => 405, "name" => "GALONTEK S.A.S.",  "nit" => "901081196-1"],
            ["hc_id" => 406, "name" => "EDILMA FORERO MARTINEZ",  "nit" => "51847102"],
            ["hc_id" => 408, "name" => "ENERGY GROUP S.A.S. EDS ENERGY TECHO",  "nit" => "830503736-2"],
            ["hc_id" => 409, "name" => "CEMEX COLOMBIA S.A.",  "nit" => "860002523-1"],
            ["hc_id" => 417, "name" => "COOPERATIVA NACIONAL DE TRANSPORTADORES LTDA",  "nit" => "860020381-7"],
            ["hc_id" => 418, "name" => "TRANZIT S.A.S",  "nit" => "900394177-1"],
            ["hc_id" => 419, "name" => "GASEOSAS LUX S.A.S.",  "nit" => "860001697-8"],
            ["hc_id" => 422, "name" => "ENERGIZAR S.A.S.",  "nit" => "830095617-2"],
            ["hc_id" => 423, "name" => "ESTACIÓN DE SERVICIO WILFER BRIO CORFERIAS",  "nit" => "79128721-0"],
            ["hc_id" => 424, "name" => "GASEOSAS COLOMBIANAS S.A.S.",  "nit" => "860005265-8"],
            ["hc_id" => 425, "name" => "TCC S.A.S.",  "nit" => "860016640-4"],
            ["hc_id" => 426, "name" => "FUNDACION SAN ANTONIO",  "nit" => "860008867-5"],
            ["hc_id" => 427, "name" => "ORGANIZACION SUMA S.A.S.",  "nit" => "900364615-6"],
            ["hc_id" => 428, "name" => "MARIA FERNANDA JACOBO FRANCO",  "nit" => "53063397-1"],
            ["hc_id" => 429, "name" => "INVERSIONES SILVERADO S.A.S.",  "nit" => "900349588-2"],
            ["hc_id" => 431, "name" => "JPMC INVERSIONES S.A.S.",  "nit" => "901157770-6"],
            ["hc_id" => 433, "name" => "INVERSIONES Y DISTRIBUCION DE COMBUSTIBLES S.A.",  "nit" => "900341576-8"],
            ["hc_id" => 435, "name" => "LOVALL REPRESENTACIONES LTDA",  "nit" => "800204028-4"],
            ["hc_id" => 436, "name" => "INVERSIONES ALARCON ALVARADO S.A.S.",  "nit" => "900428531-2"],
            ["hc_id" => 437, "name" => "ESTACION DE SERVICIO AUTOMOTRIZ SAN MARTIN DE TOURS S.A.S.",  "nit" => "900589536-9"],
            ["hc_id" => 440, "name" => "EMPRESA DE TRANSPORTE INTEGRADO DE BOGOTA S.A.S. – ETIB S.A.S.",  "nit" => "900365651-6"],
            ["hc_id" => 443, "name" => "COOPERATIVA DE TRANSPORTADORES BUSES VERDES LTDA",  "nit" => "860032905-8"],
            ["hc_id" => 444, "name" => "CRISTIAN FRANCISCO SANTACRUZ AVILA",  "nit" => "1030568664-9"],
            ["hc_id" => 445, "name" => "CORNECA S.A.S.",  "nit" => "900857968-7"],
            ["hc_id" => 447, "name" => "MAKRO SUPERMAYORISTA S.A.S.",  "nit" => "900059238-5"],
            ["hc_id" => 448, "name" => "DISTRIBUIDORA L H TERPEL CARRERA LIMITADA",  "nit" => "830073458-3"],
            ["hc_id" => 449, "name" => "COMPAÑIA DE TRANSPORTADORES LA NACIONAL S.A.",  "nit" => "900049998-1"],
            ["hc_id" => 451, "name" => "GREEN S.A.S.",  "nit" => "900316197-4"],
            ["hc_id" => 454, "name" => "JOSE LIBARDO BALAQUERA DAZA",  "nit" => "5683255"],
            ["hc_id" => 456, "name" => "CENTRO AUTOMOTOR DIESEL S A CENTRODIESEL",  "nit" => "860032115-6"],
            ["hc_id" => 459, "name" => "EDS SANTA ANA DE BRITALIA S.A.S.",  "nit" => "900817903-8"],
            ["hc_id" => 460, "name" => "GRUPO LA TRINIDAD S.A.S.",  "nit" => "900582602-5"],
            ["hc_id" => 472, "name" => "CHEVRON PETROLEOUM COMPANY",  "nit" => "860005223-9"],
            ["hc_id" => 473, "name" => "SUMINISTROS DE GASOLINA S.A.S.",  "nit" => "830055479-1"],
            ["hc_id" => 475, "name" => "HOLCIM (COLOMBIA) S.A.",  "nit" => "860009808-5"],
            ["hc_id" => 476, "name" => "CENIT TRANSPORTE Y LOGISTICA DE HIDROCARBUROS S.A.S.",  "nit" => "900531210-3"],
            ["hc_id" => 478, "name" => "COMBUSTIBLES Y TRANSPORTES HERNANDEZ S.A.",  "nit" => "830118785-2"],
            ["hc_id" => 481, "name" => "GRUPO SACHIEL S.A.S.",  "nit" => "900027907-7"],
            ["hc_id" => 483, "name" => "ESTACION EL CERRO S.A.S.",  "nit" => "900671833-1"],
            ["hc_id" => 486, "name" => "ESTACION DE SERVICIO AUTOMOTRIZ VILLA HERMOSA S.A.S.",  "nit" => "900884696-3"],
            ["hc_id" => 487, "name" => "LADRILLERA SANTA FE S.A.",  "nit" => "860000762-4"],
            ["hc_id" => 492, "name" => "INVERSIONES CUERBIANO ASOCIADOS S.A.S.",  "nit" => "900811295-0"],
            ["hc_id" => 493, "name" => "PRACO DIDACOL S.A.S.",  "nit" => "860047657-1"],
            ["hc_id" => 495, "name" => "ESTACION PRADERA AV. 68 S.A.S.",  "nit" => "901124746-7"],
            ["hc_id" => 497, "name" => "ESTACION DE SERVICIO CARRERA 10 AWO S.A.S.",  "nit" => "901092086-5"],
            ["hc_id" => 500, "name" => "CONCRETERA TREMIX SOCIEDAD POR ACCIONES SIMPLIFICADA S.A.S.",  "nit" => "830106474-5"],
            ["hc_id" => 501, "name" => "1. PUERTO PITS LTDA (EN LIQUIDACION) / 2. COOPERATIVA INTEGRAL DE TRANSPORTADORES EL CONDOR LTDA",  "nit" => "900044540-1"],
            ["hc_id" => 503, "name" => "JUAN CARLOS GUZMAN RODRIGUEZ",  "nit" => "80004022-1"],
            ["hc_id" => 504, "name" => "CONSORCIO CANALES NACIONALES PRIVADOS",  "nit" => "830045722-4"],
            ["hc_id" => 505, "name" => "COESCO COLOMBIA S.A.S.",  "nit" => "901300741-5"],
            ["hc_id" => 510, "name" => "BOGOTA MOVIL OPERACION SUR S.A.S.",  "nit" => "901230120-0"],
            ["hc_id" => 513, "name" => "ANCER PREMIUM S.A.S.",  "nit" => "901373908-0"],
            ["hc_id" => 515, "name" => "RP ENERGY",  "nit" => "900449955-1"],
            ["hc_id" => 516, "name" => "GAS CENTRAL DE LA SABANA S.A. ENERMARKET S.A.",  "nit" => "900091638-2"],
            ["hc_id" => 517, "name" => "BERAKA ES S.A.S.",  "nit" => "901473375-4"],

        ];
        
        DB::table("owners")->insert($data);
    }
}
