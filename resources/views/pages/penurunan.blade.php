@extends('layouts.admin')

@section('content')
<script>
    $(document).ready(function () {
        //Penurunan
        var auto_refresh = setInterval(
            function () {
                $('#diet-penurunan-all').load('/admin/penurunan-all').fadeIn("slow");
            }, 500);
        var auto_refresh = setInterval(
            function () {
                $('#diet-penurunan-unpaid').load('/admin/penurunan-unpaid').fadeIn("slow");
            }, 500);
        var auto_refresh = setInterval(
            function () {
                $('#diet-penurunan-paid').load('/admin/penurunan-paid').fadeIn("slow");
            }, 500);
        var auto_refresh = setInterval(
            function () {
                $('#diet-penurunan-done').load('/admin/penurunan-done').fadeIn("slow");
            }, 500);
    })

</script>
<div class="tab-pane fade show active" id="v-pills-diet-penurunan-berat-badan" role="tabpanel"
    aria-labelledby="v-pills-diet-penurunan-berat-badan-tab">
    <h1>Diet Penurunan Berat Badan</h1>
    <div class="changeable">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home"
                    aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profilex-tab" data-toggle="tab" href="#unpaid" role="tab"
                    aria-controls="profile" aria-selected="false">Unpaid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#paid" role="tab" aria-controls="contact"
                    aria-selected="false">Paid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#done" role="tab" aria-controls="contact"
                    aria-selected="false">Done</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                <br>
                <h2>All</h2>
                <div id="diet-penurunan-all"></div>
            </div>
            <div class="tab-pane fade" id="unpaid" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                <h2>Unpaid</h2>
                <div id="diet-penurunan-unpaid"></div>
            </div>
            <div class="tab-pane fade" id="paid" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <h2>Paid</h2>
                <div id="diet-penurunan-paid"></div>
            </div>
            <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <h2>Done</h2>
                <div id="diet-penurunan-done"></div>
            </div>
        </div>
    </div>
</div>
@endsection
