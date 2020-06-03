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
        nagoTxt: '名護のテキスト',
        motobuTxt: '本部町のテキスト',
        nakizinTxt: '今帰仁のテキスト',
        text: '北部の主な地域別のご紹介',
        headLine: 'headline',
        crossingLine: 'crossing-line',
        subHeading: 'sub-heading',
        blogText: 'blog-text',
        seeMore: 'see-more',
        isHidden: 'is-hidden',
        list: [{
                id: 1,
                title: '美ら海水族館',
                url: 'https://churaumi.okinawa/',
                thumbnailSrc: '../img/churaumi-aquarium-2407812_1920.jpg',
                text: `
            美ら海水族館は、沖縄県の本部半島備瀬崎近くにある海洋博公園内の水族館です。「美ら海(ちゅらうみ)」とは沖縄の方言で「美しい海、清らかな海」という意味です。沖縄の代表的な観光スポットで、例年多くの観光客が訪れます。なかでもおすすめなのがジンベエザメのいる大水槽です。巨大な水槽の中を優雅に泳ぐジンベエザメの姿に圧巻されます。
            `
            },
            {
                id: 2,
                title: '美ら海水族館',
                url: 'https://churaumi.okinawa/',
                thumbnailSrc: '../img/churaumi-aquarium-2407812_1920.jpg',
                text: `
            美ら海水族館は、沖縄県の本部半島備瀬崎近くにある海洋博公園内の水族館です。「美ら海(ちゅらうみ)」とは沖縄の方言で「美しい海、清らかな海」という意味です。沖縄の代表的な観光スポットで、例年多くの観光客が訪れます。なかでもおすすめなのがジンベエザメのいる大水槽です。巨大な水槽の中を優雅に泳ぐジンベエザメの姿に圧巻されます。
            `
            },
            {
                id: 3,
                title: '美ら海水族館',
                url: 'https://churaumi.okinawa/',
                thumbnailSrc: '../img/churaumi-aquarium-2407812_1920.jpg',
                text: `
            美ら海水族館は、沖縄県の本部半島備瀬崎近くにある海洋博公園内の水族館です。「美ら海(ちゅらうみ)」とは沖縄の方言で「美しい海、清らかな海」という意味です。沖縄の代表的な観光スポットで、例年多くの観光客が訪れます。なかでもおすすめなのがジンベエザメのいる大水槽です。巨大な水槽の中を優雅に泳ぐジンベエザメの姿に圧巻されます。
            `
            },
            {
                id: 4,
                title: '美ら海水族館',
                url: 'https://churaumi.okinawa/',
                thumbnailSrc: '../img/churaumi-aquarium-2407812_1920.jpg',
                text: `
            美ら海水族館は、沖縄県の本部半島備瀬崎近くにある海洋博公園内の水族館です。「美ら海(ちゅらうみ)」とは沖縄の方言で「美しい海、清らかな海」という意味です。沖縄の代表的な観光スポットで、例年多くの観光客が訪れます。なかでもおすすめなのがジンベエザメのいる大水槽です。巨大な水槽の中を優雅に泳ぐジンベエザメの姿に圧巻されます。
            `
            },

        ],
        count: 1
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