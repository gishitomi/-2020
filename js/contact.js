var app = new Vue({
    el: '#contact',
    data: {
        errorCounters: ['aaa'],
        message: 'テストよう'
    },
    methods: {
        checkError: function(event) {
            if (this.errorCounters.length > 0) {
                window.alert('エラーは' + this.errorCounters.length + '個')
                event.preventDefault()
            }
        }
    }
})