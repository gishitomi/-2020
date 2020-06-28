var app = new Vue({
    el: '#contact',
    data: {
        userName: '',
        Email: '',
        contact: '',
        errorCounters: 0,
        message: 'テストよう',
        isName: false,
        isEmail: false,
        isContact: false,
        errorMessage: 'が入力されていません',
        danger: {
            color: 'red'
        }
    },
    methods: {
        checkError: function(event) {
            // if (this.userName === '' || this.Email === '' || this.contact === '') {
            //     this.errorCounters = 1
            //     this.isName = true
            //     this.isEmail = true
            //     this.isContact = true
            // }
            if (this.userName === '') {
                this.errorCounters++
                    this.isName = true
            } else {
                this.isName = false
            }
            if (this.errorCounters > 0) {
                window.alert('エラーは' + this.errorCounters + '個')
                event.preventDefault()



            }
        }
    }
})