
        var diagnoseVM = new Vue({
            el: '#diagnose',
            data: {
                activeStep: 0,
                question: {
                    symptoms: [
                        'Sakit Kepala',
                        'Mual',
                        'Sakit Perut',
                        'Sesak Nafas',
                        'Demam',
                        'Badan Lemas'
                    ]
                },
                answer: {
                    age: null,
                    gender: null,
                    symptoms: [],
                    photo: {
                        tongue: {}
                    }
                },
                result: {}
            },
            methods: {
                fileSelected: function (e) {
                    var files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    
                    // Add the file
                    this.answer.photo.tongue = files[0];
                },
            }
        });