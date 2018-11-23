@extends('user.template')
@section('title','diagnose')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}"> < Back </a>
@endsection
@section('content')
    <section id="diagnose">
        <div id="indicator"></div>
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
            <div v-else id="page-3" class="page">
                <h1>Diagnosing..</h1>
            </div>
        </div>
        <div id="navigator">
            <button @click="activeStep--">Previous</button>
            <button @click="activeStep++">Next</button>
        </div>
    </section>

    <script src="js/app.js"></script>

@endsection
