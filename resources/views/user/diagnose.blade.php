@extends('user.template')
@section('title','diagnose')
@section('header')

<div class="col-md-12">


<!--Navbar-->
<nav class="navbar navbar-light amber lighten-4 mb-4">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">CheckMe</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent20">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
</div>
<!--/.Navbar-->


@endsection
@section('content')
<section id="diagnose">
        <div id="indicator">
            <div class="bullet">
                <div class="pills">
                    1
                </div>
                <div class="title"></div>
            </div>
        </div>
        <div id="mainframe">
            <div v-if="activeStep == 0" id="page-1" class="page">
                <h1>Cek Kesehatan</h1>
                <p>Cek kesehatanmu secara langsung dibantu oleh teknologi kami.</p>
            </div>
            <div v-else-if="activeStep == 1" id="page-1" class="page">
                <section>
                    <h1>Berapa Umur Anda?</h1>
                    <div>
                        <input type="number" name="age" v-model="answer.age">
                    </div>
                </section>
                <section>
                    <h1>Jenis Kelamin</h1>
                    <div>
                        <div class="form-group">
                            <label for="i-1">Laki-laki</label>
                            <input type="radio" name="gender" v-model="answer.gender" id="i-1" value="1">
                        </div>
                        <div class="form-group">
                            <label for="i-2">Perempuan</label>
                            <input type="radio" name="gender" v-model="answer.gender" id="i-2" value="2">
                        </div>
                    </div>
                </section>
            </div>
            <div v-else-if="activeStep == 2" id="page-2" class="page">
                <h1>Apa yang anda rasakan sekarang?</h1>
                <div class="checklist">
                    <label class="item" v-for="item in question.symptoms">
                        <b>@{{ item }}</b>
                        <input type="checkbox" name="symptoms" v-model="answer.symptoms" v-bind:value="item">
                    </label>
                </div>
            </div>
            <div v-else-if="activeStep == 3" id="page-3" class="page">
                <h1>Unggah foto lidah anda.</h1>
                <div>
                    <div class="uploader">
                        <b>+ Upload</b>
                        <input type="file" name="photo" v-on:change="fileSelected">
                    </div>
                </div>
            </div>
            <div v-else id="page-4" class="page">
                <h1>Diagnosing..</h1>
                <div style="display:none">
                    <img src="#" id="patient-photo" width="500">
                </div>
            </div>
        </div>
        <div id="navigator" v-if="activeStep < 4">
            <button @click="previousStep" v-if="activeStep != 0">Previous</button>
            <button @click="nextStep">Next</button>
        </div>
    </section>
    <script>
    // This code dosen't works on Firefox and IE and works on other browesers.
$(document).ready(function () {
$('.animated-icon1,.animated-icon3,.animated-icon4').click(function () {
$(this).toggleClass('open');
});
});

// Works everywhere
$(document).ready(function () {

// Hide/show animation hamburger function
$('.navbar-toggler').on('click', function () {

// Take this line to first hamburger animations
$('.animated-icon1').toggleClass('open');

// Take this line to second hamburger animation
$('.animated-icon3').toggleClass('open');

// Take this line to third hamburger animation
$('.animated-icon4').toggleClass('open');
});

});

    </script>
    <script>
        var classifier;
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
                        'Badan Lemas',
                        'Tidak ada'
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
                nextStep: function () {
                    this.activeStep++;
                },
                previousStep: function () {
                    this.activeStep--;
                },
                fileSelected: function (e) {
                    var files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;

                    // Add the file
                    this.answer.photo.tongue = files[0];
                },
                doDiagnosis: function () {
                    var url = URL.createObjectURL(this.answer.photo.tongue);
                    var image = $("#patient-photo");
                    var vm = this;

                    image.attr('src', url)

                    setTimeout(() => {
                        classifier.classify(image[0], function (err, result) {
                            alert(result);

                            vm.result = result;
                        })
                    }, 1000);
                }
            },
            watch: {
                activeStep: function (newStep, oldStep) {
                    if (newStep > oldStep) {
                        switch (oldStep) {
                            case 1: // Validate step 1
                                if (
                                    this.answer.age == null ||
                                    this.answer.gender == null
                                ) this.activeStep = 1;
                                break;

                            case 2: // Validate step 2
                                if (
                                    this.answer.symptoms.length == 0
                                ) this.activeStep = 2;
                                break;

                            case 3: // Validate step 3
                                if (
                                    this.answer.photo.tongue == {}
                                ) this.activeStep = 3;

                                break;

                            default:
                                break;
                        }
                    }
                }
            },
            mounted: function () {
                this.$nextTick(function () {
                    var featureExtractor    = ml5.featureExtractor('MobileNet', function () {
                        setTimeout(() => {
                            classifier.load('./model/dataset-2/model.json', function () {
                                console.log('Model Loaded!')
                            });
                        }, 1000);
                    });

                    // init the classifier
                    classifier     = featureExtractor.classification();
                })
            },
            updated: function () {
                this.$nextTick(function () {
                    if (this.activeStep == 4) {
                        this.doDiagnosis();
                    }
                })
            }
        });
    </script>


@endsection
