<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '0065b51c-49c0-4e81-a3b3-a6b4e21b3c20',
                'nama' => 'ANCA',
                'kode' => '72.10.04.2004',
                'luas' => '100',
                'polygon' => '[{"lat":-1.3251076851500867,"lng":120.05172729492186},{"lat":-1.303140808146866,"lng":120.03387451171875},{"lat":-1.2921572975991973,"lng":120.02426147460936},{"lat":-1.2798007914843985,"lng":120.02426147460936},{"lat":-1.2674442258359135,"lng":120.03662109374999},{"lat":-1.2674442258359135,"lng":120.04898071289062},{"lat":-1.2537146393238967,"lng":120.06546020507812},{"lat":-1.2454768528056617,"lng":120.07369995117188},{"lat":-1.2427309182355561,"lng":120.08605957031249},{"lat":-1.2358660693342234,"lng":120.10665893554688},{"lat":-1.2372390405371851,"lng":120.11489868164061},{"lat":-1.2331201247997963,"lng":120.12176513671875},{"lat":-1.2262552510841573,"lng":120.12863159179688},{"lat":-1.2317471514699085,"lng":120.1409912109375},{"lat":-1.2317471514699085,"lng":120.14785766601561},{"lat":-1.2427309182355561,"lng":120.15472412109375},{"lat":-1.2495957492941936,"lng":120.16845703125},{"lat":-1.26195239992168,"lng":120.17807006835936},{"lat":-1.2729360401038594,"lng":120.18630981445312},{"lat":-1.2770548931316255,"lng":120.16983032226562},{"lat":-1.2880384688779172,"lng":120.1519775390625},{"lat":-1.2949031797043231,"lng":120.14511108398436},{"lat":-1.2949031797043231,"lng":120.12863159179688},{"lat":-1.3154972002419345,"lng":120.10528564453125},{"lat":-1.2935302390231982,"lng":120.10665893554688},{"lat":-1.2756819428547288,"lng":120.10665893554688},{"lat":-1.2839196334992269,"lng":120.09841918945311},{"lat":-1.2839196334992269,"lng":120.09017944335938},{"lat":-1.2880384688779172,"lng":120.08193969726562},{"lat":-1.2894114125257745,"lng":120.07232666015626},{"lat":-1.2935302390231982,"lng":120.06271362304688},{"lat":-1.3100054779424628,"lng":120.06134033203125}]',
                'warna_polygon' => '#8285fd',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-10 21:16:58',
            ],
            [
                'id' => '0065b51c-49c0-4e81-a3b3-a6b4e21b3c21',
                'nama' => 'LANGKO',
                'kode' => '72.10.04.2005',
                'luas' => '200',
                'polygon' => '[{"lat":-1.3292264529974207,"lng":120.01739501953125},{"lat":-1.3305993740875375,"lng":120.02838134765625},{"lat":-1.334718132769963,"lng":120.04074096679689},{"lat":-1.33883688455388,"lng":120.04898071289062},{"lat":-1.3360910507988086,"lng":120.05584716796874},{"lat":-1.3484472784360075,"lng":120.06546020507812},{"lat":-1.3511930983018765,"lng":120.07369995117188},{"lat":-1.3470743673411019,"lng":120.08468627929686},{"lat":-1.3539389150639312,"lng":120.09292602539062},{"lat":-1.3621763466641585,"lng":120.10253906249999},{"lat":-1.3676679520963495,"lng":120.12451171875},{"lat":-1.3772782313340988,"lng":120.13137817382811},{"lat":-1.3772782313340988,"lng":120.15060424804689},{"lat":-1.3882613601346867,"lng":120.16708374023438},{"lat":-1.4061088354351594,"lng":120.18081665039061},{"lat":-1.4143460858068593,"lng":120.1849365234375},{"lat":-1.4239561742738065,"lng":120.18218994140626},{"lat":-1.4404305182774488,"lng":120.18081665039061},{"lat":-1.4555318956783565,"lng":120.16571044921876},{"lat":-1.4706331719445715,"lng":120.15609741210938},{"lat":-1.4816158541987807,"lng":120.14648437499999},{"lat":-1.4898528301783416,"lng":120.13549804687501},{"lat":-1.5008354168795408,"lng":120.13412475585936},{"lat":-1.4884800029826135,"lng":120.11489868164061},{"lat":-1.4692603328543323,"lng":120.10253906249999},{"lat":-1.4514133481911609,"lng":120.09841918945311},{"lat":-1.4431762307345868,"lng":120.07644653320312},{"lat":-1.4335662226731178,"lng":120.04898071289062},{"lat":-1.4212104387885367,"lng":120.04898071289062},{"lat":-1.4102274642652444,"lng":120.05584716796874},{"lat":-1.3882613601346867,"lng":120.06820678710936},{"lat":-1.3717866479264473,"lng":120.07369995117188},{"lat":-1.3608034433485081,"lng":120.06134033203125},{"lat":-1.3566847287158743,"lng":120.04486083984375},{"lat":-1.3539389150639312,"lng":120.02563476562501},{"lat":-1.3539389150639312,"lng":120.01602172851562},{"lat":-1.345701455472609,"lng":120.01190185546875}]',
                'warna_polygon' => '#48f0f9',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-10 21:18:47',
            ],
            [
                'id' => '0065b51c-49c0-4e81-a3b3-a6b4e21b3c22',
                'nama' => 'OLU',
                'kode' => '72.10.04.2002',
                'luas' => '300',
                'polygon' => '[[{"lat":-1.3244441048954787,"lng":120.0524139404297},{"lat":-1.326246067155628,"lng":120.05224227905275},{"lat":-1.3275331822525485,"lng":120.05112648010255},{"lat":-1.329678372591414,"lng":120.05069732666017},{"lat":-1.3315661385475852,"lng":120.05018234252931},{"lat":-1.3323384060221573,"lng":120.05129814147949},{"lat":-1.3333680956116498,"lng":120.05215644836427},{"lat":-1.3355132808726455,"lng":120.05344390869142},{"lat":-1.336457161794477,"lng":120.05473136901857},{"lat":-1.3386881516217195,"lng":120.04898071289064},{"lat":-1.3348268217927033,"lng":120.0410842895508},{"lat":-1.3307938708310496,"lng":120.02889633178712},{"lat":-1.329163527079987,"lng":120.01730918884279},{"lat":-1.323586027168108,"lng":120.01516342163087},{"lat":-1.317064626750628,"lng":120.01293182373048},{"lat":-1.3082263858062095,"lng":120.01130104064943},{"lat":-1.304365008618187,"lng":120.01035690307619},{"lat":-1.2955267230023308,"lng":120.01610755920412},{"lat":-1.2886620138605627,"lng":120.02074241638185},{"lat":-1.2878039239149133,"lng":120.02134323120119},{"lat":-1.2799952921571425,"lng":120.02434730529787},{"lat":-1.2869458336803676,"lng":120.02426147460939},{"lat":-1.2920943707503192,"lng":120.02426147460939},{"lat":-1.3053947097817435,"lng":120.03567695617677},{"lat":-1.3146620012378532,"lng":120.04314422607423},{"lat":-1.3209259843271979,"lng":120.04829406738283},{"lat":-1.3238434505175039,"lng":120.05086898803712}]]',
                'warna_polygon' => '#e79898',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => '0065b51c-49c0-4e81-a3b3-a6b4e21b3c23',
                'nama' => 'PURO\'O',
                'kode' => '72.10.04.2001',
                'luas' => '400',
                'polygon' => '[{"lat":-1.3511930983018765,"lng":120.01602172851562},{"lat":-1.3539389150639312,"lng":120.03662109374999},{"lat":-1.3580576343735706,"lng":120.047607421875},{"lat":-1.3621763466641585,"lng":120.06820678710936},{"lat":-1.3704137501031313,"lng":120.07095336914061},{"lat":-1.3827698020869972,"lng":120.07232666015626},{"lat":-1.4006173190275208,"lng":120.06271362304688},{"lat":-1.4102274642652444,"lng":120.05447387695311},{"lat":-1.425329040790274,"lng":120.04898071289062},{"lat":-1.4157189580307432,"lng":120.0311279296875},{"lat":-1.408854588797322,"lng":120.02151489257811},{"lat":-1.393752905426787,"lng":120.02014160156249},{"lat":-1.3786511252106772,"lng":120.01602172851562},{"lat":-1.3717866479264473,"lng":120.00778198242186},{"lat":-1.3635492491975707,"lng":120.01327514648438}]',
                'warna_polygon' => '#ffff00',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-10 21:20:45',
            ],
            [
                'id' => '0065b51c-49c0-4e81-a3b3-a6b4e21b3c24',
                'nama' => 'TOMADO',
                'kode' => '72.10.04.2003',
                'luas' => '500',
                'polygon' => '[[{"lat":-1.2747437583474754,"lng":120.18013000488283},{"lat":-1.2790513900012155,"lng":120.18510818481447},{"lat":-1.2801669106936204,"lng":120.1923179626465},{"lat":-1.2848864159399174,"lng":120.19532203674318},{"lat":-1.2873748788337396,"lng":120.2021884918213},{"lat":-1.2878039239149133,"lng":120.20896911621095},{"lat":-1.291236281962188,"lng":120.21506309509279},{"lat":-1.2972428973853416,"lng":120.22261619567873},{"lat":-1.299130687862101,"lng":120.22501945495607},{"lat":-1.3022197965078266,"lng":120.22759437561037},{"lat":-1.304708242386203,"lng":120.2322292327881},{"lat":-1.3101141680474184,"lng":120.23712158203126},{"lat":-1.3162065464760404,"lng":120.24673461914064},{"lat":-1.3199820974730465,"lng":120.2553176879883},{"lat":-1.3286486814612353,"lng":120.25197029113771},{"lat":-1.334741014394236,"lng":120.2542018890381},{"lat":-1.339374609621838,"lng":120.26947975158693},{"lat":-1.3448662666920261,"lng":120.27565956115724},{"lat":-1.3543050233815472,"lng":120.27900695800783},{"lat":-1.362971485794331,"lng":120.28630256652833},{"lat":-1.3702650191092007,"lng":120.28656005859376},{"lat":-1.3782449771721388,"lng":120.28638839721681},{"lat":-1.385366852651152,"lng":120.27291297912599},{"lat":-1.395234476043134,"lng":120.27565956115724},{"lat":-1.3988382934132304,"lng":120.27832031250001},{"lat":-1.406217521218034,"lng":120.27720451354982},{"lat":-1.414540575738832,"lng":120.2666473388672},{"lat":-1.4154844254009127,"lng":120.26055335998537},{"lat":-1.4117090244499957,"lng":120.25265693664551},{"lat":-1.4158276433645998,"lng":120.24742126464844},{"lat":-1.428097652092162,"lng":120.24012565612794},{"lat":-1.434618748988329,"lng":120.24003982543947},{"lat":-1.4404533988791353,"lng":120.23394584655763},{"lat":-1.4380508977889215,"lng":120.22587776184083},{"lat":-1.4453441968380007,"lng":120.22544860839845},{"lat":-1.4531522910305816,"lng":120.22390365600587},{"lat":-1.4557263821080675,"lng":120.21926879882814},{"lat":-1.4528948817613996,"lng":120.2128314971924},{"lat":-1.4498917714550266,"lng":120.20862579345705},{"lat":-1.4517794412560578,"lng":120.19592285156251},{"lat":-1.4474892803410042,"lng":120.18836975097658},{"lat":-1.4476608869336214,"lng":120.18090248107912},{"lat":-1.4583004702467082,"lng":120.1769542694092},{"lat":-1.4595875132123506,"lng":120.16691207885744},{"lat":-1.4665375324809273,"lng":120.16064643859865},{"lat":-1.468596793309094,"lng":120.15764236450197},{"lat":-1.45538317013409,"lng":120.16571044921876},{"lat":-1.4401959881691364,"lng":120.18081665039064},{"lat":-1.4234642298905515,"lng":120.18210411071779},{"lat":-1.4143689666681174,"lng":120.18485069274904},{"lat":-1.4055310824045353,"lng":120.18030166625978},{"lat":-1.3883700467433477,"lng":120.16708374023439},{"lat":-1.377215306663328,"lng":120.15077590942384},{"lat":-1.377215306663328,"lng":120.13154983520508},{"lat":-1.367433414688397,"lng":120.12442588806154},{"lat":-1.362113421596811,"lng":120.10253906250001},{"lat":-1.3470114418815538,"lng":120.08468627929689},{"lat":-1.3510443661227822,"lng":120.07369995117189},{"lat":-1.3485559668488065,"lng":120.06546020507814},{"lat":-1.3361997397608512,"lng":120.05576133728029},{"lat":-1.336371354452929,"lng":120.05455970764162},{"lat":-1.3325958284598916,"lng":120.0516414642334},{"lat":-1.3314803310354706,"lng":120.05018234252931},{"lat":-1.3276189899018598,"lng":120.05086898803712},{"lat":-1.3261602594586976,"lng":120.05224227905275},{"lat":-1.3241008738401703,"lng":120.0524139404297},{"lat":-1.3100283597945652,"lng":120.06134033203126},{"lat":-1.2936389298383846,"lng":120.06254196166994},{"lat":-1.2894342945644737,"lng":120.07224082946777},{"lat":-1.2879755419271595,"lng":120.08202552795412},{"lat":-1.2838567064469206,"lng":120.09009361267091},{"lat":-1.2838567064469206,"lng":120.09867668151857},{"lat":-1.2757906344292027,"lng":120.10648727416994},{"lat":-1.2969854713020554,"lng":120.1062297821045},{"lat":-1.3154342739764593,"lng":120.10502815246582},{"lat":-1.2949260616935585,"lng":120.12845993041994},{"lat":-1.294840252923547,"lng":120.14536857604982},{"lat":-1.2878897329224868,"lng":120.15180587768555},{"lat":-1.2769061565378705,"lng":120.16991615295412}]]',
                'warna_polygon' => '#82ffad',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-10 21:23:04',
            ]
        ];

        DB::table('desa')->insert($data);
    }
}
