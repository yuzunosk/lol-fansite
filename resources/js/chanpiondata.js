export const chanpionDatas = {
    data() {
        return {
            chanpionDatas: [
                {
                    id: 0,
                    name: "Fizz",
                    subName: "フィズ",
                    popularName: "波間のトリックスター",
                    feature: "2種類のBlinkを使い分ける、魔法ダメージが主体のAssassin。槍使いの例に漏れず通常攻撃の射程も長め",
                    roll: "Assassin",
                    subRoll: "Mage",
                    beCost: "4800",
                    rpCost: "880",
                    // img: require('./assets/chanpion/champion-fizz-cottontail-splash.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■■■■■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■■■■■■■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['シーファイター', 'Nimble Fighter'],
                            // type: "Passive", icon: require('./assets/skill_Icon/Fizz/Fizz_Nimble_Fighter_(P).png'),
                            text: `受けるDMを低減し、常にGhost(サモナースペル)のようにMinionをすり抜ける。
                                    ダメージ減少は序盤のレーン戦で非常に役に立つ。`
                        },
                        {
                            id: "Q",
                            name: ['ウニトゲストライク', 'Urchin Strike'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Fizz/Fizz_Urchin_Strike_(Q).png'),
                            text: "指定の敵ユニットの方向に突き抜るようにリープし、対象にAAと追加魔法DMを与える。通常攻撃なので当然On-hit-effectも有効。但しクリティカルは発生しない。使用と同時に射程外へflashされたりすると回避される。対象を突き抜ける前は薄い壁であれば通り抜けることも可能。敵チャンピオンを指定して攻撃する用途の他、後ろにミニオンを残った状況なら逃走にも利用できる。"
                        },
                        {
                            id: "W",
                            name: ['シートライデント', 'Seastone Trident'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Fizz/Fizz_Seastone_Trident_(W).png'),
                            text: `Passive: AA毎に3秒かけて魔法DMを付与する。
                                   Active: 次の4.5秒以内の最初のAARangeが50増加(合計225)し、追加魔法DMを付与する。
                                   この効果による敵ユニットLH時には、Costの一部が回復し、このスキルのCDが1秒に短縮される。また、このスキルは使用時にAAタイマーをリセットする。その後5秒以内のAA毎に別の追加魔法DMを付与する。`
                        },
                        {
                            id: "E",
                            name: ['プレイ/トリックスター', 'Playful / Trickster'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Fizz/Fizz_Playful_(E).png'),
                            // icon2: require('./assets/skill_Icon/Fizz/Fizz_Trickster_(E).png'),
                            text: `Active - プレイ: 指定地点に対象指定不可状態でリープする。0.75秒後にその場に降下し、周囲の敵ユニットに魔法DMとSlow(2s)を与える。着地するまでの間、トリックスターが使用可能になる。
                            Active - トリックスター: 降下する場所を別の指定地点に変更し、その周囲の敵ユニットに魔法DMを与える。このスキル使用時はプレイのSlowは発動せず、DM範囲はプレイより狭くなる。
                            浮いている間は方向指定、地点指定スキルに当たらなくなり、攻撃対象として指定することも出来なくなる。
                            薄い壁であれば乗り越えることも可能。逃げにも攻めにも使える。`
                        },
                        {
                            id: "R",
                            name: ['フィッシング', 'Chum the Waters'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Fizz/Fizz_Chum_the_Waters_(R).png'),
                            text: `Active: 指定地点に視界を得る敵チャンピオンにのみ当たる魚を投げる。魚は効果範囲内の敵チャンピオンにくっつき、対象の真の視界を得て継続的なSlowを与える。その2秒後に地面から鮫が現れ、魚が当たった対象とその周囲の敵ユニットに魔法DMを与え、対象にKnockup(1s)、対象以外の敵にKnockbackを与えた後、それぞれSlow(1.5s)を与える。魚が敵チャンピオンにくっつかなかった場合は指定地点に魚が残り、その地点に鮫が現れる。指定地点か敵チャンピオンにくっつくまでの魚の移動距離に応じて出現する鮫の種類と効果が変化する。`
                        },
                    ],
                    tagLists: [
                        {name: "ブリンク持ち" , subname: "blink"},
                        {name: "バーストダメージ" , subname: "burst damage"},
                        {name: "ミッドレーン" , subname: "Mid lane"},
                    ],
                    createDate: "2011/11/15",
                    updateDate: "2019/1/18",


                },
                {
                    id: 1,
                    name: "Ahri",
                    subName: "アーリ",
                    popularName: "美しき、九尾の狐",
                    feature: "3段Leapや低CDの加速スキルにより非常に高い機動力を持つMage/Assassin、バーストダメージは少し低め",
                    roll: "Mage",
                    subRoll: "Assassin",
                    beCost: "4800",
                    rpCost: "880",
                    // img: require('./assets/chanpion/kda-worlds-1.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■■■■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■■■■■■■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['ヴァスタヤの恵み', 'Vastayan Grace'],
                            // type: "Passive", icon: require('./assets/skill_Icon/Ahri/Ahri_Vastayan_Grace_(P).png'),
                            text: "1.5秒以内に敵チャンピオンにスキルを2回当てた場合、MSが増加する。"
                        },
                        {
                            id: "Q",
                            name: ['幻惑のオーブ', 'Orb of Deception'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Ahri/Ahri_Essence_Theft_(Q).png'),
                            // icon2: require('./assets/skill_Icon/Ahri/Ahri_Orb_of_Deception_(Q).png'),
                            text: `AoEスキル。Farmにもハラスにも使える。射程ギリギリで当てれば確実に往復ヒットする。往復ヒットした際のTrue Damageは非常に痛い。
                            Passive: 敵ユニットにスキルが当たる毎に1スタック増加し(最大9スタック)、最大スタック時のQスキルが敵ユニットに当たった時に全スタック消費して1Hit毎にHPを回復する。
                            Active: 指定方向に貫通するオーブを放ち当たった敵ユニットに魔法DMを与える。オーブは往路と復路でそれぞれに当たり判定があり、帰りの場合は魔法DMの代わりにTrueDMを与える。`
                        },
                        {
                            id: "W",
                            name: ['フォックスファイア', 'Fox-Fire'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Ahri/Ahri_Fox-Fire_(W).png'),
                            text: "敵Championを優先的に狙わせるには一定距離まで近付く必要がある。表示されている射程は周囲を回る鬼火からの射程でありAhri本体からの距離ではないので注意。ほぼノーモーションで歩きながら使えるため攻めや逃げでも使いやすい。それぞれの弾の対象はあくまで単数なため、Spell Vampなどの効果は単体扱いとなる。"
                        },
                        {
                            id: "E",
                            name: ['チャーム', 'Charm'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Ahri/Ahri_Charm_(E).png'),
                            text: "Ahriのコンボの起点。全てはこのキッスが当たってから始まる。魅了状態は画面上に「Taunted!」と表示される。Tauntと違い自分に攻撃させる効果はないため、Rangedの敵Championも安定して引き寄せる事が出来る。TenacityやCC除去効果は有効。Champion以外にも当たるので、Lane戦ではMinionを盾にされると非常に当てづらい。"
                        },
                        {
                            id: "R",
                            name: ['スピリットラッシュ', 'Spirit Rush'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Ahri/Ahri_Spirit_Rush_(R).png'),
                            text: "指定方向にリープし、敵チャンピオンを優先とした付近の敵ユニット3体までに魔法DMを与える。魔法DMは同一対象にはスキル使用毎に一度しか発動しない。このスキルは使用後10秒以内は最大2回までCost無しで追加使用できる"
                        },
                    ],
                    tagLists: [
                        {name: "ブリンク持ち" , subname: "blink"},
                        {name: "バーストダメージ" , subname: "burst damage"},
                        {name: "ウェーブクリア" , subname: "wave clere"},
                        {name: "ミッドレーン" , subname: "Mid lane"},
                    ],
                    createDate: "2011/12/14",
                    updateDate: "2019/1/18",

                },
                    {
                    id: 2,
                    name: "Pantheon",
                    subName: "パンテオン",
                    popularName: "砕けぬ槍",
                    feature: "強固な盾と槍を使いこなすガチンコファイター。対象指定スタンと超長距離Blinkによる恐怖のGankが持ち味",
                    roll: "Fighter",
                    subRoll: "Assassin",
                    beCost: "3150",
                    rpCost: "790",
                    // img: require('./assets/chanpion/champion-pantheon-splash-classic.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■■■■■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■■■■■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['定命の意志', 'Mortal Will)'],
                            // type: "Passive", icon: require('./assets/skill_Icon/Panteon/Pantheon_Mortal_Will_(P).png'),
                            text: "AAかスキル使用毎に1スタック増加し(最大5スタック)、最大スタック時の偉大なる星路(R)以外のスキル使用時に全スタック消費してスキルが強化される。"
                        },
                        {
                            id: "Q",
                            name: ['彗星の槍', 'Comet Spear)'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Panteon/Pantheon_Comet_Spear_(Q).png'),
                            // icon2: require('./assets/skill_Icon/Panteon/Pantheon_Comet_Spear_2_(Q).png'),
                            text: "消費マナ、CD、威力、射程のバランスが非常に優れている優秀なスキル。タップでの発動はCDが半分になるシンプルな前方範囲攻撃で、メインダメージソース。ハラスや中立狩りのメインにも幅広く活用できるが、連発すると簡単にマナが枯渇する。長押しするとレンジは伸びるが、最初に当たったユニット以外にはダメージが半減する。"
                        },
                        {
                            id: "W",
                            name: ['跳撃の盾', 'Shield Vault'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Panteon/Pantheon_Shield_Vault_(W).png'),
                            // icon2: require('./assets/skill_Icon/Panteon/Pantheon_Shield_Vault_2_(W).png'),
                            text: "飛びつき＋スタンなので確実に捉えることが出来る。だが飛びつき可能距離はさほど長くなく読まれやすい、CDも短くない上に、無暗に使うとガンクに非常に弱くなるので注意。また発動してからフラッシュ等のブリンクを使われると、相手はブリンク先でスタンする。強化版は直後に行うAAが3連撃になり、ダメージは半分(計150%)になるがパッシブ等のスタックやOnHitは3回発動する。 この為多くのキーストーンやスタック系のアイテムと相性が良い。ただしタワーには発動しない。"
                        },
                        {
                            id: "E",
                            name: ['イージスの猛攻', 'Aegis Assault'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Panteon/Pantheon_Aegis_Assault_(E).png'),
                            // icon2: require('./assets/skill_Icon/Panteon/Pantheon_Aegis_Assault_2_(E).png'),
                            text: "指定方向に1.5秒間盾を構え、自身に移動方向に応じたSlow(0～50%)を付与し、盾を向けた方向からの敵タワーを含む敵ユニットからのDMを全て無効化する。また、その間盾を向けた方向を槍で扇状に連続で突き、範囲内の敵ユニットに0.125秒毎に物理DMを与える。"
                        },
                        {
                            id: "R",
                            name: ['偉大なる星路', 'Grand Starfall'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Panteon/Pantheon_Grand_Starfall_(R).png'),
                            text: "2秒詠唱後に対象指定不可状態で空中に飛び上がり、その2.4秒後に指定地点に向かって斜めに落下(テレポート)して周囲の敵ユニットに魔法DMを与え、定命の意志のスタックが最大になる。基本はGank用だが、体力に余裕があり敵がハードCCを持っていなければ逃げに使えなくも無い。攻撃スキルではあるものの物理攻撃力が乗らずダメージは控えめになりがち、移動・敵の足止め用と割り切ってダメージは期待しない事。"
                        },
                    ],
                    tagLists: [
                        { name: "ブリンク持ち", subname: "blink" },
                        { name: "アーリーゲーム", subname: "early games" },
                        { name: "ミッドレーン" , subname: "Mid lane"},
                        { name: "トップレーン" , subname: "Top lane"},
                        { name: "ジャングラー" , subname: "Jungler"},
                    ],
                    createDate: "2010/02/02",
                    updateDate: "2019/1/19",

                },
                    {
                    id: 3,
                    name: "Morgana",
                    subName: "モルガナ",
                    popularName: "堕天の高潔",
                    feature: "サポートタグが付いているとは思えない火力を誇るNuker、燃費は悪いが全てのスキルが高性能",
                    roll: "Mage",
                    subRoll: "Support",
                    beCost: "1350",
                    rpCost: "585",
                    // img: require('./assets/chanpion/champion-morgana-blackthorn-splash.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■" , color: "color:red" },
                        {name: "Magic"     , value: "■■■■■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■■■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['ソウルサイフォン', 'Soul Siphon'],
                            type: "Passive",
                            // icon: require('./assets/skill_Icon/Morgana/Morgana_Soul_Siphon_(P).png'),
                            text: `敵チャンピオンか大型ミニオン、および大型モンスターにスキルで与えたDMの20%分のHPを回復する。
                            小型ミニオンと小型中立モンスターには発動しない。`
                        },
                        {
                            id: "Q",
                            name: ['ダークバインド', 'Dark Binding'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Morgana/Morgana_Dark_Binding_(Q).png'),
                            text: `Active: 指定方向に魔法弾を飛ばし、当たった敵ユニットに魔法DMとSnareを与える。
                            これで敵を拘束したらWで追撃が基本。
                            長い射程を生かし視界外から撃てば当たりやすい`
                        },
                        {
                            id: "W",
                            name: ['苦悶の影', 'Tormented Shadow'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Morgana/Morgana_Tormented_Soil_(W).png'),
                            text: `Active: 指定範囲に苦悶の沼を発生させ、範囲内の敵ユニットに0.5秒毎に魔法DMを与える。魔法DMは対象の減少HP率1%毎に増加する。また、ソウルサイフォン(P)発動毎にこのスキルのCDが5%解消される。
                            もしくは動きの止まった敵の追撃に。傷ついている敵には効果大。Wによるものに限らずパッシブが発動するたびにCDが5%解消されるので、QやUltを当てた際もCDが短くなる。
                            `
                        },
                        {
                            id: "E",
                            name: ['ブラックシールド', 'Black Shield'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Morgana/Morgana_Black_Shield_(E).png'),
                            text: `Active: 対象の味方チャンピオンに魔法DMを軽減するシールドを付与する。シールドが残っている間は全CCを無効化する。
                            防御するのは魔法DMとDisable(CC)だけであり、AAなどの物理DMは防げないので注意。`
                        },
                        {
                            id: "R",
                            name: ['魂の足枷', 'Soul Shackles'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Morgana/Morgana_Soul_Shackles_(R).png'),
                            text: `Active: 周囲の全敵チャンピオンの真の視界を得て魔法DMとSlowを与え、闇の魔力の鎖(最大3秒)で繋がる。鎖で繋がった対象の方向に移動する場合MSが増加し、3秒間各対象が鎖の範囲1050に留まっていた場合はその対象に同様の魔法DMとStunを与え、対象の真の視界を得る。
                            スタンまで決めないと効果が薄い。終盤でも3人以上スタンさせれば上出来。`
                        },
                    ],
                    tagLists: [
                        {name: "サポート" , subname: "Support"},
                        {name: "ハードCC持ち" , subname: "hard cloud control"},
                        {name: "ウェーブクリア" , subname: "wave clere"},
                        {name: "スペルシールド" , subname: "spell shield"},
                    ],
                    createDate: "2009/02/21",
                    updateDate: "2019/1/19",

                },
                {
                        id: 4,
                        name: "Lee Sin",
                        subName: "リーシン",
                        popularName: "盲目の修行僧",
                        feature: "2種類のLeapによりJungler屈指の機動力を持つ、高難易度チャンピオン高いプレイヤースキルが要求される",
                        roll: "Fighter",
                        subRoll: "Assasin",
                        beCost: "4800",
                        rpCost: "880",
                        // img: require('./assets/chanpion/champion-leesin-muaythai-splash.jpg'),
                        statusDatas: [
                            {name: "Attack"    , value: "■■■■■■" , color: "color:red" },
                            {name: "Magic"     , value: "■■" , color: "color:purple" },
                            {name: "Toughness" , value: "■■■■■■" , color: "color:green" },
                            {name: "Mobility"  , value: "■■■■■■■" , color: "color:skyblue" },
                            {name: "Difficulty", value: "■■■■■■■■■■" , color: "color:#cddc39" },
                        ],
                        skills: [
                            {
                                id: "P",
                                name: ['練気', 'Flurry'],
                                type: "Passive",
                                // icon: require('./assets/skill_Icon/Lee sin/Lee_Sin_Flurry_(P).png'),
                                text: `スキル使用後2回のAAまでのASが増加し、建物を含む敵ユニットへのAA毎に「気」が回復する。
                                気の消費量が多いスキルの補助となるパッシブ。上手く使わないとすぐガス欠になる。ファームではこのPassiveによるAS増加を最大限に生かそう。
                                `
                            },
                            {
                                id: "Q",
                                name: ['響掌/共鳴撃', 'Sonic Wave / Resonating Strike'],
                                type: "Qスキル",
                                // icon: require('./assets/skill_Icon/Lee sin/Lee_Sin_Sonic_Wave_(Q).png'),
                                // icon2: require('./assets/skill_Icon/Lee sin/Lee_Sin_Resonating_Strike_(Q).png'),
                                text: `Active - 響掌: 指定方向に気を飛ばし、当たった敵ユニットの真の視界を得て物理DMを与える。敵ユニットに当たった場合、このスキルは使用後に3秒以内は共鳴撃に変化し、再使用可能になる。
                                Active - 共鳴撃: 響掌が当たった敵ユニットに向かってリープして物理DMを与える。物理DMは対象の減少HP率1%毎に増加する。
                                このスキルの精度がLee Sinの強さに直接関わる。
                                こちらから仕掛けたり、逃げる敵を追いかけたり、壁越しにCreepに撃ち込んで敵から逃げたりと様々な用途に使える。
                                `
                            },
                            {
                                id: "W",
                                name: ['守りの型/鉄の意志', 'Safeguard / Iron Will'],
                                type: "Wスキル",
                                // icon: require('./assets/skill_Icon/Lee sin/Lee_Sin_Safeguard_(W).png'),
                                // icon2: require('./assets/skill_Icon/Lee sin/Lee_Sin_Iron_Will_(W).png'),
                                text: `もう一つの移動スキル。
                                Active - 守りの型: 味方ワードと自身を含む対象の味方ユニットの元までリープする。対象が味方チャンピオンの場合、自身と対象にDMを軽減するシールドを付与し、このスキルのCDが50%解消される。このスキルは使用後に3秒以内は鉄の意志に変化し、再使用可能になる。
                                Active - 鉄の意志: LSとSVが増加(4s)する。自己強化は短時間とはいえ増加値が高く結構強いので、ファームに役に立つ。
                                `
                            },
                            {
                                id: "E",
                                name: ['破風/縛脚', 'Tempest / Cripple'],
                                type: "Eスキル",
                                // icon: require('./assets/skill_Icon/Lee sin/Lee_Sin_Tempest_(E).png'),
                                // icon2: require('./assets/skill_Icon/Lee sin/Lee_Sin_Cripple_(E).png'),
                                text: `ファームにも使えるAoEスキル。
                                Active - 破風: 周囲の敵ユニットの視界を得て魔法DMを与える。敵ユニットに当たった場合、このスキルは使用後に3秒以内は縛脚に変化し、再使用可能になる。
                                Active - 縛脚: 破風が当たった敵ユニットに徐々に元に戻るSlowを与える。
                                `
                            },
                            {
                                id: "R",
                                name: ['龍の怒り', 'Dragons Rage'],
                                type: "Ultimate",
                                // icon: require("./assets/skill_Icon/Lee sin/Lee_Sin_Dragon's_Rage_(R).png"),
                                text: `対象の敵チャンピオンにSnareを与えた後、物理DMとKnockbackを与える。Knockback中の対象に敵ユニットが触れた場合、同様の物理DMに加えてKnockbackさせた対象の最大HP比例の追加物理DMとKnockupを与える。
                                `
                            },
                        ],
                        tagLists: [
                            {name: "ブリンク持ち" , subname: "blink"},
                            { name: "バーストダメージ", subname: "burst damage" },
                            { name: "気", subname: "Ki" },
                            {name: "シールド付与" , subname: "Add shield"},
                            {name: "ジャングラー" , subname: "Jungler"},
                        ],
                        createDate: "2011/04/01",
                        updateDate: "2019/1/19",
    
                },
                {
                    id: 5,
                    name: "Sejuani",
                    subName: "セジュアニ",
                    popularName: "極北の激憤",
                    feature: "豊富なCCを持ち、更にスロー耐性も所持しているTank、Passhive発動中は非常に硬い",
                    roll: "Tank",
                    subRoll: "Fighter",
                    beCost: "4800",
                    rpCost: "880",
                    // img: require('./assets/chanpion/champion-sejuani-pororider-splash.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■■■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■■■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■■■■■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['極北の激憤', 'Fury of the North)'],
                            type: "Passive",
                            // icon: require('./assets/skill_Icon/Sejuani/Sejuani_Fury_of_the_North_(P).png'),
                            text: `Passive: 氷結の鎧(Frost Armor)と砕氷(Ice Breaker)という2つのPassiveを持つ。
                            氷結の鎧: 敵チャンピオンか大型モンスター、および敵タワーからDMを受けずにいると、増加AR比例のARと増加MR比例のMRが増加してSlowを無効化する。この効果はDMを受けてから3秒まで持続する。
                            砕氷: 自身がStunを与えた、Stun中の敵ユニットへの最初のAAかスキルに対象の最大HP比例の追加魔法DMを付与する。`
                        },
                        {
                            id: "Q",
                            name: ['猪突凍進', 'Arctic Assault'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Sejuani/Sejuani_Arctic_Assault_(Q).png'),
                            text: `Active: 指定地点にリープし、接触した全敵ユニットに魔法DMとKnockupを与える。敵チャンピオンに当たると突進は止まる。
                            シンプルなCC付き移動スキル。敵Championに衝突した場合、自動的にそのChampionをAAのターゲットにする効果がある。`
                        },
                        {
                            id: "W",
                            name: ['氷河の怒り', 'Winters Wrath'],
                            type: "Wスキル",
                            // icon: require("./assets/skill_Icon/Sejuani/Sejuani_Winter's_Wrath_(W).png"),
                            text: `Active: 指定方向をメイスで薙ぎ払い、その後に直線状に叩きつけ、それぞれ範囲内の敵ユニットに最大HP比例の物理DMと凍傷を与える。薙ぎ払いでは敵ミニオンと中立モンスターをKnockBackさせ、叩きつけでは全敵ユニットにSlowを与える。`
                        },
                        {
                            id: "E",
                            name: ['永久凍土', 'Permafrost'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Sejuani/Sejuani_Permafrost_(E).png'),
                            text: `Passive: 敵チャンピオンか大型ミニオン、および小型モンスター以外の中立モンスターへの自身と付近の味方MeleeチャンピオンのAA毎に凍傷を1スタック付与する(最大4スタック)。
                            Active: 対象の全凍傷を消費し、魔法DMとStun(1s)を与える。
                            CDが非常に短く、スタックさえ溜まれば次々とStunさせることが可能。`
                        },
                        {
                            id: "R",
                            name: ['グレイシャルプリズン', 'Glacial Prison'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Sejuani/Sejuani_Glacial_Prison_(R).png'),
                            text: `Active: 指定方向に武器を投げ、最初に当たった敵チャンピオンに魔法DMとStunを与える。飛距離が400を超えた場合、魔法DMとStun時間が増加し、周囲の敵ユニットにSlowを付与する。その後爆発し、周囲の敵ユニットに魔法DMとSlowを与える。`
                        },
                    ],
                    tagLists: [
                        {name: "ブリンク持ち" , subname: "blink"},
                        {name: "ハードCC持ち" , subname: "hard cloud control"},
                        {name: "ジャングラー" , subname: "Jungler"},
                    ],
                    createDate: "2012/01/17",
                    updateDate: "2019/1/19",

                },
                                {
                    id: 6,
                    name: "Ashe",
                    subName: "アッシュ",
                    popularName: "氷の射手",
                    feature: "射程無限のスタンと使い勝手のいい範囲攻撃、視界確保による危険察知とユーティリティに優れるMarksman",
                    roll: "Marksman",
                    subRoll: "Support",
                    beCost: "450",
                    rpCost: "260",
                    // img: require('./assets/chanpion/champion-ashe-splash.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■■■■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['フロストショット', 'Frost Shot'],
                            type: "Passive",
                            // icon: require('./assets/skill_Icon/Ashe/Ashe_Frost_Shot_(P).png'),
                            text: `Passive: AA毎にSlowを与える。このスキルでSlowを付与した対象へのAA毎に追加物理DMを付与する。Critical時にはDMは増加せずにSlowが100%増加する。`
                        },
                        {
                            id: "Q",
                            name: ['レンジャーフォーカス', 'Rangers Focus'],
                            type: "Qスキル",
                            // icon: require("./assets/skill_Icon/Ashe/Ashe_Ranger's_Focus_(Q).png"),
                            // icon2: require("./assets/skill_Icon/Ashe/Ashe_Ranger's_Focus_2_(Q).png"),
                            text: `Passive: AA動作毎に1スタック増加する(最大4スタック)。スタックは持続時間を過ぎると毎秒1スタック減少する。
                            Active: ASが増加して建物を含む敵ユニットへのAAが5回攻撃になる。1Hit目のみOHEが有効で、効果時間中はPassiveのスタックが増加しない。
                            このスキルは使用時にAAタイマーをリセットする。`
                        },
                        {
                            id: "W",
                            name: ['ボレー', 'Volley'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Ashe/Ashe_Volley_(W).png'),
                            text: `広範囲、長射程のスキル。
                            Active: 指定方向扇形の範囲に非貫通の矢を9本飛ばし、当たった敵ユニットに物理DMとSlowを与える。同一対象に矢が複数当たっても物理DMは1本分のみ。`
                        },
                        {
                            id: "E",
                            name: ['スカウトホーク', 'Hawkshot'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Ashe/Ashe_Hawkshot_(E).png'),
                            text: `Passive: 一定時間毎に1スタック増加する(最大2スタック)。
                            Active: 指定地点に視界を得るホークスピリットを放ち、指定地点の範囲2000の視界を得る。
                            射程が無限になり、2発までスタックできるため、非常に広範囲の視界を確保することが出来る。
                            このスキルで視界に映っていない敵を発見し、10秒以内に敵をキルした場合アシストを獲得することができる。
                            `
                        },
                        {
                            id: "R",
                            name: ['クリスタルアロー', 'Enchanted Crystal Arrow'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Ashe/Ashe_Enchanted_Crystal_Arrow_(R).png'),
                            text: `Active: 指定方向に視界を得る敵チャンピオンにのみに当たる矢を飛ばし、当たった敵チャンピオンに魔法DMと当たるまでの飛距離に比例したStunとフロストショットの値に依存したSlowを与える。
                            矢の飛行中はその位置がミニマップ上に表示される。`
                        },
                    ],
                    tagLists: [
                        {name: "高DPS" , subname: "high damage per second"},
                        { name: "射程が長い", subname: "Long range" },
                        {name: "ハードCC持ち" , subname: "hard cloud control"},
                        {name: "ウェーブクリア" , subname: "wave clere"},
                        {name: "ボットレーン" , subname: "Bot lane"},
                    ],
                    createDate: "2009/02/21",
                    updateDate: "2019/1/19",

                },
                {
                    id: 7,
                    name: "Akari",
                    subName: "アカリ",
                    popularName: "主なき暗殺者",
                    feature: "気を用いる、高い瞬間火力と追撃力を誇るアサシン",
                    roll: "Assassin",
                    subRoll: "なし",
                    beCost: "3150",
                    rpCost: "790",
                    // img: require('./assets/chanpion/champion-akali-splash.jpg'),
                    statusDatas: [
                        {name: "Attack"    , value: "■■■■■■" , color: "color:red" },
                        {name: "Magic"     , value: "■■■■■■■" , color: "color:purple" },
                        {name: "Toughness" , value: "■■■■" , color: "color:green" },
                        {name: "Mobility"  , value: "■■■■■■■" , color: "color:skyblue" },
                        {name: "Difficulty", value: "■■■■■■■" , color: "color:#cddc39" },
                    ],
                    skills: [
                        {
                            id: "P",
                            name: ['刺客の刻印', 'Assassins Mark'],
                            type: "Passive",
                            // icon: require("./assets/skill_Icon/Akari/Akali_Assassin's_Mark_(P).png"),
                            text: `高いダメージを持つAkaliのメイン武器。気の回復もこれの発動にかかっているため、積極的にスキルを当てていこう。
                            敵チャンピオンにスキルでDMを与えると、対象の周囲半径500に気の輪が出現する。
                            輪を横切ると鎌を振り回し、次のAAが強化され、敵チャンピオンに向かって移動する際のMSが増加する。
                            強化されたAAは、射程が125増加し追加魔法DMと、自身の気を回復させる効果が付く。`
                        },
                        {
                            id: "Q",
                            name: ['五連苦無', 'Five Point Strike'],
                            type: "Qスキル",
                            // icon: require('./assets/skill_Icon/Akari/Akali_Five_Point_Strike_(Q).png'),
                            text: `Active: 前方指定範囲に貫通する苦無を扇状に投げ、当たった敵ユニットに魔法DMを与え、範囲の先端に当たった敵ユニットには追加でSlowを与える。
                            最大ランク時は敵チャンピオン以外に対する魔法DMが25%増加する。
                            貫通する上に減衰なし、低クールダウンで連射が効く。ただし連発すると気を一瞬で消費する。`
                        },
                        {
                            id: "W",
                            name: ['黄昏の帳', 'Twilight Shroud'],
                            type: "Wスキル",
                            // icon: require('./assets/skill_Icon/Akari/Akali_Twilight_Shroud_(W).png'),
                            text: `Active: 指定地点に環状に拡大する煙幕を発生させ、気が回復する。
                            煙幕の範囲内ではMSが増加し、攻撃を行うまでインビジブル状態になる。
                            煙幕を一回でも出入りすることで3秒延長できる、効果時間を延長させるとクールダウンが短くなるという特徴がある。
                            `
                        },
                        {
                            id: "E",
                            name: ['翻身手裏剣', 'Shuriken Flip'],
                            type: "Eスキル",
                            // icon: require('./assets/skill_Icon/Akari/Akali_Shuriken_Flip_(E).png'),
                            // icon2: require('./assets/skill_Icon/Akari/Akali_Shuriken_Flip_2_(E).png'),
                            text: `Active: 指定方向に手裏剣を投げると同時に反対方向へKnockbackし、手裏剣が当たった敵ユニットに物理DMを与える。
                            手裏剣が敵ユニットか煙幕に当たった場合、対象に再使用可能になり、再使用時に対象まで無限にリープする。対象が敵ユニットの場合は同様の物理DMを与える。`
                        },
                        {
                            id: "R",
                            name: ['完遂', 'Perfect Execution'],
                            type: "Ultimate",
                            // icon: require('./assets/skill_Icon/Akari/Akali_Perfect_Execution_(R).png'),
                            // icon2: require('./assets/skill_Icon/Akari/Akali_Perfect_Execution_2_(R).png'),
                            text: `Active: 対象敵ユニットにリープして当たった敵ユニットに物理DMを与える。
                            このスキルは一度目使用後2.5秒経過すると10秒間再使用する事が出来る、再使用時は対象に対して高速リープし、対象の減少HP毎に増幅する魔法DMを与える。
                            再発動までに、いかに対象のHPを減らすかが腕の見せ所。`
                        },
                    ],
                    tagLists: [
                        {name: "ブリンク持ち" , subname: "blink"},
                        {name: "バーストダメージ" , subname: "burst damage"},
                        {name: "気" , subname: "Ki"},
                        {name: "ウェーブクリア" , subname: "wave clere"},
                        {name: "ミッドレーン" , subname: "Mid lane"},
                        {name: "インビジブル" , subname: "invisible"},
                    ],
                    createDate: "2010/05/11",
                    updateDate: "2019/1/19",

                },


                // チャンピオンデータ テンプレート
                // {
                //     id: ,
                //     name: "",
                //     subName: "--",
                //     popularName: "",
                //     feature: "",
                //     roll: "--",
                //     subRoll: "",
                //     beCost: "",
                //     rpCost: "",
                    // img: require(''),
                //     statusDatas: [
                //         {name: "Attack"    , value: "■" , color: "color:red" },
                //         {name: "Magic"     , value: "■" , color: "color:purple" },
                //         {name: "Toughness" , value: "■" , color: "color:green" },
                //         {name: "Mobility"  , value: "■" , color: "color:skyblue" },
                //         {name: "Difficulty", value: "■" , color: "color:#cddc39" },
                //     ],
                //     skills: [
                //         {
                //             id: "P",
                //             name: ['', ''],
                //             type: "Passive",
                            // icon: require('./assets/skill_Icon/'),
                //             text: ``
                //         },
                //         {
                //             id: "Q",
                //             name: ['', ''],
                //             type: "Qスキル",
                            // icon: require('./assets/skill_Icon/'),
                //             text: ``
                //         },
                //         {
                //             id: "W",
                //             name: ['', ''],
                //             type: "Wスキル",
                            // icon: require('./assets/skill_Icon/'),
                //             text: ``
                //         },
                //         {
                //             id: "E",
                //             name: ['', ''],
                //             type: "Eスキル",
                            // icon: require('./assets/skill_Icon/'),
                //             text: ``
                //         },
                //         {
                //             id: "R",
                //             name: ['', ''],
                //             type: "Ultimate",
                            // icon: require('./assets/skill_Icon/'),
                //             text: ``
                //         },
                //     ],
                //     tagLists: [
                //         {name: "ブリンク持ち" , subname: "blink"},
                //         {name: "バーストダメージ" , subname: "burst damage"},
                //         {name: "ウェーブクリア" , subname: "wave clere"},
                //         {name: "ミッドレーン" , subname: "Mid lane"},
                //     ],
                //     createDate: "",
                //     updateDate: "2019/1/19",

                // },
            ],
        }
    }
};