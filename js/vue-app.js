var headerApp = new Vue({
    el: '#header',
    data: {
        mainPage: 'main-page',
        mainPageWrapper: 'main-page-wrapper',
        border: 'border',
        text: 'header-text',
        morning: 'おはようございます',
        afternoon: 'こんにちは',
        evening: 'こんばんは',
        time: new Date().getHours()
    }
})

var mainApp = new Vue({
    el: '#main',
    data: {
        nagoTxt: `2000年に行われたG8（主要国首脳会議）の開催地としても話題を集めた（九州・沖縄サミット）。

        中心市街は名護湾に臨み、背後は古生層の山地がそびえる。沖縄本島北部地域の中心都市で国や県の出先機関も多く、商業が活発である。また農業では、ラン、キクなど花卉のほか果樹・野菜栽培が盛んで、漁業では、カツオの水揚が多く、タイ・クルマエビ養殖も行われる。
        
        沖縄自動車道が通じ、海岸は景勝地で海水浴場もある。市街地東方にある名護城址はカンヒザクラの名所で、近くには樹齢300年のヒンプンガジュマルがある。
        
        1978年以来、北海道日本ハムファイターズの春季キャンプが名護市営球場で行われている。(Wikipedia参照)`,
        motobuTxt: '本部町のテキスト',
        nakizinTxt: '今帰仁のテキスト',
        text: '北部の主な地域別のご紹介',
        headLine: 'headline',
        subHeading: 'sub-heading',
        blogText: 'blog-text',
        seeMore: 'see-more',
        isHidden: 'is-hidden',
        list: [{
                id: 0,
                title: 'りんごカフェ(カフェ)',
                url: 'http://oisi-okashi.com/',
                thumbnailSrc: './img/colorful-1835921_1920.jpg',
                text: '沖縄の北部の離れ島、瀬底島という場所にあるカフェです。建物も赤瓦が使われており、沖縄らしい雰囲気が味わえます。なので観光スポットとしてもオススメです。焼き菓子をメインに扱っていて、中でも特に力を入れてるなと感じるところはマカロンですね。種類が豊富で、沖縄の塩を使った塩キャラメルなど、マカロンも沖縄らしさが詰め込まれています。泡盛やさんぴん茶など、味の想像が全然つかないマカロンもあるので、気になるところです。',
            },
            {
                id: 1,
                title: '美ら海水族館',
                url: 'https://churaumi.okinawa/',
                thumbnailSrc: '../img/churaumi-aquarium-2407812_1920.jpg',
                text: `
            美ら海水族館は、沖縄県の本部半島備瀬崎近くにある海洋博公園内の水族館です。「美ら海(ちゅらうみ)」とは沖縄の方言で「美しい海、清らかな海」という意味です。沖縄の代表的な観光スポットで、例年多くの観光客が訪れます。なかでもおすすめなのがジンベエザメのいる大水槽です。巨大な水槽の中を優雅に泳ぐジンベエザメの姿に圧巻されます。
            `
            },


        ],
        count: 2
    },
    computed: {
        listItems() {
            const list = this.list
            return list.slice(0, this.count)
        }

    },
    methods: {
        changeText: function(txt) {
            this.text = txt
        },
        isMore: function() {

            this.count += 2
        }
    }
})