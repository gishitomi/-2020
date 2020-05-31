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
        text: '',
        headLine: 'headline',
        crossingLine: 'crossing-line',
        subHeading: 'sub-heading'
    },
    methods: {
        changeText: function(txt) {
            this.text = txt
        }
    }
})