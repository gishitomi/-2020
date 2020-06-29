var app = new Vue({
    el: '#contact',
    data: {
        userName: '',
        Email: '',
        checkEmail: '',
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
            if (this.userName === '') {
                this.errorCounters++
                    this.isName = true
            } else {
                this.isName = false
            }
            if (this.Email === '') {
                this.errorCounters++
                    this.isEmail = true
            } else {
                this.isEmail = false
            }
            if (this.contact === '') {
                this.errorCounters++
                    this.isContact = true
            } else {
                this.isContact = false
            }
            if (this.errorCounters > 0) {
                window.alert('エラーは' + this.errorCounters + '個')
                event.preventDefault()
            }
        }
    }
})