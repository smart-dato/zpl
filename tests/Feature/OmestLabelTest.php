<?php

use SmartDato\Zpl\Enums\CompressionType;
use SmartDato\Zpl\Enums\OrientationType;
use SmartDato\Zpl\Label;

test('omest label format', function () {
    $label = new Label;

    $data = ',:::::::::::::::hG08,,:hH02,,hH05,hH08,hH01,hH08,hH01,hG0201,hI08,hH022,hI08,hH02,hJ04,hH0148,hJ02,hI028,hI081,hI01,gT0428K0104,gR0420CL0851,gT0409K0102,gQ04021,gT0429L0A9,gS0AI012I09,gR020541400400108,gQ028001400508A01,gQ0404AI0901I04,gP0202904220141148,gR08010440802002,gQ05I0280A08851,gN035BA5BD53A0I1042,gN0C545542245804I08,gM01BAB2A55ED924025,gM05220D5AC126489004A,gM024DF2253EC8D20101,gL01CD205CAA136A8245,gL0152CDC394A499880052,gM02D2A34655B652121,gL01D459CD9AA49A48442,gL032BA533225B21A10804,gM0504A445DA15E48209,gL03ADDABBA25D51C00102,gL0212K0401541I42,gL01E5800148A025C08802,gL021DI040202E529I14,gL01628I010089A50024,gL0299I01245144C22002,gM06680040102BB20042,gL0399I08A02024C04002,gL025280010400C92A952,gL05548I01045364J01,gL0155I020490C9D1021,gL0A558I0400536242804,gL01A2I0204104940402,gK08B5D8I048C1B4C90294,gM022K02084B2008002,gL01CC8004A001B0C1508,gL03558J0A282F240224,g082K02AI028081C1482J08,g01K03D48004I123A51010A1,g082K02B8008J045C0245,Y0208J05D202812521DA1208,Y08214I0224ED2B495531E02120A,X0510011001DD904A662646014,W04005200103I2FB8AC58B15004489,X0A1I024005AD0279BC74E4429,W02020854001448DC85038B2D080I2,V010042080A01DBI35A6C72A020208,W0440021204014CC4D2I944C800102,V02088208J0E331D24552BB81004,W0112890A2I0C4E24DC55120800841,V044J0104403BB1A5A3D2D42,U010024I02J02565E2C1524020028,T0102A8124401400494A4CAE548AI04,S04K0848894Q082104,N010020881001001I08P02L014,O024822022A0490201R055,M02C0014028404002024Q09002J021,L01008080101009140248Y08,N010D114200404048008001M0124A,K029481004002502008011012522A8A0D02904I0141,N012020144024251I4024A5D272FAFC6C80024,J014110028940820808008001B98458D9203911,L0A041010112841404A14004273A7225DC6C,J0890204402J09201K01AE8E584DB21A021002,I0120405008842080024084001515147AA05E1A84,M08849009011210841J0AD5D5859DA1D4008021,K04I01021024I040882001245235A432C2892J01,I04J0I214J092841J01CBA5C34BC53D2042,O08I0214A0410824002282A2C381A4242J04,I08L0240941020041J01DBDA59C3E5DC8824001,N010809J084208140012424C52C1A301208004,O04040224121421O01A5BE1CI04K02,O08214008AI08808M022901B0041002012,Q080092024110AM01DD67A4I084I04,P0410A00200401N0522985800A200508,R0202002282O0AI56AK01K02,I01L0140084A8408N035AA218008094001408,R04AI010414L014455CEN028,Q02902A8021N055DAA38I0108J0802,T040148848L0D5I24K01J02,S02914012M03255CDCJ04N04,W020028J02455252Q08I08,T0810J8K01DAA5AC,S01145122L01255A2V08,U01J04L052A5C,T028040AL01AD492V08,T08020114L0529A48,T01144CM019535BAT08,U04I04M064C445U04,T0109290CL01B1D94A,W0401BDL04E16D5S044,Y047FAK011E92AC,X020DDFEK0612C53R02,X04AF3ABDJ01E43ACCN04,g0DF7FFCJ015C533M05001,g0BED5ACJ02A3A4AEK01020448,g0F1FF7CK05C1B41L01,g0B037DCK021E29D4K0410A28,g0F02CEC021210F1C3258I0108204,g0F07C3C15B5AB063C5DK04081,Y01B02C2C2C2554E942427J0I1428,g0703C3C03E5251AD5DA98K02,g0D06C2C1C1A5AD52A34AK02024,g0F83C3C01D5452255C55CJ0C1008,g0F02C342F2A7A5D54354L0424,g0303A2C185182A2A5C55CK08008,gH03C3C15AA6CA55A2A2K090A5,g080042C2325A39D24D5DCK02,g08I03C145A5C635IA2L080A,g0CI02C2DIA59A55AADCJ041508,g0FgJ08,g05gK0208,g0FC018Y02485,g0EC078gH08,g05B1F8g0A9,g03F35gI014,gG0DFF8I01084088AI08K0814,gG0B6F001FA23B52316DBM0A08,gG07F800102DC25DC5994CK01,g01EDI045CA34C13D262L04028,g0EBBI01D3A4D9A4258DCL028,g0BFFC001241D33554A7AL02008,g07E560124DD3442EC981CM01,g0D86E041D92455A13B5AJ020024,g0F01FA02234DAA5D4426CM088,g0C01D820CC5144A35D598L01,g08003882324E3D942253J02I028,gI07405CDD9C26BDAD44,X02CI018083252559425258,X03FCI08A1C584042800DA4,X05B79009023A409DD401228,X03IF51009C4A20228455AA,X07AD6F70913B882DD200528,Y07BFDD1024210012C24A688,g0FD7FC085CC14E5009989,g0B7D5811D1A019AC40678,g0E07F0412504A2209188,g0B007A025E4005DD0573C1,g0F00E051A0A89D00200C1,g0D0034026541027C41F3C,g0F0058418EC01480010C1,g0B807882390A4DBC0461C,g0F50DA11C2D0124009AE,g06FBB8021D2206AC0121C,g03F76889D2804948004E,g01AEF92126509AB800B9C,gG0FDB4005981054801A2,gG03FF005A244109I02DC,gH0541512D5042I01C21,gI0140255C28J013CC01,g0AJ021A80014A040431002,g0FA0244245A4I0401BCC,g0FFD4109BE48908800450204,g0ABEB01I08101J08048114,g0FEBBC81422002I01121,V08I0DBFF008I0228L08002,U0AI041755A212C1401I040908201,T010I2I0FF9J0404M010424,T0401401400D82411A994035A2J08,R021028044020BI09523I0C21C2200154,R040102208845E004055C0839DD3C,S042100A008874293A5340C31242440012,R010404901120D0C051A4082CI5A88,P012C484I04001FC01455B91D9B2D5AJ02,T0109128402F894BA1400254525K04,P02002040400858100125E522CA54CA44028,Q05404020221F78512CA1A84IA399C08009,P040049082003ED100232D413995C532401,Q0A080208496BFE089CCA5806623A449002A,P020408811007FAE41233A52799DC4DA0224,P0900A214011DD7B081CC08005201AA2,Q04CK04479ED90B329015A60254C49409,P01008212500F1CF8204581062800A52I02,R090441029A453003BA004956415AC1414,P014028K0F9E6C9225A50ACC00A52C0802,R0A0124421A0D39054A00153240A9400124,Q0101041144F1C1C215A892A4C002A50A8,S042K0E4F78035190125242D4C201,Q01280I200B1A3A16450095C81025A80804,T0104044F17D840BD12153A01DA204208,S0144040958D788BA2412A405025C088,S0400914079FFI01580225900DA11204,T029I0108DE105E5141DD0402164009,S0100201401F944B1A40322I0CE8092,U010200AL0618024A941B862049,W04225C00943AE01255I023882,V02040F92200A20DA5AA125C451009,V04904B07C0914FI26A04B1DC045,V08040E4BD202D8DAD844BC6A21081,V01200D9F7409332423C841A1C42,Y01F2AD0424455D5109E1B208224,Y0161FFA80ID42D4060D442094,g0E355014A225D2449FA5942004,g0E2E7C009ADA25A0401BI04082,T08K0B2D38406424DA00BDE220905004,S09K01E3C2A811BD58542A21C0205,T02K05FE780042295A0425B0A49042,T084J0FE95C0204D65400DD42J08,S02004I06D83I04A80404CI04142214,T0128I03B86C40801481K0880808,U04J01F0F8802081I080101020202,V02L0F4008408005L084414,gI011400120028002BE20884,g0FL02J08J0A2C41202,g038L0420112841A98900A8,g0F07CI0404K088962051002,g0F0DAJ048040422128C2I08,g0A0F7I0I10948802D78081414,Y01F1AFO0102028540408,g0A1FDJ0420124281D3812801,Y01E3678L04I0152420025,g0B1E68I04A00141005BC041,g0E3C78K01440841A205081,Y01B3428M08408554C821424,g07AC3CK02A081102BA01,g0D7C38M0214015201412,g07D868P082IC4040AA,g037878K01491004B510102,g02F0E8012A2A1267398AC5428108,gG0C0F80155D5EA98462A1008002,gI05I0I2A0243D9D9C200248,gL01DDA4FDDC2202A050880C,gL02525B8I2CDFD0104I1,gL01A69234DD3902C840804,gM029664DA2D25C12141402,gL01A299D21995A3CJ0148,gL014DA235D5255C0842A,gM0592DC3255A21C2080428,gL01D55A2C592A4E48201082,gL012551DBA651B9A0428408,gO022I084462K08A,gN040420108195D4A51104,g0CM08I08810A2AI084,g0F9K012A9412420D5C2900242,g05F2I014I01J092814028904,g0FAF40080214040900D7CI02028,g0D7DFA01084080405120095101,g0FF7EFC850022A1404CDD00I414,g0ID5BE002A4J0813300A008,g0B9FFEC490080151144C6202914,g0F02EBA00112480221D3811,g0D001FC008I014I02448240A1,g0F8004C01149481423DBAI0A04,g0BT08022029101,g0FM092808A104ACC804202,g05O022104219BA110044,g0F8M0904208044I04121,Y01FO020021490814I042,g05O0845K0140A448,gO021082212280200914,gQ0200441002804,gG058L0280240084480A8822,g03FBQ0AA1K0104,g07FF8K012A49I02A128028A,g0552CN09220900442882,g0IFBL091I02012I02,g0FDF7N0202404041402A2,g0B03FJ024020280281040A,g0E005J0894828048040810404,Y01E00F8004101081491481140148,Y0160028J02011J012420481,g0F0078001401002212I08102,g0D001CI014422884040900284,g0FC078K08J0800A0248004,g0D7AF808490044010D400801248,g03EFD101002208AA100850A808,g05DAB8002804510020108100228,g01BFF00400I8011014200104,gG07ECI0890012802008240482,gG02BC0011014I05042088A0284,gG082I08J042104001I01,X0345J020884A94410494148A12A,X02E97CL08J0209J0204,X03C3F70094401142904041210209,X05C6DFCI08J08050A04044I04,X0387B56002I0A209010101008208,X03CDIF00800108I040424122C5,X058BD7BK04104A2828084I08,X038F0158L02I01009002901,X03CB90F8J0420A94022015402,X01C70058K042J04022I085,P08524J03234078K0800942028022408,P02001J02FE8058J0114AI02409I042,Q021K01DBA078K0210801401051288,Q08848J0FEFE5K010010200A8204411,P0511L06BEFF8K024J09008001,S028J03BDABM014K08044812,Q021L017BFD8K014J021148014,P024402K047B78P028801J01,Q080A4L016DK02L0124I0414,P010AO01F8008M048005I08,Q01004Y010012800414,S0A88J0DK022U08,Q05402K075I04N040042200412,R01102J0FF2008N0800I8I08,Q0A0028J0AAFBS02J0914,R01481J0FFDF1S02,R04M0EBF59DM08N0142,Q0482A14J0FBE9ER01J01,Q081004L06F96V0104,Q0281082L0B9EM04O02,Q0814408I08I01EW092,P010010AJ078I06V01,Q0140101I0582P02002L012,P04004014I0F87CP04,Q044148J0F0EEO0104M042,Q088A10A001A0BFP0202K01,O089210020400F1DBW0244C,N021I01202I0A37FV04,L01I01148090801E1E58V0C11,O040402104I0E3478U020I4,N028402041J0A2E38U09,O0211041J01FFC68T0200148,N020224882J03AC38X01,O0840012K0F7838,O01011004J056C68X04,N0121442L0BF858X08,P04004A9I051F078,O01014P0FX01,O0414088128K02,P0402204I05,Q02882840085002,P0101081J07F07,P042801K0AEF7,Q08148J04FBFEC,Q01M09DEABFC,R012L0JF58,Q014K040B17AF8,g0E047DC,g0E00EF8,K01S02F00388,g01007,K01W038,gI07,L04S0AI08,g0FA,g0EFD,L02S0BAFE,g0EFAB9,M08R0BEFF2E,gG0BED9E,gH0BF16,gI059E,gJ01E,gG05I02,M02R01FF,g07DB,N04Q0I7C,g0AED6,N02Q0JF,g0D85B,Y01F007,g0600F,Y01E0058,g0E0078,g070028,g0E0078,g0F8068,g0380B8,gH01F8,gH01D,g08001,g078,g0D82,g0F0FC,g0A0AE,Y01F1FB,g061EF,Y01E2BD,g0E1E78,Y01A3C68,g073C38,g0E6C38,g0FB868,g05FC38,g06A878,g03F85,g01E0F8,gI0F,,::::::::::::::::::';
    $label->addGraphic(CompressionType::ASCII, 11388, 11388, 26, $data)->at(600, 50);
    $label->setDefaultOrientation(OrientationType::ROTATED);

    $label->setDefaultFont('D', 20);
    $label->addText('John Doe')->at(230, 150);
    $label->addText('100 Main Street')->at(190, 150);
    $label->addText('Springfield TN 39021')->at(150, 150);
    $label->addText('United States (USA)')->at(110, 150);
    $label->addText('Ref: 657546765686')->at(70, 150);

    $label->addBarcode128('OME202300001878X1')->at(300, 200)->withBarcodeDefaults(4, 2.0, 250);

    $label->setDefaultFont('0', 150);
    $label->addText('1/1')->at(600, 1000);

    $zpl = $label->render(true);
    expect($zpl)->toBeString();
});

/*
^XA

^FO600,50^GFA,11388,11388,26,,:::::::::::::::hG08,,:hH02,,hH05,hH08,hH01,hH08,hH01,hG0201,hI08,hH022,hI08,hH02,hJ04,hH0148,hJ02,hI028,hI081,hI01,gT0428K0104,gR0420CL0851,gT0409K0102,gQ04021,gT0429L0A9,gS0AI012I09,gR020541400400108,gQ028001400508A01,gQ0404AI0901I04,gP0202904220141148,gR08010440802002,gQ05I0280A08851,gN035BA5BD53A0I1042,gN0C545542245804I08,gM01BAB2A55ED924025,gM05220D5AC126489004A,gM024DF2253EC8D20101,gL01CD205CAA136A8245,gL0152CDC394A499880052,gM02D2A34655B652121,gL01D459CD9AA49A48442,gL032BA533225B21A10804,gM0504A445DA15E48209,gL03ADDABBA25D51C00102,gL0212K0401541I42,gL01E5800148A025C08802,gL021DI040202E529I14,gL01628I010089A50024,gL0299I01245144C22002,gM06680040102BB20042,gL0399I08A02024C04002,gL025280010400C92A952,gL05548I01045364J01,gL0155I020490C9D1021,gL0A558I0400536242804,gL01A2I0204104940402,gK08B5D8I048C1B4C90294,gM022K02084B2008002,gL01CC8004A001B0C1508,gL03558J0A282F240224,g082K02AI028081C1482J08,g01K03D48004I123A51010A1,g082K02B8008J045C0245,Y0208J05D202812521DA1208,Y08214I0224ED2B495531E02120A,X0510011001DD904A662646014,W04005200103I2FB8AC58B15004489,X0A1I024005AD0279BC74E4429,W02020854001448DC85038B2D080I2,V010042080A01DBI35A6C72A020208,W0440021204014CC4D2I944C800102,V02088208J0E331D24552BB81004,W0112890A2I0C4E24DC55120800841,V044J0104403BB1A5A3D2D42,U010024I02J02565E2C1524020028,T0102A8124401400494A4CAE548AI04,S04K0848894Q082104,N010020881001001I08P02L014,O024822022A0490201R055,M02C0014028404002024Q09002J021,L01008080101009140248Y08,N010D114200404048008001M0124A,K029481004002502008011012522A8A0D02904I0141,N012020144024251I4024A5D272FAFC6C80024,J014110028940820808008001B98458D9203911,L0A041010112841404A14004273A7225DC6C,J0890204402J09201K01AE8E584DB21A021002,I0120405008842080024084001515147AA05E1A84,M08849009011210841J0AD5D5859DA1D4008021,K04I01021024I040882001245235A432C2892J01,I04J0I214J092841J01CBA5C34BC53D2042,O08I0214A0410824002282A2C381A4242J04,I08L0240941020041J01DBDA59C3E5DC8824001,N010809J084208140012424C52C1A301208004,O04040224121421O01A5BE1CI04K02,O08214008AI08808M022901B0041002012,Q080092024110AM01DD67A4I084I04,P0410A00200401N0522985800A200508,R0202002282O0AI56AK01K02,I01L0140084A8408N035AA218008094001408,R04AI010414L014455CEN028,Q02902A8021N055DAA38I0108J0802,T040148848L0D5I24K01J02,S02914012M03255CDCJ04N04,W020028J02455252Q08I08,T0810J8K01DAA5AC,S01145122L01255A2V08,U01J04L052A5C,T028040AL01AD492V08,T08020114L0529A48,T01144CM019535BAT08,U04I04M064C445U04,T0109290CL01B1D94A,W0401BDL04E16D5S044,Y047FAK011E92AC,X020DDFEK0612C53R02,X04AF3ABDJ01E43ACCN04,g0DF7FFCJ015C533M05001,g0BED5ACJ02A3A4AEK01020448,g0F1FF7CK05C1B41L01,g0B037DCK021E29D4K0410A28,g0F02CEC021210F1C3258I0108204,g0F07C3C15B5AB063C5DK04081,Y01B02C2C2C2554E942427J0I1428,g0703C3C03E5251AD5DA98K02,g0D06C2C1C1A5AD52A34AK02024,g0F83C3C01D5452255C55CJ0C1008,g0F02C342F2A7A5D54354L0424,g0303A2C185182A2A5C55CK08008,gH03C3C15AA6CA55A2A2K090A5,g080042C2325A39D24D5DCK02,g08I03C145A5C635IA2L080A,g0CI02C2DIA59A55AADCJ041508,g0FgJ08,g05gK0208,g0FC018Y02485,g0EC078gH08,g05B1F8g0A9,g03F35gI014,gG0DFF8I01084088AI08K0814,gG0B6F001FA23B52316DBM0A08,gG07F800102DC25DC5994CK01,g01EDI045CA34C13D262L04028,g0EBBI01D3A4D9A4258DCL028,g0BFFC001241D33554A7AL02008,g07E560124DD3442EC981CM01,g0D86E041D92455A13B5AJ020024,g0F01FA02234DAA5D4426CM088,g0C01D820CC5144A35D598L01,g08003882324E3D942253J02I028,gI07405CDD9C26BDAD44,X02CI018083252559425258,X03FCI08A1C584042800DA4,X05B79009023A409DD401228,X03IF51009C4A20228455AA,X07AD6F70913B882DD200528,Y07BFDD1024210012C24A688,g0FD7FC085CC14E5009989,g0B7D5811D1A019AC40678,g0E07F0412504A2209188,g0B007A025E4005DD0573C1,g0F00E051A0A89D00200C1,g0D0034026541027C41F3C,g0F0058418EC01480010C1,g0B807882390A4DBC0461C,g0F50DA11C2D0124009AE,g06FBB8021D2206AC0121C,g03F76889D2804948004E,g01AEF92126509AB800B9C,gG0FDB4005981054801A2,gG03FF005A244109I02DC,gH0541512D5042I01C21,gI0140255C28J013CC01,g0AJ021A80014A040431002,g0FA0244245A4I0401BCC,g0FFD4109BE48908800450204,g0ABEB01I08101J08048114,g0FEBBC81422002I01121,V08I0DBFF008I0228L08002,U0AI041755A212C1401I040908201,T010I2I0FF9J0404M010424,T0401401400D82411A994035A2J08,R021028044020BI09523I0C21C2200154,R040102208845E004055C0839DD3C,S042100A008874293A5340C31242440012,R010404901120D0C051A4082CI5A88,P012C484I04001FC01455B91D9B2D5AJ02,T0109128402F894BA1400254525K04,P02002040400858100125E522CA54CA44028,Q05404020221F78512CA1A84IA399C08009,P040049082003ED100232D413995C532401,Q0A080208496BFE089CCA5806623A449002A,P020408811007FAE41233A52799DC4DA0224,P0900A214011DD7B081CC08005201AA2,Q04CK04479ED90B329015A60254C49409,P01008212500F1CF8204581062800A52I02,R090441029A453003BA004956415AC1414,P014028K0F9E6C9225A50ACC00A52C0802,R0A0124421A0D39054A00153240A9400124,Q0101041144F1C1C215A892A4C002A50A8,S042K0E4F78035190125242D4C201,Q01280I200B1A3A16450095C81025A80804,T0104044F17D840BD12153A01DA204208,S0144040958D788BA2412A405025C088,S0400914079FFI01580225900DA11204,T029I0108DE105E5141DD0402164009,S0100201401F944B1A40322I0CE8092,U010200AL0618024A941B862049,W04225C00943AE01255I023882,V02040F92200A20DA5AA125C451009,V04904B07C0914FI26A04B1DC045,V08040E4BD202D8DAD844BC6A21081,V01200D9F7409332423C841A1C42,Y01F2AD0424455D5109E1B208224,Y0161FFA80ID42D4060D442094,g0E355014A225D2449FA5942004,g0E2E7C009ADA25A0401BI04082,T08K0B2D38406424DA00BDE220905004,S09K01E3C2A811BD58542A21C0205,T02K05FE780042295A0425B0A49042,T084J0FE95C0204D65400DD42J08,S02004I06D83I04A80404CI04142214,T0128I03B86C40801481K0880808,U04J01F0F8802081I080101020202,V02L0F4008408005L084414,gI011400120028002BE20884,g0FL02J08J0A2C41202,g038L0420112841A98900A8,g0F07CI0404K088962051002,g0F0DAJ048040422128C2I08,g0A0F7I0I10948802D78081414,Y01F1AFO0102028540408,g0A1FDJ0420124281D3812801,Y01E3678L04I0152420025,g0B1E68I04A00141005BC041,g0E3C78K01440841A205081,Y01B3428M08408554C821424,g07AC3CK02A081102BA01,g0D7C38M0214015201412,g07D868P082IC4040AA,g037878K01491004B510102,g02F0E8012A2A1267398AC5428108,gG0C0F80155D5EA98462A1008002,gI05I0I2A0243D9D9C200248,gL01DDA4FDDC2202A050880C,gL02525B8I2CDFD0104I1,gL01A69234DD3902C840804,gM029664DA2D25C12141402,gL01A299D21995A3CJ0148,gL014DA235D5255C0842A,gM0592DC3255A21C2080428,gL01D55A2C592A4E48201082,gL012551DBA651B9A0428408,gO022I084462K08A,gN040420108195D4A51104,g0CM08I08810A2AI084,g0F9K012A9412420D5C2900242,g05F2I014I01J092814028904,g0FAF40080214040900D7CI02028,g0D7DFA01084080405120095101,g0FF7EFC850022A1404CDD00I414,g0ID5BE002A4J0813300A008,g0B9FFEC490080151144C6202914,g0F02EBA00112480221D3811,g0D001FC008I014I02448240A1,g0F8004C01149481423DBAI0A04,g0BT08022029101,g0FM092808A104ACC804202,g05O022104219BA110044,g0F8M0904208044I04121,Y01FO020021490814I042,g05O0845K0140A448,gO021082212280200914,gQ0200441002804,gG058L0280240084480A8822,g03FBQ0AA1K0104,g07FF8K012A49I02A128028A,g0552CN09220900442882,g0IFBL091I02012I02,g0FDF7N0202404041402A2,g0B03FJ024020280281040A,g0E005J0894828048040810404,Y01E00F8004101081491481140148,Y0160028J02011J012420481,g0F0078001401002212I08102,g0D001CI014422884040900284,g0FC078K08J0800A0248004,g0D7AF808490044010D400801248,g03EFD101002208AA100850A808,g05DAB8002804510020108100228,g01BFF00400I8011014200104,gG07ECI0890012802008240482,gG02BC0011014I05042088A0284,gG082I08J042104001I01,X0345J020884A94410494148A12A,X02E97CL08J0209J0204,X03C3F70094401142904041210209,X05C6DFCI08J08050A04044I04,X0387B56002I0A209010101008208,X03CDIF00800108I040424122C5,X058BD7BK04104A2828084I08,X038F0158L02I01009002901,X03CB90F8J0420A94022015402,X01C70058K042J04022I085,P08524J03234078K0800942028022408,P02001J02FE8058J0114AI02409I042,Q021K01DBA078K0210801401051288,Q08848J0FEFE5K010010200A8204411,P0511L06BEFF8K024J09008001,S028J03BDABM014K08044812,Q021L017BFD8K014J021148014,P024402K047B78P028801J01,Q080A4L016DK02L0124I0414,P010AO01F8008M048005I08,Q01004Y010012800414,S0A88J0DK022U08,Q05402K075I04N040042200412,R01102J0FF2008N0800I8I08,Q0A0028J0AAFBS02J0914,R01481J0FFDF1S02,R04M0EBF59DM08N0142,Q0482A14J0FBE9ER01J01,Q081004L06F96V0104,Q0281082L0B9EM04O02,Q0814408I08I01EW092,P010010AJ078I06V01,Q0140101I0582P02002L012,P04004014I0F87CP04,Q044148J0F0EEO0104M042,Q088A10A001A0BFP0202K01,O089210020400F1DBW0244C,N021I01202I0A37FV04,L01I01148090801E1E58V0C11,O040402104I0E3478U020I4,N028402041J0A2E38U09,O0211041J01FFC68T0200148,N020224882J03AC38X01,O0840012K0F7838,O01011004J056C68X04,N0121442L0BF858X08,P04004A9I051F078,O01014P0FX01,O0414088128K02,P0402204I05,Q02882840085002,P0101081J07F07,P042801K0AEF7,Q08148J04FBFEC,Q01M09DEABFC,R012L0JF58,Q014K040B17AF8,g0E047DC,g0E00EF8,K01S02F00388,g01007,K01W038,gI07,L04S0AI08,g0FA,g0EFD,L02S0BAFE,g0EFAB9,M08R0BEFF2E,gG0BED9E,gH0BF16,gI059E,gJ01E,gG05I02,M02R01FF,g07DB,N04Q0I7C,g0AED6,N02Q0JF,g0D85B,Y01F007,g0600F,Y01E0058,g0E0078,g070028,g0E0078,g0F8068,g0380B8,gH01F8,gH01D,g08001,g078,g0D82,g0F0FC,g0A0AE,Y01F1FB,g061EF,Y01E2BD,g0E1E78,Y01A3C68,g073C38,g0E6C38,g0FB868,g05FC38,g06A878,g03F85,g01E0F8,gI0F,,::::::::::::::::::^FS

^FWR

^CFD,20
^FO230,150^FDJohn Doe^FS
^FO190,150^FD100 Main Street^FS
^FO150,150^FDSpringfield TN 39021^FS
^FO110,150^FDUnited States (USA)^FS
^FO70,150^FDRef: 657546765686^FS
^CFA,15

^BY4,2,250
^FO300,200^BC^FDOME202300001878X1^FS

^CF0,150
^FO600,1000^FD1/1^FS

^XZ
*/
